FROM php:8.2-apache as laravel

RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip  \
    openssl \
    libssl-dev

RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN docker-php-ext-enable mysqli pdo pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer