FROM php:7.3-apache

MAINTAINER Paul Redmond

COPY . /srv/app
COPY docker/vhost.conf /etc/apache2/sites-available/000-default.conf

RUN docker-php-ext-install pdo pdo_mysql
RUN chown -R www-data:www-data /srv/app
