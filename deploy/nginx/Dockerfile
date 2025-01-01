FROM composer:2.8 AS vendor

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

FROM node:22 AS frontend

ARG VITE_PUSHER_APP_KEY
ARG VITE_PUSHER_HOST="live.dusanmalusev.dev"
ARG VITE_PUSHER_PORT="443"
ARG VITE_PUSHER_SCHEME="https"
ARG VITE_PUSHER_APP_CLUSTER="mt1"


WORKDIR /app

COPY --chown=root:root . .
COPY --chown=root:root --from=vendor /app/vendor ./vendor

RUN npm install && \
    VITE_PUSHER_APP_KEY="${VITE_PUSHER_APP_KEY}" \
    VITE_APP_NAME="website-frontend" \
    VITE_PUSHER_HOST="${VITE_PUSHER_HOST}" \
    VITE_PUSHER_PORT="${VITE_PUSHER_PORT}" \
    VITE_PUSHER_SCHEME="${VITE_PUSHER_SCHEME}"  \
    VITE_PUSHER_APP_CLUSTER="${VITE_PUSHER_APP_CLUSTER}" \
    NODE_ENV=production npm run build

FROM nginx:1.27-bookworm

RUN apt-get update \
    && apt-get upgrade -y \
    && apt-get clean \
    && apt-get autoremove -y \
    && rm -rf /etc/nginx \
    && rm -rf /var/lib/apt/lists/*

COPY                 ./deploy/nginx/nginx.conf    /etc/nginx/nginx.conf
COPY                 ./deploy/nginx/sites         /etc/nginx/sites
COPY                 ./deploy/nginx/conf.d        /etc/nginx/conf.d
COPY                 ./public                     /var/www/html
COPY --from=frontend /app/public/build            /var/www/html/build
