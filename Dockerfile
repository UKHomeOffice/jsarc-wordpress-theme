FROM wordpress:php7.2-apache

COPY website-content/ /var/www/html/wp-content
RUN chmod -R 777 /var/www/html/wp-content/uploads

VOLUME /var/www/html/wp-content/uploads 
EXPOSE 80
