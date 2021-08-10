#!/bin/sh

docker build ./tool/php-fpm -t boost/php-fpm
docker run --rm -it -v $(pwd):/app -w /app boost/php-fpm composer install
