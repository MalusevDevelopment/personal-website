FROM valkey/valkey:8.0-bookworm

COPY ./valkey.conf /usr/local/etc/valkey/valkey.conf

HEALTHCHECK --interval=30s --timeout=30s --start-period=5s --retries=3 CMD [ "valkey-cli", "ping" ]

CMD [ "valkey-server", "/usr/local/etc/valkey/valkey.conf" ]
