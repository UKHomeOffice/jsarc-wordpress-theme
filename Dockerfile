# Download plugins
FROM alpine:3.20.3 as pluginsdownload
# updraftplus has a vulnaribility on phpseclib
RUN apk update && apk add --no-cache \
    wget \
    unzip

RUN for plugin in cookie-notice ilab-media-tools tablepress timeline-express wordpress-importer wp-export-menus wp-optimize duplicate-page  wordpress-seo; do \
        wget -O /tmp/${plugin}.zip https://downloads.wordpress.org/plugin/${plugin}.zip; \
    done && \
    unzip -d /tmp/plugins '/tmp/*.zip' && \
    rm /tmp/*.zip

COPY ./wp-plugins/acf-theme-code-pro.tar /tmp/plugins/
WORKDIR /tmp/plugins/
RUN tar -xf acf-theme-code-pro.tar && rm acf-theme-code-pro.tar

FROM quay.io/ukhomeofficedigital/wp-base:v6.6.2
COPY uploads.ini /usr/local/etc/php/conf.d/uploads.ini
COPY apache2-startwp.sh /usr/local/bin
COPY website-content/themes/jsarc/ /var/www/html/wp-content/themes/jsarc
COPY --from=pluginsdownload /tmp/plugins/ /var/www/html/wp-content/plugins
COPY evasive.conf /etc/apache2/mods-enabled/evasive.conf

EXPOSE 8081
USER www-data
WORKDIR /var/www/html
CMD ["apache2-startwp.sh", "apache2-foreground"]