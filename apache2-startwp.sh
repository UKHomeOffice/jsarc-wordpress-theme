#!/usr/bin/env bash

function wp_plugin_install() {
wp plugin install $1 --activate
}

cp -r /var/www/themes/jsarc /var/www/html/wp-content/themes/



if [ -d "/var/www/jsarc" ] ; then
rm -rf /var/www/html/wp-content/themes/jsarc
ln -s /var/www/jsarc /var/www/html/wp-content/themes/jsarc
fi

$@
