ARG BASE=base

FROM dunglas/frankenphp:1.1-php8.3-bookworm as base

WORKDIR /var/www/html

ENV SERVER_NAME="dusanmalusev.test"
ENV DEBIAN_FRONTEND=noninteractive
ENV TZ=UTC

COPY ./docker/php/php.ini $PHP_INI_DIR/10-php.ini

RUN ln -snf "/usr/share/zoneinfo/$TZ" /etc/localtime \
    && echo "$TZ" > /etc/timezone \
    && apt-get update && apt-get upgrade -y \
    && apt-get install -y ca-certificates procps libvips curl \
    && install-php-extensions \
        pdo_pgsql \
        apcu \
        pgsql \
        igbinary \
        redis \
        intl \
        zip \
        pcntl \
        opcache \
        ffi \
        uuid

EXPOSE 80
EXPOSE 2019

HEALTHCHECK --start-period=60s CMD curl -f http://localhost:2019/metrics || exit 1
ENTRYPOINT ["/bin/start-container"]

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

FROM node:22-alpine AS frontend

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
COPY ./scripts/start-container /bin/start-container

RUN apt-get update \
    && apt-get purge -y \
    gcc make g++ apt-transport-https \
    autoconf bzip2 cpp-12 cpp g++ g++-12 gcc gcc-12 gcc-12 libasan8 m4 libtirpc3 libtsan2 libubsan1 \
    pkg-config pkgconf pkgconf-bin re2c \
    && apt-get -y autoremove \
    && apt-get clean \
    && chmod +x /bin/start-container \
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

ENTRYPOINT ["/bin/bash"]

FROM ${BASE} AS development

ARG WWWGROUP=1000
ARG WWWUSER=1000
ARG NODE_VERSION=22
ARG POSTGRES_VERSION=15

RUN apt-get update \
    && apt-get install -y \
        supervisor \
        gosu dnsutils gnupg \
        git build-essential unzip gcc \
        librsvg2-bin fswatch "postgresql-client-$POSTGRES_VERSION" \
    && install-php-extensions @composer xdebug \
    && groupadd --force -g "$WWWGROUP" sail \
    && useradd -ms /bin/bash --no-user-group -g "$WWWGROUP" -u "$WWWUSER" sail \
    && curl -fsSL https://deb.nodesource.com/gpgkey/nodesource-repo.gpg.key | gpg --dearmor -o /etc/apt/keyrings/nodesource.gpg \
    && echo "deb [signed-by=/etc/apt/keyrings/nodesource.gpg] https://deb.nodesource.com/node_$NODE_VERSION.x nodistro main" | tee /etc/apt/sources.list.d/nodesource.list

RUN apt-get update && apt-get install -y nodejs \
    && mkdir -p /var/log/xdebug && chown sail:sail -R /var/log/xdebug \
    && mkdir -p /home/sail/supervisord && chown -R sail:sail /home/sail/supervisord


EXPOSE 5173
EXPOSE 80

COPY ./docker/supervisord/supervisord.conf /etc/supervisor/supervisord.conf
COPY ./docker/supervisord/horizon.conf /etc/supervisor/conf.d/horizon.conf
COPY ./docker/supervisord/pulse-work.conf /etc/supervisor/conf.d/pulse-work.conf
COPY ./docker/supervisord/pulse-check.conf /etc/supervisor/conf.d/pulse-check.conf
COPY ./docker/supervisord/website.conf /etc/supervisor/conf.d/website.conf
COPY ./docker/supervisord/scheduler.conf /etc/supervisor/conf.d/scheduler.conf
COPY ./scripts/start-container-dev /bin/start-container

COPY ./docker/php/php.dev.ini $PHP_INI_DIR/20-php.ini
COPY ./docker/php/xdebug.ini $PHP_INI_DIR/99-xdebug.ini

RUN chmod +x /bin/start-container

USER sail
