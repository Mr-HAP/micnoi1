FROM php:7.1-fpm-alpine

MAINTAINER Esteban Arredondo "es_7eban@hotmail.com"

RUN apk update \
    && apk add nodejs \
    && apk add npm \
    && curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/bin/composer \
    && docker-php-ext-install mysqli pdo pdo_mysql


# add php configs - timezone, short tags, etc
ADD ./php.d /etc/php.d
ADD ./php-fpm.d /etc/php-fpm.d

# add php ini
ADD ./php.ini /etc/php.ini


CMD ["php-fpm"]

EXPOSE 9000
