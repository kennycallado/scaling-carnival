FROM php:8-apache

ENV ENVIROMENT=production

# RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli pdo_mysql
RUN docker-php-ext-install pdo_mysql \
  && docker-php-ext-enable pdo_mysql
RUN a2enmod rewrite

COPY ./src/ /var/www/html/
