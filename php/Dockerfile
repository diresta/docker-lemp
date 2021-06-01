FROM php:7.3-fpm

RUN apt-get update && apt-get install -y libzip-dev && docker-php-ext-install -j$(nproc) iconv mbstring mysqli pdo_mysql zip

ADD php.ini /usr/local/etc/php/conf.d/40-custom.ini

WORKDIR /var/www

CMD ["php-fpm"]