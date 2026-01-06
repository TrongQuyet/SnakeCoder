FROM php:8.2-fpm-alpine

RUN apk update && apk add --no-cache \
    nginx \
    supervisor

WORKDIR /var/www/html

COPY index.php /var/www/html/index.php

COPY docker/nginx.conf /etc/nginx/nginx.conf
COPY docker/default.conf /etc/nginx/http.d/default.conf
COPY docker/supervisord.conf /etc/supervisord.conf

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

CMD ["supervisord", "-c", "/etc/supervisord.conf"]



