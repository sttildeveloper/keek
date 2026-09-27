FROM php:8.3-apache

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        libfreetype6-dev \
        libicu-dev \
        libjpeg62-turbo-dev \
        libonig-dev \
        libpng-dev \
        libzip-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j"$(nproc)" gd intl mbstring mysqli zip \
    && a2enmod rewrite headers expires \
    && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html
COPY docker/apache-vhost.conf /etc/apache2/sites-available/000-default.conf
COPY composer.json composer.lock ./
RUN composer install \
    --no-dev \
    --prefer-dist \
    --no-interaction \
    --no-progress \
    --optimize-autoloader

COPY . .

RUN mkdir -p writable/cache writable/logs writable/session writable/debugbar writable/uploads img/uploads video/uploads \
    && chown -R www-data:www-data writable img/uploads video/uploads \
    && find writable img/uploads video/uploads -type d -exec chmod 775 {} \;

EXPOSE 80
