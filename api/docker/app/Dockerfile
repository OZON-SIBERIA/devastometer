FROM php:8.1.0-fpm-alpine3.15

WORKDIR /app

#install composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mkdir -p /usr/local/bin
RUN mv composer.phar /usr/local/bin/composer

COPY ./api/composer.json composer.json
RUN composer install

RUN docker-php-ext-install pdo_mysql
