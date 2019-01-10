#!/usr/bin/env bash

function wp_plugin_install() {
www-data -s /bin/sh -c "wp plugin install $1 --activate"

}

cp -r /var/www/themes/jsarc /var/www/html/wp-content/themes/

wp_plugin_install wordpress-importer
wp_plugin_install salesforce-wordpress-to-lead
wp_plugin_install simply-static


if [ -d "/var/www/jsarc" ] ; then
rm -rf /var/www/html/wp-content/themes/jsarc
ln -s /var/www/jsarc /var/www/html/wp-content/themes/jsarc
fi

$@
