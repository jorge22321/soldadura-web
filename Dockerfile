FROM php:8.4-apache-bookworm AS php-base

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        curl \
        libicu-dev \
        libonig-dev \
        libsqlite3-dev \
        libzip-dev \
        unzip \
    && docker-php-ext-install -j"$(nproc)" \
        intl \
        mbstring \
        opcache \
        pdo_sqlite \
        zip \
    && a2enmod expires headers rewrite \
    && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html


FROM composer:2 AS composer-bin


FROM php-base AS backend-build

COPY --from=composer-bin /usr/bin/composer /usr/bin/composer
COPY composer.json composer.lock ./

RUN composer install \
    --no-dev \
    --no-interaction \
    --no-progress \
    --no-scripts \
    --optimize-autoloader \
    --prefer-dist

COPY . .

RUN composer dump-autoload \
    --no-dev \
    --classmap-authoritative \
    --no-interaction


FROM node:22-alpine AS frontend-build

WORKDIR /app

COPY package.json package-lock.json .npmrc ./
RUN npm ci --ignore-scripts

COPY --from=backend-build /var/www/html /app
RUN npm run build


FROM php-base AS runtime

ENV APP_ENV=production \
    APP_DEBUG=false \
    LOG_CHANNEL=stderr \
    LOG_LEVEL=warning

COPY apache-vhost.conf /etc/apache2/sites-available/000-default.conf
COPY --from=backend-build --chown=www-data:www-data /var/www/html /var/www/html
COPY --from=frontend-build --chown=www-data:www-data /app/public/build /var/www/html/public/build
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint

RUN chmod +x /usr/local/bin/docker-entrypoint \
    && mkdir -p \
        bootstrap/cache \
        storage/app \
        storage/framework/cache \
        storage/framework/sessions \
        storage/framework/views \
        storage/logs \
    && chown -R www-data:www-data bootstrap/cache storage

EXPOSE 80

ENTRYPOINT ["docker-entrypoint"]
CMD ["apache2-foreground"]
