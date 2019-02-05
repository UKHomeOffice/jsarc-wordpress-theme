<?php
function getSiteUrl() {
    if(isset($_ENV['SITE_URL'])) {
        return $_ENV['SITE_URL'];
    }

    return trim(file_get_contents('/var/www/html/wp-content/siteurl.txt'));
}

if (!defined('WP_HOME')) {
    define('WP_HOME', $_ENV['SITE_URL']);
}

if (!defined('WP_SITEURL')) {
    define('WP_SITEURL', $_ENV['SITE_URL']);
}