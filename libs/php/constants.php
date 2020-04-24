<?php
/*
 * @author Shahrukh Khan
 * @website http://www.thesoftwareguy.in
 * @facebook https://www.facebook.com/Thesoftwareguy7
 * @twitter https://twitter.com/thesoftwareguy7
 * @googleplus https://plus.google.com/+thesoftwareguyIn
 */

// dont add a trailing / at the end
define('HTTP_SERVER', 'http://localhost');
// add slash / at the end
define('SITE_DIR', '~/public_html/');

// database prefix if you use
define('DB_PREFIX', 'mp_');

define('DB_DRIVER', 'mysql');
define('DB_HOST', 'localhost');
define('DB_USER', 'cjferg');
define('DB_PASS', '9612729issiS#');
define('DB_NAME', 'vivecdb');
define('DB_CHAR', 'utf8');

define('SITE_NAME', 'Vivec Object Browser');

// define database tables
define('TABLE_PAGES', DB_PREFIX.'pages');
define('TABLE_TAGLINE', DB_PREFIX.'tagline');

// Vivec cjferg
define('MAX_FRAMES', 5)
?>
