ARG BASE="base"

FROM php:8.3-zts AS php

ARG FRANKENPHP_VERSION="1.1.0"
ARG GO_VERSION="1.22.0"

RUN apt-get update && apt-get install -y curl libpq-dev libpq5 uuid-dev libuuid1 \
    && docker-php-ext-install pgsql pdo_pgsql pcntl sockets opcache \
    && docker-php-ext-enable pgsql pdo_pgsql pcntl sockets opcache

RUN curl -sLS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer

RUN pecl install igbinary msgpack redis uuid zstd apcu

ENV LD_LIBRARY_PATH="/lib/x86_64-linux-gnu/:/usr/local/lib/:/usr/lib:/lib:/lib64"

RUN apt-get install -y wget libbrotli1 libbrotli-dev libncurses5 pkg-config \
    libreadline-dev libreadline8 libxml2 libsqlite3-0 libargon2-1 libonig5 libz3-4 \
    && wget -c https://dl.google.com/go/go$GO_VERSION.linux-amd64.tar.gz \
    && tar -C /usr/local -xzf go$GO_VERSION.linux-amd64.tar.gz \
    && wget -c https://github.com/dunglas/frankenphp/archive/refs/tags/v$FRANKENPHP_VERSION.tar.gz \
    && ls -la \
    && tar -xzf v$FRANKENPHP_VERSION.tar.gz \
    && cd frankenphp-$FRANKENPHP_VERSION/caddy/frankenphp \
    && CGO_CFLAGS=$(php-config --includes) CGO_LDFLAGS="$(php-config --ldflags) $(php-config --libs)" \
    PATH="$PATH:/usr/local/go/bin" go build -o /usr/local/bin/frankenphp \
    && rm -rf /usr/local/go /tmp/* /var/tmp/* /var/lib/apt/lists/* /var/cache/apt/* /var/cache/debconf/* /var/cache/debconf/*-old

FROM php AS base

LABEL maintainer="Dusan Malusev"

ARG WWWGROUP
ARG WWWUSER

WORKDIR /var/www/html

ENV DEBIAN_FRONTEND=noninteractive
ENV TZ=UTC
ENV MAKEFLAGS=-j20
ENV RUNNING_ON_LINUX="0"

RUN ln -snf "/usr/share/zoneinfo/$TZ" /etc/localtime && echo "$TZ" > /etc/timezone

RUN apt-get update && apt-get upgrade -y \
    && apt-get install -y gnupg curl ca-certificates supervisor gosu dnsutils libvips

RUN setcap "cap_net_bind_service=+ep" /usr/bin/php8.3
RUN groupadd --force -g "$WWWGROUP" sail
RUN useradd -ms /bin/bash --no-user-group -g "$WWWGROUP" -u "$WWWUSER" sail
RUN mkdir -p /var/www/html \
    && chown -R sail:sail /var/www/html \
    && chmod g+s /var/www/html \
    && mkdir -p /var/log/website \
    && mkdir -p /var/log/supervisord \
    && mkdir -p /var/run/supervisord \
    && chown -R sail:sail /var/log/website \
    && chown -R sail:sail /var/log/supervisor \
    && chown -R sail:sail /var/run/supervisord


COPY ./docker/php/start-container /usr/local/bin/start-container
RUN chmod +x /usr/local/bin/start-container

# REMOVED FOR NOW -> Until contact page is setup
# COPY ./docker/supervisord/sqs-worker.conf /etc/supervisor/conf.d/sqs-worker.conf
COPY ./docker/supervisord/supervisord.conf /etc/supervisor/supervisord.conf
COPY ./docker/php/swoole.ini /etc/php/8.3/cli/conf.d/25-swoole.ini

EXPOSE 8000

# FROM laravelsail/php83-composer:latest AS vendor
FROM ${BASE} AS vendor

WORKDIR /app

ENV APP_ENV=production
ENV APP_DEBUG=false
ENV COMPOSER_ALLOW_SUPERUSER=1

COPY . .

RUN composer install \
    --no-dev \
    --optimize-autoloader \
    --no-interaction \
    --ignore-platform-reqs \
    --no-progress \
    --prefer-dist

FROM node:20-alpine AS frontend

WORKDIR /app

COPY --chown=root:root . .
COPY --chown=root:root --from=vendor /app/vendor ./vendor

RUN npm install && NODE_ENV=production npm run build

FROM ${BASE} AS production

WORKDIR /var/www/html

ENV APP_ENV=production
ENV APP_DEBUG=false

COPY --chown=root:root . .
COPY --from=frontend --chown=root:root /app/public/build ./public/build
COPY --from=vendor --chown=root:root /app/vendor ./vendor

RUN apt-get purge -y \
    gcc make autotools build-essential g++ gnupg \
    apache2 php8.3-dev php8.3-mysql libpq-dev \
    libpng-dev libc-ares-dev libcurl4-gnutls-dev \
    git zip unzip apt-transport-https software-properties-common lsb-release \
    && apt-get -y autoremove \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* \
    && rm -rf bootstrap/cache/  \
    && rm -rf storage/framework/cache  \
    && rm -rf storage/framework/views  \
    && rm -rf storage/framework/sessions  \
    && mkdir -p bootstrap/cache \
    && mkdir -p storage/framework/cache \
    && mkdir -p storage/framework/views \
    && mkdir -p storage/framework/sessions \
    && chmod -R 755 bootstrap/cache \
    && chmod -R 755 storage/framework/cache \
    && chmod -R 755 storage/framework/views \
    && chmod -R 755 storage/framework/sessions

COPY ./docker/supervisord/horizon.conf /etc/supervisor/conf.d/horizon.conf
COPY ./docker/supervisord/website.conf /etc/supervisor/conf.d/website.conf
COPY ./docker/supervisord/scheduler.conf /etc/supervisor/conf.d/scheduler.conf

COPY ./docker/php/php.ini /etc/php/8.3/cli/conf.d/00-php.ini
COPY ./docker/php/preload.ini /etc/php/8.3/cli/conf.d/10-preload.ini
COPY ./docker/php/swoole.ini /etc/php/8.3/cli/conf.d/25-swoole.ini

ENTRYPOINT ["start-container"]


FROM ${BASE} AS develop

ARG NODE_VERSION=20
ARG POSTGRES_VERSION=15

RUN apt-get update \
    && mkdir -p /etc/apt/keyrings \
    && curl -fsSL https://deb.nodesource.com/gpgkey/nodesource-repo.gpg.key | gpg --dearmor -o /etc/apt/keyrings/nodesource.gpg \
    && echo "deb [signed-by=/etc/apt/keyrings/nodesource.gpg] https://deb.nodesource.com/node_$NODE_VERSION.x nodistro main" | tee /etc/apt/sources.list.d/nodesource.list \
    && apt-get install -y librsvg2-bin fswatch "postgresql-client-$POSTGRES_VERSION" \
    php8.3-dev php8.3-ast nodejs npm git build-essential

RUN pecl install xdebug

RUN mkdir -p /home/sail/supervisord && chown -R sail:sail /home/sail/supervisord

COPY ./docker/supervisord/supervisord.dev.conf /etc/supervisor/supervisord.conf
COPY ./docker/supervisord/horizon.dev.conf /etc/supervisor/conf.d/horizon.conf
COPY ./docker/supervisord/website.dev.conf /etc/supervisor/conf.d/website.conf
COPY ./docker/supervisord/scheduler.dev.conf /etc/supervisor/conf.d/scheduler.conf

COPY ./docker/php/php.dev.ini /etc/php/8.3/cli/conf.d/99-php.ini
COPY ./docker/php/xdebug.ini /etc/php/8.3/cli/conf.d/99-xdebug.ini
COPY ./docker/php/swoole.ini /etc/php/8.3/cli/conf.d/25-swoole.ini


RUN mkdir -p /var/log/xdebug && chown sail:sail -R /var/log/xdebug

USER sail

EXPOSE 5173

ENTRYPOINT ["start-container"]
