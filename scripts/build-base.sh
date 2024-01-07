#!/usr/bin/env bash

docker build \
    --build-arg WWWUSER="$(id -u)" \
    --build-arg WWWGROUP="$(id -g)" \
    --file ./docker/php/Dockerfile \
    --target base \
    --tag ghcr.io/dmalusev/website:base \
    .
