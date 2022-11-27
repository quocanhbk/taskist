FROM php:7.2-apache

RUN docker-php-ext-install pdo pdo_mysql

COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

RUN a2enmod rewrite

COPY . /var/www/

RUN chown -R www-data:www-data /var/www