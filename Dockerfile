# Download plugins
FROM alpine:latest as pluginsdownload
# updraftplus has a vulnaribility on phpseclib
RUN apk update && apk add --no-cache \
    wget \
    unzip

RUN for plugin in cookie-notice ilab-media-tools wordpress-importer wp-export-menus wp-optimize; do \
        wget -O /tmp/${plugin}.zip https://downloads.wordpress.org/plugin/${plugin}.zip; \
    done && \
    unzip -d /tmp/plugins '/tmp/*.zip' && \
    rm /tmp/*.zip

COPY ./wp-plugins/acf-theme-code-pro.tar /tmp/plugins/
WORKDIR /tmp/plugins/
RUN tar -xf acf-theme-code-pro.tar && rm acf-theme-code-pro.tar

# Set up the base WordPress environment
FROM wordpress:6.3.2-php8.2-apache as base
ENV WORDPRESS_CLI_VERSION 2.8.1

RUN apt-get update && \
    apt-get install -y gnupg2 libapache2-mod-evasive mlocate nano && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/* && \
    echo "Listen 8081" > /etc/apache2/ports.conf && \
    sed -i /VirtualHost/s/80/8081/ /etc/apache2/sites-available/000-default.conf && \
    curl -o /usr/local/bin/wp -fSL "https://github.com/wp-cli/wp-cli/releases/download/v${WORDPRESS_CLI_VERSION}/wp-cli-${WORDPRESS_CLI_VERSION}.phar" && \
    chmod +x /usr/local/bin/wp && \
    wp --allow-root --version && \
    mkdir /var/log/mod_evasive && \
    chown www-data:www-data -R /var/www /var/log/apache2 /var/log/mod_evasive


RUN apt-get update && \
    apt-get install -y wget build-essential libjpeg-dev libtiff5-dev libpng-dev zlib1g-dev && \
    apt-get clean

# Re-install Ghostscript version 10.02.0
FROM base as ghostscript

ENV GHOST_SCRIPT_VERSION 10.02.0
RUN wget https://github.com/ArtifexSoftware/ghostpdl-downloads/releases/download/gs10020/ghostscript-${GHOST_SCRIPT_VERSION}.tar.xz -O /tmp/ghostscript-${GHOST_SCRIPT_VERSION}.tar.xz
RUN apt-get remove -y ghostscript openssl
RUN cd /tmp && tar -xf ghostscript-${GHOST_SCRIPT_VERSION}.tar.xz && \
    cd ghostscript-${GHOST_SCRIPT_VERSION} && \
    ./configure && \
    make && \
    make install
RUN ln -s /usr/local/bin/gs /usr/bin/ghostscript

# Re-install Openssl version 1.1.1
FROM ghostscript as openssl
ENV OPENSSL_VERSION 1.1.1
RUN wget https://www.openssl.org/source/openssl-${OPENSSL_VERSION}t.tar.gz -O /tmp/openssl-${OPENSSL_VERSION}.tar.gz
RUN cd /tmp && tar -zxf openssl-${OPENSSL_VERSION}.tar.gz && \
    cd openssl-${OPENSSL_VERSION}t && \
    ./config && \
    make test && \
    make install

# Re-install Curl
FROM openssl as curl
RUN apt-get update && apt-get install -y libssl-dev
ENV CURL_VERSION 8.3.0
RUN wget https://curl.se/download/curl-${CURL_VERSION}.tar.gz -O /tmp/curl-${CURL_VERSION}.tar.gz
RUN rm -rf /usr/local/include/curl
RUN apt-get remove --purge curl -y
RUN cd /tmp && tar -zxf curl-${CURL_VERSION}.tar.gz && \
    cd curl-${CURL_VERSION} && \
    ./configure --with-ssl --enable-versioned-symbols && \
    make && \
    make install
RUN ldconfig

# Final stage
FROM curl as final
ENV LD_LIBRARY_PATH=/usr/local/lib
RUN rm -rf /tmp/ghostscript-${GHOST_SCRIPT_VERSION}* && \
    rm -rf /tmp/openssl-${OPENSSL_VERSION}* && \
    rm -rf /tmp/curl-${CURL_VERSION}* && \
    apt-get remove -y wget build-essential && \
    apt-get autoremove -y && \
    rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-configure curl --with-curl=$LD_LIBRARY_PATH
RUN docker-php-ext-install curl

COPY uploads.ini /usr/local/etc/php/conf.d/uploads.ini
COPY apache2-startwp.sh /usr/local/bin
COPY website-content/themes/jsarc/ /var/www/html/wp-content/themes/jsarc
COPY --from=pluginsdownload /tmp/plugins/ /var/www/html/wp-content/plugins
COPY evasive.conf /etc/apache2/mods-enabled/evasive.conf

EXPOSE 8081
USER www-data
WORKDIR /var/www/html
CMD ["apache2-startwp.sh", "apache2-foreground"]