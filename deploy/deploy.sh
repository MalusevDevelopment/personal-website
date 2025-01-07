#!/bin/bash

WORKDIR=/opt/projects/website

pushd "$WORKDIR" || exit 1

print_usage() {
    echo "Usage: $0 -u <USERNAME> -r <registry> -i <image> -v <version>"
    exit 1
}

run_artisan_command() {
    local service=$1
    shift
    for container in $(docker ps --filter "label=com.docker.swarm.service.name=$service" -q); do
        # shellcheck disable=SC2068
        docker exec "$container" php artisan $@ -n --ansi
    done
}

VERSION="latest"
REGISTRY="ghcr.io"
USERNAME="codelieutenant"
IMAGES=(
  "nginx"
  "valkey"
  "website"
)


while getopts "r:u:v:" option; do
	case "$option" in
	r) REGISTRY=$OPTARG ;;
  u) USERNAME=$OPTARG ;;
  v) VERSION=$OPTARG ;;
	*) print_usage ;;
	esac
done

if [ -z "$USERNAME" ]; then
  echo "Username is required"
  exit 1
fi

docker login "$REGISTRY" --username "$USERNAME" --password-stdin < /dev/stdin || exit 1

for image in "${IMAGES[@]}"; do
  docker pull "$REGISTRY/malusevdevelopment/$image:$VERSION" || exit 1
done

docker logout "$REGISTRY"

run_artisan_command horizon horizon:terminate || exit 1

truncate --size=0 .env

printf "export VERSION=%s\n" "$VERSION" >> .env

source .env
docker stack deploy --prune --detach --compose-file "$WORKDIR/compose.yml" website || exit 1

run_artisan_command scheduler schedule-monitor:sync
run_artisan_command scheduler pulse:clear

popd || exit 1
