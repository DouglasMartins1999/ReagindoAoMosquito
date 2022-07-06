FROM php:7.4.30-apache-bullseye
RUN docker-php-ext-install mysqli
COPY . /var/www/html/
