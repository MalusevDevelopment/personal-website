FROM debian:bookworm-slim AS base

LABEL maintainer="Dusan Malusev"

ARG WWWGROUP
ARG WWWUSER

WORKDIR /var/www/html

ENV DEBIAN_FRONTEND=noninteractive
ENV TZ=UTC
ENV MAKEFLAGS=-j8
ENV RUNNING_ON_LINUX="0"

RUN ln -snf "/usr/share/zoneinfo/$TZ" /etc/localtime && echo "$TZ" > /etc/timezone

RUN apt-get update && apt-get upgrade -y \
    && apt-get install -y gnupg curl ca-certificates libpq-dev zip unzip git supervisor libvips libcap2-bin libpng-dev apt-transport-https software-properties-common lsb-release \
    && curl -sSL https://packages.sury.org/php/README.txt | bash -x

RUN  apt-get update \
    && apt-get install -y \
        php8.3-cli php8.3-pgsql php8.3-imagick \
        php8.3-curl php8.3-mbstring  php8.3-gmp  php8.3-vips \
        php8.3-zip php8.3-bcmath php8.3-ffi php8.3-sockets \
        php8.3-intl php8.3-readline \
        php8.3-msgpack php8.3-igbinary php8.3-redis php8.3-xml php8.3-apcu php8.3-uuid php8.3-zstd php8.3-dev \
    && curl -sLS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer

RUN pecl install --configureoptions 'enable-sockets="on" enable-openssl="on" enable-swoole-curl="on" enable-cares="on" enable-brotli="on" enable-swoole-pgsql="on" enable-mysqlnd="no" with-swoole-odbc="no" with-swoole-oracle="no" enable-swoole-sqlite="no"' swoole

RUN apt-get -y purge apache2 php8.3-dev php8.3-mysql libpq-dev \
    && apt-get -y autoremove \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*


RUN setcap "cap_net_bind_service=+ep" /usr/bin/php8.3
RUN groupadd --force -g "$WWWGROUP" sail
RUN useradd -ms /bin/bash --no-user-group -g "$WWWGROUP" -u "$WWWUSER" sail
RUN mkdir -p /var/www/html \
    && chown -R sail:sail /var/www/html \
    && chmod g+s /var/www/html \
    && mkdir -p /home/sail/logs \
    && chown -R sail:sail /home/sail/logs

COPY start-container /usr/local/bin/start-container
COPY supervisord.conf /etc/supervisor/supervisord.conf
COPY swoole.ini /etc/php/8.3/cli/conf.d/25-swoole.ini

RUN chmod +x /usr/local/bin/start-container

EXPOSE 8000

ENTRYPOINT ["start-container"]

FROM node:20-alpine AS frontend

WORKDIR /var/www/html

COPY --chown=root:root . .

RUN npm install && npm run build

FROM ghcr.io/dmalusev/website:base AS production

ENV APP_ENV=production
ENV APP_DEBUG=false

COPY --chown=root:root . /var/www/html
COPY --from=frontend --chown=root:root /var/www/html/public/build /var/www/html/public/build

RUN composer install \
   --no-dev \
   --optimize-autoloader \
   --no-interaction \
   --no-progress \
   --no-suggest \
   --prefer-dist \
   --apcu-autoloader

RUN apt-get purge gcc make autotools g++ -y \
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
    && chmod -R 755 storage/framework/session


COPY horizon.conf /etc/supervisor/conf.d/horizon.conf
COPY website.conf /etc/supervisor/conf.d/website.conf
COPY scheduler.conf /etc/supervisor/conf.d/scheduler.conf
COPY php.ini /etc/php/8.3/cli/conf.d/99-sail.ini

ENTRYPOINT ["start-container"]


FROM ghcr.io/dmalusev/website:base AS develop-github

ARG NODE_VERSION=20
ARG POSTGRES_VERSION=15

RUN apt-get update \
    && mkdir -p /etc/apt/keyrings \
    && curl -fsSL https://deb.nodesource.com/gpgkey/nodesource-repo.gpg.key | gpg --dearmor -o /etc/apt/keyrings/nodesource.gpg \
    && echo "deb [signed-by=/etc/apt/keyrings/nodesource.gpg] https://deb.nodesource.com/node_$NODE_VERSION.x nodistro main" | tee /etc/apt/sources.list.d/nodesource.list \
    && apt-get install -y gosu dnsutils librsvg2-bin fswatch "postgresql-client-$POSTGRES_VERSION" \
    php8.3-dev php8.3-ast nodejs npm
RUN pecl install xdebug

RUN apt-get -y purge apache2 \
    && apt-get -y autoremove \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

COPY horizon.dev.conf /etc/supervisor/conf.d/horizon.conf
COPY website.dev.conf /etc/supervisor/conf.d/website.conf
COPY scheduler.dev.conf /etc/supervisor/conf.d/scheduler.conf
COPY php.dev.ini /etc/php/8.3/cli/conf.d/98-sail.ini
COPY xdebug.ini /etc/php/8.3/cli/conf.d/99-xdebug.ini

RUN mkdir -p /var/log/xdebug && chown sail:sail -R /var/log/xdebug

USER sail

EXPOSE 5173

ENTRYPOINT ["start-container"]


FROM base AS develop

ARG NODE_VERSION=20
ARG POSTGRES_VERSION=15

RUN apt-get update \
    && mkdir -p /etc/apt/keyrings \
    && curl -fsSL https://deb.nodesource.com/gpgkey/nodesource-repo.gpg.key | gpg --dearmor -o /etc/apt/keyrings/nodesource.gpg \
    && echo "deb [signed-by=/etc/apt/keyrings/nodesource.gpg] https://deb.nodesource.com/node_$NODE_VERSION.x nodistro main" | tee /etc/apt/sources.list.d/nodesource.list \
    && apt-get install -y gosu dnsutils librsvg2-bin fswatch "postgresql-client-$POSTGRES_VERSION" \
    php8.3-dev php8.3-ast nodejs npm

RUN pecl install xdebug

RUN apt-get -y purge apache2 \
    && apt-get -y autoremove \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

COPY horizon.dev.conf /etc/supervisor/conf.d/horizon.conf
COPY website.dev.conf /etc/supervisor/conf.d/website.conf
COPY scheduler.dev.conf /etc/supervisor/conf.d/scheduler.conf
COPY php.dev.ini /etc/php/8.3/cli/conf.d/98-sail.ini
COPY xdebug.ini /etc/php/8.3/cli/conf.d/99-xdebug.ini

RUN mkdir -p /var/log/xdebug && chown sail:sail -R /var/log/xdebug

USER sail

EXPOSE 5173

ENTRYPOINT ["start-container"]
