FROM php:8.1-apache

RUN docker-php-ext-install pgsql pdo_pgsql

COPY . /var/www/html/
