FROM ubuntu:22.04 as base

LABEL maintainer="Dusan Malusev"

ARG WWWGROUP
ARG WWWUSER

WORKDIR /var/www/html

ENV DEBIAN_FRONTEND=noninteractive
ENV TZ=UTC
ENV MAKEFLAGS=-j8
ENV RUNNING_ON_LINUX="0"

RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt-get update && apt-get upgrade -y \
    && apt-get install -y gnupg gosu curl ca-certificates zip unzip git supervisor sqlite3 libcap2-bin libpng-dev \
    && curl -sS 'https://keyserver.ubuntu.com/pks/lookup?op=get&search=0x14aa40ec0831756756d7f66c4f4ea0aae5267a6c' | gpg --dearmor | tee /etc/apt/keyrings/ppa_ondrej_php.gpg > /dev/null \
    && echo "deb [signed-by=/etc/apt/keyrings/ppa_ondrej_php.gpg] https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy main" > /etc/apt/sources.list.d/ppa_ondrej_php.list \
    && apt-get update \
    && apt-get install -y php8.2-cli \
    php8.2-pgsql php8.2-sqlite3 php8.2-imagick \
    php8.2-curl php8.2-mbstring \
    php8.2-zip php8.2-bcmath php8.2-ffi php8.2-sockets \
    php8.2-intl php8.2-readline \
    php8.2-msgpack php8.2-igbinary php8.2-redis php8.2-apcu php8.2-swoole \
    php8.2-ds php8.2-decimal php8.2-uuid php8.2-zstd \
    && curl -sLS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer


RUN setcap "cap_net_bind_service=+ep" /usr/bin/php8.2
RUN groupadd --force -g $WWWGROUP sail
RUN useradd -ms /bin/bash --no-user-group -g $WWWGROUP -u $WWWUSER sail
RUN mkdir -p /var/www/html \
    && chown -R sail:sail /var/www/html \
    && chmod g+s /var/www/html \
    && mkdir -p /home/sail/logs \
    && chown -R sail:sail /home/sail/logs

COPY start-container /usr/local/bin/start-container
COPY supervisord.conf /etc/supervisor/supervisord.conf

RUN chmod +x /usr/local/bin/start-container

EXPOSE 8000

ENTRYPOINT ["start-container"]

FROM base as production

RUN apt-get -y autoremove \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

COPY horizon.conf /etc/supervisor/conf.d/horizon.conf
COPY website.conf /etc/supervisor/conf.d/website.conf
COPY php.ini /etc/php/8.2/cli/conf.d/99-sail.ini

ENTRYPOINT ["start-container"]

FROM base as develop

ARG NODE_VERSION=20
ARG POSTGRES_VERSION=15

RUN apt-get install -y python2 dnsutils librsvg2-bin fswatch php8.2-dev php8.2-xml php8.2-ast php8.2-pcov php8.2-xdebug php8.2-xhprof \
    && curl -sLS https://deb.nodesource.com/setup_$NODE_VERSION.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g npm \
    && curl -sS https://www.postgresql.org/media/keys/ACCC4CF8.asc | gpg --dearmor | tee /etc/apt/keyrings/pgdg.gpg >/dev/null \
    && echo "deb [signed-by=/etc/apt/keyrings/pgdg.gpg] http://apt.postgresql.org/pub/repos/apt jammy-pgdg main" > /etc/apt/sources.list.d/pgdg.list \
    && apt-get update \
    && apt-get install -y postgresql-client-$POSTGRES_VERSION \
    && apt-get -y autoremove \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

COPY horizon.dev.conf /etc/supervisor/conf.d/horizon.conf
COPY website.dev.conf /etc/supervisor/conf.d/website.conf
COPY php.dev.ini /etc/php/8.2/cli/conf.d/99-sail.ini

USER sail

ENTRYPOINT ["start-container"]
