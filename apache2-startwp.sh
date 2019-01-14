#!/usr/bin/env bash


cp -r /var/www/themes/jsarc /var/www/html/wp-content/themes/

# echo "define('UPLOADS', '' . 'images');" >> /var/www/html/wp-config.php
echo "define('WP_PLUGIN_DIR', '' . '../wp-content/themes/jsarc/plugins');" >> /var/www/html/wp-includes/default-constants.php
echo "define('WP_PLUGIN_URL', '' . '/wp-content/themes/jsarc/plugins');" >> /var/www/html/wp-includes/default-constants.php


if [ -d "/var/www/jsarc" ] ; then
rm -rf /var/www/html/wp-content/themes/jsarc
ln -s /var/www/jsarc /var/www/html/wp-content/themes/jsarc
fi


$@
