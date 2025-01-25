<?php
header('Content-Type: text/html; charset=utf8');
date_default_timezone_set('Europe/Istanbul');
error_reporting(E_ALL);
ini_set("display_errors", 1);
error_reporting(1);

include_once "ez_sql_core.php";
include_once "ez_sql_mysql.php";

$dbhost = '127.0.0.1';
$dbuser = 'root';
$dbpass = 'root';
$dbname = 'sungate_vb';
$encoding = 'utf8mb4';
// var_dump($dbuser, $dbpassword, $dbname, $dbhost);

// Connect to MySQL database (without passing encoding in constructor)
$db = new ezSQL_mysqli($dbuser, $dbpass, $dbname, $dbhost);


if (!$db->quick_connect($dbuser, $dbpassword, $dbname, $dbhost)) {
    die("Database connection failed.");
}

// Set character encoding and collation
define('DILADI', $encoding);
define('DILKARSILASTIRMASI', 'utf8mb4_general_ci');

$db->query("SET NAMES '" . DILADI . "'");
$db->query("SET CHARACTER SET " . DILADI);
$db->query("SET COLLATION_CONNECTION = '" . DILKARSILASTIRMASI . "'");

echo "Database connection successful!";
?>