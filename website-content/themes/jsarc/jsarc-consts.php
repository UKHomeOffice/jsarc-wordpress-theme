<?php
function getSiteUrl() {
    if(isset($_ENV['SITE_URL'])) {
        return $_ENV['SITE_URL'];
    }

    return trim(file_get_contents('/var/www/html/wp-content/siteurl.txt'));
}
if (!defined('WP_DEBUG')) {
    define('WP_DEBUG', true);
}

if (!defined('WP_HOME')) {
    define('WP_HOME', getSiteUrl());
}

if (!defined('WP_SITEURL')) {
    define('WP_SITEURL', getSiteUrl());
}