#!/usr/bin/env bash

function wp_plugin_install() {
/bin/sh -c "wp plugin install $1 --activate"
}

cp -r /var/www/themes/jsarc /var/www/html/wp-content/themes/

echo "$SITE_URL"
echo "define('WP_HOME', '$SITE_URL');" >> /var/www/html/wp-includes/default-constants.php
echo "define('WP_SITEURL', '$SITE_URL');" >> /var/www/html/wp-includes/default-constants.php
echo "define('WP_HOME', '$SITE_URL');" >> /var/www/html/wp-config.php
echo "define('WP_SITEURL', '$SITE_URL');" >> /var/www/html/wp-config.php

echo "@ini_set( 'upload_max_size' , '20M' );" >> /var/www/html/wp-config.php
echo "@ini_set( 'post_max_size', '13M');" >> /var/www/html/wp-config.php
echo "@ini_set( 'memory_limit', '15M' );" >> /var/www/html/wp-config.php

if [ -d "/var/www/jsarc" ] ; then
rm -rf /var/www/html/wp-content/themes/jsarc
ln -s /var/www/jsarc /var/www/html/wp-content/themes/jsarc
fi

if [ "$DEV_DEPLOYMENT" = "yes" ]; then
    wp core install \
    --title="$SITE_TITLE" \
    --url="$SITE_URL" \
    --admin_user="$ADMIN_USER" \
    --admin_email="$ADMIN_EMAIL" \
    --admin_password="$ADMIN_PASSWORD"
fi

wp_plugin_install wordpress-importer
wp_plugin_install /var/www/html/wp-content/themes/jsarc/plugins/acf-theme-code-pro.zip
wp_plugin_install ilab-media-tools
wp_plugin_install wp-export-menus
wp_plugin_install wp-mail-smtp
wp_plugin_install disable-xml-rpc

$@
