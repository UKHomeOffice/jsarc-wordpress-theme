FROM wordpress:php7.2-apache

COPY website-content/ /var/www/html

EXPOSE 80
