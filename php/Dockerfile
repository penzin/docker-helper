FROM php:8.2.1-fpm

# install modules
RUN apt-get update
RUN apt-get install -y --no-install-recommends \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng12-dev \
        libicu-dev \
        libxml2-dev \
        libzip-dev \
        libonig-dev \
        wget \
        git \

RUN docker-php-ext-install mcrypt zip intl mbstring pdo_mysql exif pcntl soap bcmath zip \
RUN docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ \
    && docker-php-ext-install gd

# configure
COPY php.ini /usr/local/etc/php/

# cleanup
RUN apt-get purge -y g++ \
    && apt-get autoremove -y \
    && rm -r /var/lib/apt/lists/* \
    && rm -rf /tmp/*

# install composer
RUN curl https://getcomposer.org/composer.phar > /usr/local/bin/composer && chmod a+x /usr/local/bin/composer

EXPOSE 9000
WORKDIR "/app"
CMD ["php-fpm"]
