FROM php:7.2-apache
COPY src/ /var/www/html
COPY .flag /
EXPOSE 80
