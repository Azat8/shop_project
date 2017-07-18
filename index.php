<?php

//example preg_replace
//$string = '16 - 06 - 2017';
//
//$pattern = '~([0-9]{2}) - ([0-9]{2}) - ([0-9]{4})~';
//
//$replace = 'Год $3, Месяц $2, День $1';
//
//echo preg_replace($pattern,$replace,$string).'<br/>';

define('BASE_URL', 'http://localhost/');
ini_set('display_errors',1);
error_reporting(E_ALL);

session_start();

define('ROOT',dirname(__FILE__));
require_once (ROOT.'/components/Autoload.php');
$router = new Router();
$router->run();


