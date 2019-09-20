FROM php:7-apache

RUN curl -sL https://deb.nodesource.com/setup_12.x | bash - 

WORKDIR /var/www/html

COPY ./000-default.conf /etc/apache2/sites-available/000-default.conf

COPY ./blog /var/www/html

RUN chmod 0777 ./storage ./bootstrap/cache

RUN apt update && apt install -y git \
    git-core curl \
    make build-essential \
    openssl libssl-dev nodejs

RUN pecl install mongodb

COPY ./php.ini /usr/local/etc/php/php.ini

RUN a2enmode rewrite
