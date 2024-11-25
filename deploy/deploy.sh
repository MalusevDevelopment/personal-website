            export VERSION=${{ inputs.version }}
            export IMAGE="ghcr.io/codelieutenant/website:$VERSION"
            export STATIC_FILES="/var/www/www.dusanmalusev.dev"
            export CONTAINER_BASE_PATH="/var/www/html"
            export CONTAINER_STATIC_FILES="$CONTAINER_BASE_PATH/public"
            export CONTAINER_APP_LOCAL_STORAGE="$CONTAINER_BASE_PATH/storage/app"
            export APP_LOCAL_STORAGE="/opt/website/storage"
            export EXTRACT_PATH="/extract"
            export LOGS_PATH="/var/log/website"
            export ENV_FILE="/home/${{ secrets.SERVER_USERNAME }}/website/.env"
            docker login ghcr.io --username dmalusev --password ${{ secrets.REGISTRY_TOKEN  }} || exit 1
            docker pull "$IMAGE"
            docker logout ghcr.io

            docker rm -f website
            docker run --name extract-static-files --rm -it -v "$STATIC_FILES:$EXTRACT_PATH" "$IMAGE" cp -a "$CONTAINER_STATIC_FILES/." "$EXTRACT_PATH"
            docker run \
              --name migrate \
              --rm \
              --network website \
              --add-host=host.docker.internal:host-gateway \
              --env-file "$ENV_FILE" \
              -it "$IMAGE" php artisan migrate -n --force

              sudo mkdir -p "$STATIC_FILES"
              sudo mkdir -p "$APP_LOCAL_STORAGE"
              sudo mkdir -p "$APP_LOCAL_STORAGE/public"
              sudo mkdir -p "$LOGS_PATH"

              export FILE="$STATIC_FILES/storage"
              if [[ ! -L "$FILE" ]]; then
                  sudo ln -s "$APP_LOCAL_STORAGE/public" "$STATIC_FILES/storage"
              fi

              docker run \
              	-it \
              	--name website \
              	-d \
              	--restart unless-stopped \
              	-p 8000:80 \
              	--network website \
              	-v "$LOGS_PATH:$LOGS_PATH" \
              	-v "$STATIC_FILES:$CONTAINER_STATIC_FILES" \
              	-v "$APP_LOCAL_STORAGE:$CONTAINER_APP_LOCAL_STORAGE" \
              	-v "$APP_LOCAL_STORAGE/public:$APP_LOCAL_STORAGE/public" \
              	--add-host=host.docker.internal:host-gateway \
              	--env-file "$ENV_FILE" "$IMAGE" \
              	  /bin/start-container php artisan octane:start \
                        --host=0.0.0.0 \
                        --port=80 \
                        --admin-port=2019 \
                        -vvv
