ARG BASE=base

FROM dunglas/frankenphp:1.3-php8.4 AS base

WORKDIR /var/www/html

ENV DEBIAN_FRONTEND=noninteractive
ENV TZ=UTC
ENV PATH="$PATH:/usr/local/bin"

COPY ./docker/php/php.ini $PHP_INI_DIR/10-php.ini

RUN ln -snf "/usr/share/zoneinfo/$TZ" /etc/localtime \
    && echo "$TZ" > /etc/timezone \
    && apt-get update && apt-get upgrade -y \
    && apt-get install -y \
      ca-certificates procps libvips curl

RUN install-php-extensions pgsql pdo_pgsql intl zip ffi pcntl opcache @composer igbinary msgpack sockets

COPY --from=ghcr.io/php/pie:bin /pie /usr/bin/pie

RUN apt-get update && apt-get install -y \
      git pkg-config libzstd-dev libcurl4-openssl-dev libc-ares-dev libsqlite3-dev libbrotli-dev libpq-dev \
    && pie install phpredis/phpredis \
      --enable-redis-igbinary \
      --enable-redis-msgpack \
      --enable-redis-zstd \
    && pie install apcu/apcu --disable-valgrind-checks

#RUN git clone --depth=1 https://github.com/axboe/liburing.git /liburing \
#    && cd /liburing && ./configure && make install -j$(nproc) \
#    && cd / && rm -rf /liburing \
#    && pie install swoole/swoole \
#      --enable-swoole-curl \
#      --enable-cares \
#      --enable-brotli \
#      --enable-swoole-pgsql \
#      --enable-swoole-sqlite \
#      --enable-swoole-thread \
#      --enable-iouring \
#      --enable-sockets

RUN apt-get purge -y git libzstd-dev libcurl4-openssl-dev libc-ares-dev libsqlite3-dev libbrotli-dev libpq-dev \
    && apt-get install -y libzstd1 libcurl4 libc-ares2 libsqlite3-0 liburing2 libbrotli1 libpq5

COPY ./docker/php/sockets.ini $PHP_INI_DIR/10-sockets.ini

EXPOSE 80
EXPOSE 8080
EXPOSE 2019

HEALTHCHECK --start-period=60s CMD curl -f http://localhost:2019/metrics || exit 1

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

FROM ${BASE} AS production

WORKDIR /var/www/html

ENV APP_ENV=production
ENV APP_DEBUG=false

COPY --chown=root:root . .
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
ARG POSTGRES_VERSION=17

RUN groupadd --force -g "$WWWGROUP" sail \
    && useradd -ms /bin/bash --no-user-group -g "$WWWGROUP" -u "$WWWUSER" sail \
    && apt-get install -y \
    supervisor \
    gosu dnsutils gnupg \
    git build-essential unzip gcc libnss3-tools \
    librsvg2-bin fswatch lsb-release \
    && pie install xdebug/xdebug \
    && mkdir -p /var/log/xdebug && chown sail:sail -R /var/log/xdebug \
    && mkdir -p /home/sail/supervisord && chown -R sail:sail /home/sail/supervisord \
    && install -d /usr/share/postgresql-common/pgdg \
    && curl -o /usr/share/postgresql-common/pgdg/apt.postgresql.org.asc --fail https://www.postgresql.org/media/keys/ACCC4CF8.asc \
    && sh -c 'echo "deb [signed-by=/usr/share/postgresql-common/pgdg/apt.postgresql.org.asc] https://apt.postgresql.org/pub/repos/apt $(lsb_release -cs)-pgdg main" > /etc/apt/sources.list.d/pgdg.list' \
    && curl -fsSL https://deb.nodesource.com/gpgkey/nodesource-repo.gpg.key | gpg --dearmor -o /etc/apt/keyrings/nodesource.gpg \
    && echo "deb [signed-by=/etc/apt/keyrings/nodesource.gpg] https://deb.nodesource.com/node_$NODE_VERSION.x nodistro main" | tee /etc/apt/sources.list.d/nodesource.list \
    && apt-get update && apt-get install -y "postgresql-client-$POSTGRES_VERSION" nodejs

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

CMD ["start-container"]
