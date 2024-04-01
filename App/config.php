<?php

define('BASEDIR', dirname(__FILE__, 2));
define('VIEWS', BASEDIR . '/App/View/modules/');

$_ENV['db']['host'] = "localhost:3306";
$_ENV['db']['user'] = "user";
$_ENV['db']['pass'] = "pass";
$_ENV['db']['database'] = "db_bleach";

?>
