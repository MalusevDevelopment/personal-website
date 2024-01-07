#!/usr/bin/env bash

docker build \
    --build-arg WWWUSER="$(id -u)" \
    --build-arg WWWUSER="$(id -g)" \
    --build-arg BASE="ghcr.io/dmalusev/website:base" \
    --file ./docker/php/Dockerfile \
    --target production \
    --tag ghcr.io/dmalusev/website:latest \
    .
