FROM webdevops/php-nginx:8.1

COPY ./ /app

RUN composer2 install -d /app