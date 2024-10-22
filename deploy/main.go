package main

import (
	"context"
	"errors"
	"flag"
	"fmt"
	"io"
	"os"
	"os/signal"
	"syscall"

	"github.com/docker/docker/api/types/container"
	"github.com/docker/docker/api/types/image"
	"github.com/docker/docker/api/types/mount"
	"github.com/docker/docker/api/types/registry"
	"github.com/docker/docker/client"

	"github.com/CodeLieutenant/website/deploy/streamjson"
)

var (
	version            string
	dockerImage        string
	repositoryToken    string
	repositoryUsername string
	repositoryAddr     string
)

type PullImageOutput struct {
	Status         string `json:"status"`
	Progress       string `json:"progress"`
	ProgressDetail struct {
		Current int `json:"current"`
		Total   int `json:"total"`
	} `json:"progressDetail"`
}

func pullImage(ctx context.Context, c client.ImageAPIClient, dockerImage string, needsAuth ...bool) error {
	var (
		auth string
		err  error
	)

	if len(needsAuth) > 0 && needsAuth[0] {
		auth, err = registry.EncodeAuthConfig(registry.AuthConfig{
			Username:      repositoryUsername,
			Password:      repositoryToken,
			ServerAddress: repositoryAddr,
		})
		if err != nil {
			return err
		}
	}

	out, err := c.ImagePull(ctx, dockerImage, image.PullOptions{RegistryAuth: auth})
	if err != nil {
		return err
	}

	defer out.Close()

	_, _ = os.Stdout.WriteString("Downloading image layers: \n")

	streamer := streamjson.New[PullImageOutput](out, func(data PullImageOutput) []byte {
		return []byte("\r" + data.Progress)
	})

	if _, err := io.Copy(os.Stdout, streamer); err != nil {
		return err
	}

	_, _ = os.Stdout.WriteString("\nDownload finished\n")

	return nil
}

func extractPublicFiles(ctx context.Context, c client.ContainerAPIClient, dockerImage string) error {
	const hostStaticFiles = "/var/www/www.dusanmalusev.dev"
	const containerBasePath = "/var/www/html/public"
	const extractPath = "/extract"

	if err := os.Remove(hostStaticFiles); err != nil && !errors.Is(err, os.ErrNotExist) {
		return err
	}

	if err := os.MkdirAll(hostStaticFiles, os.ModePerm|0o755); err != nil {
		return err
	}

	res, err := c.ContainerCreate(
		ctx,
		&container.Config{
			Image:           dockerImage,
			NetworkDisabled: true,
			Cmd:             []string{"cp", "-a", containerBasePath + "/.", extractPath},
		},
		&container.HostConfig{
			AutoRemove: true,
			Mounts: []mount.Mount{
				{
					Source: extractPath,
					Target: hostStaticFiles,
					Type:   mount.TypeBind,
				},
			},
		},
		nil,
		nil,
		"extract-static-files",
	)
	if err != nil {
		return err
	}

	fmt.Println(res.ID)

	return nil
}

func deploy(ctx context.Context, c client.ContainerAPIClient, dockerImage string) error {
	if err := c.ContainerRemove(ctx, "website", container.RemoveOptions{
		RemoveLinks: true,
		Force:       true,
	}); err != nil {
		return err
	}

	return nil
}

func main() {
	flag.StringVar(&version, "version", "latest", "Version of the APP to deploy")
	flag.StringVar(&repositoryToken, "repository-token", "", "Repository token")
	flag.StringVar(&repositoryUsername, "repository-username", "codelieutenant", "Repository username")
	flag.StringVar(&repositoryAddr, "repository-addr", "ghrc.io", "Repository address")
	flag.StringVar(&dockerImage, "image", "ghcr.io/codelieutenant/website", "Image to deploy")

	flag.Parse()

	ctx, cancel := signal.NotifyContext(context.Background(), os.Interrupt, syscall.SIGTERM, syscall.SIGINT)
	defer cancel()

	dockerClient, err := client.NewClientWithOpts(
		client.FromEnv,
		client.WithAPIVersionNegotiation(),
	)
	if err != nil {
		panic(err)
	}

	defer dockerClient.Close()

	dockerVersion, err := dockerClient.ServerVersion(ctx)
	if err != nil {
		panic(err)
	}

	fmt.Println("Docker API Version: ", dockerVersion.APIVersion)
	fmt.Println("Docker Platform: ", dockerVersion.Platform.Name)

	if err := pullImage(ctx, dockerClient, fmt.Sprintf("%s:%s", dockerImage, version), true); err != nil {
		panic(err)
	}
}
