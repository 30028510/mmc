<?php
ob_start();

if(!session_id())	session_start();

error_reporting(E_ALL); 

ini_set("display_errors", 1);

function host() {

return ($_SERVER["HTTP_HOST"]=="localhost" || preg_match("/^[0-9]{3}\.[0-9]{3}\.[0-9]\.[0-9]{1,2}$/", $_SERVER['HTTP_HOST']));

}

define("DB_HOST", "localhost");

define("DB_USER", (host())? "root": "adminpotair");

define("DB_PASS", (host())? "": "admin123");

define("DB_NAME", ((host())? "_": "") . "potair");

define("ROOT_DIR", str_replace("\\", "/", dirname(__FILE__)) . "/");

define("ROOT_FOLDER", str_replace($_SERVER['DOCUMENT_ROOT'], "", ROOT_DIR));

define("ROOT", "http://$_SERVER[HTTP_HOST]" . ROOT_FOLDER);

define("SELF", $_SERVER['PHP_SELF']);

define("FILENAME", basename($_SERVER['PHP_SELF'], ".php"));

define("METHOD", $_SERVER['REQUEST_METHOD']);

require ROOT_DIR . "inc/function.php";

require ROOT_DIR . "inc/class.php";

// echo ROOT_DIR . ROOT;
?>