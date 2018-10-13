FROM composer AS composer

COPY composer.* /app/

RUN composer install

FROM php:7.2-apache

COPY . .

COPY --from=composer /app/vendor/ vendor/
