<?php

// display all error except deprecated and notice
error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE );
// turn on output buffering
ob_start();
//define('__ROOT__', dirname(__FILE__));
require_once(dirname(__FILE__) . "/constants.php");
//require_once(dirname(__FILE__) . "/common_functions.php");

/*
 * turn off magic-quotes support, for runtime e, as it will cause problems if enabled
 */
if (version_compare(PHP_VERSION, 5.3, '<') && function_exists('set_magic_quotes_runtime')) set_magic_quotes_runtime(0);

// set currentPage in the local scope
$currentPage = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);


// basic options for PDO
$dboptions = array(
    PDO::ATTR_PERSISTENT => FALSE,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

//connect with the server
try {
    $DB = new PDO(DB_DRIVER . ':host=' . DB_HOST . ';dbname=' .
    DB_DATABASE, DB_HOST_USERNAME, DB_HOST_PASSWORD, $dboptions);
} catch (Exception $ex) {
    echo errorMessage($ex->getMessage());
    echo 'Availbale drivers:';
    echo print_r(PDO::getAvailableDrivers());
    die;
}
echo 'config - ';
if ( is_object($DB) ) {
  echo '$DB obj exists| ';
}
else { echo '$DB obj does NOT exist| '; }

?>
