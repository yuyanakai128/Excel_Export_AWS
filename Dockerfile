FROM php:7.2-fpm-alpine

MAINTAINER Kimoto <@mangue.eu>

RUN apk add --no-cache --virtual .build-deps \
        $PHPIZE_DEPS \
        curl-dev \
        libtool \
        libxml2-dev \
    && apk add --no-cache \
        curl \
        git \
        mysql-client \
        libintl \
        icu \
        icu-dev \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
    && docker-php-ext-install \
        bcmath \
        curl \
        iconv \
        mbstring \
        pdo \
        pdo_mysql \
        pcntl \
        tokenizer \
        xml \
        gd \
        zip \
        intl \
    && curl -s https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin/ --filename=composer \
    && apk del -f .build-deps

WORKDIR /var/www/html