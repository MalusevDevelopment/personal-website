ARG BASE="base"

FROM dunglas/frankenphp AS base

LABEL maintainer="Dusan Malusev"

ARG WWWGROUP
ARG WWWUSER

WORKDIR /var/www/html

ENV SERVER_NAME="dusanmalusev.test"
ENV DEBIAN_FRONTEND=noninteractive
ENV TZ=UTC
ENV MAKEFLAGS=-j20
ENV RUNNING_ON_LINUX="0"

RUN ln -snf "/usr/share/zoneinfo/$TZ" /etc/localtime && echo "$TZ" > /etc/timezone

RUN apt-get update && apt-get upgrade -y \
    && apt-get install -y ca-certificates supervisor top

RUN install-php-extensions \
	  pdo_pgsql \
    apcu \
    pgsql \
    zstd \
    msgpack \
    igbinary \
    redis \
	  intl \
	  zip \
    pcntl \
	  opcache \
    uuid

RUN setcap "cap_net_bind_service=+ep" /usr/local/bin/php
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
COPY ./docker/php/php.ini /usr/local/etc/php/conf.d/00-php.ini

EXPOSE 8000

# FROM laravelsail/php83-composer:latest AS vendor
FROM ${BASE} AS vendor

WORKDIR /app

ENV APP_ENV=production
ENV APP_DEBUG=false
ENV COMPOSER_ALLOW_SUPERUSER=1

COPY . .

RUN install-php-extensions @composer \
    && composer install \
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
    gcc make g++ apt-transport-https \
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
COPY ./docker/supervisord/horizon.conf /etc/supervisor/conf.d/pulse-work.conf
COPY ./docker/supervisord/horizon.conf /etc/supervisor/conf.d/pulse-check.conf
COPY ./docker/supervisord/website.conf /etc/supervisor/conf.d/website.conf
COPY ./docker/supervisord/scheduler.conf /etc/supervisor/conf.d/scheduler.conf

COPY ./docker/php/preload.ini /usr/local/etc/php/conf.d/10-preload.ini

ENTRYPOINT ["start-container"]


FROM ${BASE} AS develop

ARG NODE_VERSION=20
ARG POSTGRES_VERSION=15

RUN apt-get update \
    && apt-get install gosu dnsutils libvips gnupg curl -y \
    && mkdir -p /etc/apt/keyrings \
    && curl -fsSL https://deb.nodesource.com/gpgkey/nodesource-repo.gpg.key | gpg --dearmor -o /etc/apt/keyrings/nodesource.gpg \
    && echo "deb [signed-by=/etc/apt/keyrings/nodesource.gpg] https://deb.nodesource.com/node_$NODE_VERSION.x nodistro main" | tee /etc/apt/sources.list.d/nodesource.list \
    && apt-get install -y librsvg2-bin fswatch "postgresql-client-$POSTGRES_VERSION" \
    nodejs npm git build-essential unzip


COPY ./docker/php/php.dev.ini /usr/local/etc/php/conf.d/10-php.ini

RUN install-php-extensions @composer xdebug && rm /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
COPY ./docker/php/xdebug.ini /usr/local/etc/php/conf.d/99-xdebug.ini
RUN mkdir -p /var/log/xdebug && chown sail:sail -R /var/log/xdebug

COPY ./docker/supervisord/supervisord.dev.conf /etc/supervisor/supervisord.conf
COPY ./docker/supervisord/website.dev.conf /etc/supervisor/conf.d/website.conf
RUN mkdir -p /home/sail/supervisord && chown -R sail:sail /home/sail/supervisord

USER sail

EXPOSE 5173

ENTRYPOINT ["start-container"]
