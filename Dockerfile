FROM wordpress:php7.1-apache

COPY website-content/ /var/www/html/wp-content

EXPOSE 80
