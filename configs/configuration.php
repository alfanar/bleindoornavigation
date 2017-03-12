<?php

function __autoload($classname) {
    $filename = "../classes/". $classname .".php";
    include_once($filename);
}

$host 	  = 'localhost';
$username = 'root';
$password = '1234';
$database = 'bleindoornavigation';

$db = new Db($host, $username, $password, $database);
?>
