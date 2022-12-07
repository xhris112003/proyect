FROM php:7.4-apache
COPY /ci4 /var/www/html
EXPOSE 3306