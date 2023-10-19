#!/usr/bin/env bash

sleep 5s # wait for mysql db to be up

if grep -Fxq "define('WP_HOME', '$SITE_URL');" /var/www/html/wp-includes/default-constants.php
then
    echo "Defaults already set"
else
    echo "define('WP_HOME', '$SITE_URL');" >> /var/www/html/wp-includes/default-constants.php
    echo "define('WP_SITEURL', '$SITE_URL');" >> /var/www/html/wp-includes/default-constants.php
fi

if grep -Fxq "define( 'WP_DEBUG', true);" /var/www/html/wp-config.php
then
    sed -i.bak "/define( 'WP_DEBUG'/s/true/false/" /var/www/html/wp-config.php
fi

if [ -d "/var/www/themes/jsarc" ] ; then
    rm -rf /var/www/html/wp-content/themes/jsarc
    ln -s /var/www/themes/jsarc /var/www/html/wp-content/themes/jsarc
fi

if [ "$DEV_DEPLOYMENT" = "yes" ]; then
    wp core install \
    --title="$SITE_TITLE" \
    --url="$SITE_URL" \
    --admin_user="$ADMIN_USER" \
    --admin_email="$ADMIN_EMAIL" \
    --admin_password="$ADMIN_PASSWORD"
fi

if [ "$DEV_DEPLOYMENT" = "yes" ]; then
  # updraftplus has a vulnaribility on phpseclib
  wp plugin activate wordpress-importer acf-theme-code-pro wp-export-menus wp-optimize timeline-express tablepress cookie-notice ilab-media-tools
  wp language core install en_GB
  wp site switch-language en_GB
  wp theme activate jsarc
fi

if [[ "$ADMIN_DEPLOYMENT" == "no" ]]; then
echo "Redirect 301 /wp-login.php $ADMIN_SITE_URL/wp-login.php" >> /var/www/html/.htaccess
echo "Redirect 301 /wp-admin/ $ADMIN_SITE_URL/wp-admin" >> /var/www/html/.htaccess
fi

# Disable XML-RPC
read -r -d '' NO_XML_RPC << EOM
# Block WordPress xmlrpc.php requests
 <Files xmlrpc.php>
 order deny,allow
 deny from all
 </Files>
EOM
echo "$NO_XML_RPC" >> /var/www/html/.htaccess

$@
