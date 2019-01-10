FROM wordpress:php7.2-apache


RUN apt-get update && apt-get install -y gnupg2

RUN echo "Listen 8081" > /etc/apache2/ports.conf && \
    sed -i /VirtualHost/s/80/8081/ /etc/apache2/sites-available/000-default.conf

ENV WORDPRESS_CLI_GPG_KEY 63AF7AA15067C05616FDDD88A3A2E8F226F0BC06

ENV WORDPRESS_CLI_VERSION 2.1.0
ENV WORDPRESS_CLI_SHA512 c2ff556c21c85bbcf11be38d058224f53d3d57a1da45320ecf0079d480063dcdc11b5029b94b0b181c1e3bec84745300cd848d28065c0d3619f598980cc17244

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

COPY apache2-startwp.sh /usr/local/bin
COPY website-content/themes/jsarc/ /var/www/themes/jsarc
RUN chown www-data:www-data -R /var/www/themes
RUN chown www-data:www-data -R /var/log/apache2



USER www-data
CMD ["apache2-startwp.sh", "apache2-foreground"]
