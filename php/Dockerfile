FROM php:8.3-fpm-alpine

# Common extensions (adjust as needed)
RUN docker-php-ext-install pdo pdo_mysql

# Optional: add bash + curl for debugging
RUN apk add --no-cache bash curl

WORKDIR /var/www/html

COPY php.ini /usr/local/etc/php/conf.d/zz-custom.ini
