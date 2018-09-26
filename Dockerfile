FROM wordpress:php7.2-apache

COPY website-content/ /var/www/html/wp-content
COPY wp-config.php /var/www/html

EXPOSE 80
