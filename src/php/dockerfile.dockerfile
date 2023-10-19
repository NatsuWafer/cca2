# PHP-FPM
FROM php:8.2-fpm
RUN apt-get update -y && apt-get install -y \
    && docker-php-ext-install mysqli \
    && docker-php-ext-enable mysqli



