#!/usr/bin/env bash

docker run --rm \
  -u "$(id -u):$(id -g)" \
  -v "$(pwd):/var/www/html" \
  -w /var/www/html \
  -e COMPOSER_ALLOW_SUPERUSER=1 \
  laravelsail/php83-composer:latest \
  composer update --ignore-platform-reqs

cp .env.example .env

mkdir -p storage/keys

openssl dhparam -out storage/keys/dhparam.conf 2048
openssl req -x509 -nodes \
  -newkey rsa:4096 -keyout storage/keys/ssl.key \
  -out storage/keys/ssl.cert -sha256 \
  -days 365 \
  -subj "/C=CA/ST=QC/O=Artisan, Inc./CN=dusanmalusev.local" \
  -addext "subjectAltName=DNS:dusanmalusev.local"

chmod 644 storage/keys/ssl.cert
chmod 640 storage/keys/ssl.key
chmod 640 storage/keys/dhparam.conf

./vendor/bin/sail up -d --build || exit 1

sleep 5

./vendor/bin/sail artisan migrate || exit 1
./vendor/bin/sail artisan key:generate || exit 1
./vendor/bin/sail artisan storage:link
./vendor/bin/sail artisan db:seed || exit 1
