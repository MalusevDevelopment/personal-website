#!/bin/bash

run_artisan_command() {
    local service=$1
    shift
    for container in $(docker ps --filter "label=com.docker.swarm.service.name=$service" -q); do
        # shellcheck disable=SC2068
        docker exec "$container" php artisan $@ -n --ansi
    done

}

run_artisan_command horizon horizon:terminate || exit 1

docker stack deploy --prune --detach --compose-file /opt/website/compose.yml

run_artisan_command scheduler schedule-monitor:sync
run_artisan_command scheduler pulse:clear
