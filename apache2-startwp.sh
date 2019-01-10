#!/usr/bin/env bash


cp -r /var/www/themes/jsarc /var/www/html/wp-content/themes/
cp -r /var/www/plugins    /var/www/html/wp-content/plugins/


if [ -d "/var/www/jsarc" ] ; then
rm -rf /var/www/html/wp-content/themes/jsarc
ln -s /var/www/jsarc /var/www/html/wp-content/themes/jsarc
fi

$@
