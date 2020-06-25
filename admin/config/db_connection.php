<?php
$sets=2;
if($sets==1){

//error_reporting(0);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'virtualreality');
define("WWW_ROOT", "http://localhost/VR-v3");
}
else{

define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'virtualreality');
define("WWW_ROOT", "http://localhost/VR-v3/admin");
}