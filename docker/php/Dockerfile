ARG BASE=base

FROM dunglas/frankenphp:1.2-php8.3 as base

WORKDIR /var/www/html

ENV SERVER_NAME="dusanmalusev.test"
ENV DEBIAN_FRONTEND=noninteractive
ENV TZ=UTC

COPY ./scripts/start-container /usr/local/bin/start-container
COPY ./docker/php/php.ini $PHP_INI_DIR/00-php.ini

RUN ln -snf "/usr/share/zoneinfo/$TZ" /etc/localtime \
    && echo "$TZ" > /etc/timezone \
    && chmod +x /usr/local/bin/start-container \
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
ENTRYPOINT ["start-container"]

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

RUN apt-get purge -y \
    gcc make g++ apt-transport-https \
    autoconf bzip2 cpp-12 cpp g++ g++-12 gcc gcc-12 gcc-12 libasan8 m4 libtirpc3 libtsan2 libubsan1 \
    pkg-config pkgconf pkgconf-bin re2c \
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

ENTRYPOINT ["start-container"]
