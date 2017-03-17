<?php

function __autoload($classname) {
    $filename = "../classes/". $classname .".php";
    include_once($filename);
}

$host 	  = 'localhost';
$username = 'root';
$password = '12345678';
$database = 'BLE';

$db = new Db($host, $username, $password, $database);
?>
