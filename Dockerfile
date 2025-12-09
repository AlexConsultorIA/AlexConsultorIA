FROM php:8.2-apache

RUN a2enmod rewrite

COPY . /var/www/html/

# Cambiar DocumentRoot para apuntar a /public
RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf /etc/apache2/apache2.conf

WORKDIR /var/www/html/public
