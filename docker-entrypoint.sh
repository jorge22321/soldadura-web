#!/bin/sh

set -eu

mkdir -p \
    bootstrap/cache \
    storage/app \
    storage/framework/cache \
    storage/framework/sessions \
    storage/framework/views \
    storage/logs

touch storage/app/database.sqlite
chown -R www-data:www-data bootstrap/cache storage

if [ -z "${APP_KEY:-}" ]; then
    APP_KEY="$(php -r 'echo "base64:".base64_encode(random_bytes(32));')"
    export APP_KEY
    echo "APP_KEY no fue configurada; se generó una clave temporal para este contenedor."
fi

if [ "${RUN_MIGRATIONS:-true}" = "true" ]; then
    php artisan migrate --force --no-interaction
fi

php artisan optimize

exec "$@"
