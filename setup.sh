#!/usr/bin/env bash

docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    -e COMPOSER_ALLOW_SUPERUSER=1 \
    laravelsail/php82-composer:latest \
    composer update --ignore-platform-reqs

cp .env.example .env

./vendor/bin/sail up -d || exit 1

sleep 10

./vendor/bin/sail artisan migrate || exit 1
./vendor/bin/sail artisan key:generate || exit 1
./vendor/bin/sail artisan storage:link
./vendor/bin/sail artisan db:seed || exit 1
