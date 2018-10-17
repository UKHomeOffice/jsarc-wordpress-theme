FROM wordpress:php7.2-apache

COPY website-content/ /var/www/html/wp-content
RUN chmod -R +w /wp-content/uploads

EXPOSE 80
