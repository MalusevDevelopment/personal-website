FROM valkey/valkey:8.0-bookworm AS base

RUN groupadd --force -r redis \
    && useradd -r --no-user-group -g redis -u 1000 --no-create-home  redis \
    && mkdir -p /usr/local/etc/valkey \
    && chown -R redis:redis /usr/local/etc/valkey \
    && chown -R redis:redis /data

COPY --chown=redis:redis deploy/valkey/conf/valkey.conf /usr/local/etc/valkey/valkey.conf

USER redis

HEALTHCHECK --interval=30s --timeout=30s --start-period=5s --retries=3 CMD [ "valkey-cli", "ping" ]

FROM base AS production

CMD [ "valkey-server", "/usr/local/etc/valkey/valkey.conf" ]

FROM base AS development

CMD [ "valkey-server" ]
