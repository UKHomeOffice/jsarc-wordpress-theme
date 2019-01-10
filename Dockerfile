FROM wordpress:php7.2-apache


RUN apt-get update && apt-get install -y gnupg2

RUN echo "Listen 8081" > /etc/apache2/ports.conf && \
    sed -i /VirtualHost/s/80/8081/ /etc/apache2/sites-available/000-default.conf

ENV WORDPRESS_CLI_GPG_KEY 63AF7AA15067C05616FDDD88A3A2E8F226F0BC06

ENV WORDPRESS_CLI_VERSION 2.0.1
ENV WORDPRESS_CLI_SHA512 21b9c1d65993f88bf81cc73c0a832532cc424bea8c15563a77af1905d0dc4714f2af679dfadedd3b683f3968902b4b6be4c6cf94285da9f5582b30c1dac5397f


RUN set -ex; \
	 curl -o /usr/local/bin/wp -fSL "https://github.com/wp-cli/wp-cli/releases/download/v${WORDPRESS_CLI_VERSION}/wp-cli-${WORDPRESS_CLI_VERSION}.phar"; \
	\
	export GNUPGHOME="$(mktemp -d)"; \
	# gpg --keyserver ha.pool.sks-keyservers.net --recv-keys "$WORDPRESS_CLI_GPG_KEY"; \
	# gpg --batch --decrypt --output /usr/local/bin/wp /usr/local/bin/wp.gpg; \
	# command -v gpgconf && gpgconf --kill all || :; \
	# rm -rf "$GNUPGHOME" /usr/local/bin/wp.gpg; \
	# \
	# echo "$WORDPRESS_CLI_SHA512 */usr/local/bin/wp" | sha512sum -c -; \
	chmod +x /usr/local/bin/wp; \
	wp --allow-root --version


RUN  mkdir -p /var/www/themes/
RUN  mkdir -p /var/www/plugins/
COPY apache2-startwp.sh /usr/local/bin
COPY website-content/themes/jsarc/ /var/www/themes/jsarc
COPY website-content/plugins/ /var/www/plugins 
RUN chown www-data:www-data -R /var/www/themes
RUN chown www-data:www-data -R /var/log/apache2



USER www-data
CMD ["apache2-startwp.sh", "apache2-foreground"]
