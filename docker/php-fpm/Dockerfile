FROM php:5.6-fpm
MAINTAINER Ruslan Bekenev <rbekenev@cayugasoft.com>

ADD egometry.ini /usr/local/etc/php/conf.d
ADD egometry.pool.conf /usr/local/etc/php-fpm.d/

RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libpq-dev \
    curl \
		git 

RUN pecl install mongodb && docker-php-ext-enable mongodb

RUN usermod -u 1000 www-data

WORKDIR /var/www/egometry

CMD ["php-fpm"]
EXPOSE 9000
