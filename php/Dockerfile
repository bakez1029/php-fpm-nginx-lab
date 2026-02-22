FROM php:8.3-fpm-alpine

RUN docker-php-ext-install pdo pdo_mysql
RUN apk add --no-cache bash curl

WORKDIR /var/www/html

# Copy composer files first for caching
COPY src/composer.json src/composer.lock ./

# Install composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && composer install --no-dev --optimize-autoloader \
    && rm composer-setup.php

# Copy application source
COPY src .

COPY php.ini /usr/local/etc/php/conf.d/zz-custom.ini
