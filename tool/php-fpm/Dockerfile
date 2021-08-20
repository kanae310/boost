FROM php:7.4.22-fpm

WORKDIR /var/www/html

#pdoインストール
RUN docker-php-ext-install pdo_mysql

#composerインストール
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

#gitインストール
RUN apt-get update
RUN apt-get install -y git zip unzip

#コンテナ起動直前に流すスクリプト追加
COPY docker-entrypoint.sh /usr/local/bin
RUN chmod 777 /usr/local/bin/docker-entrypoint.sh
ENTRYPOINT ["docker-entrypoint.sh"]

RUN pecl install redis && docker-php-ext-enable redis

CMD ["php-fpm"]
