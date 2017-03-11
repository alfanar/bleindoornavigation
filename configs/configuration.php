<?php

function __autoload($classname) {
    $filename = "../classes/". $classname .".php";
    include_once($filename);
}

$host 	  = 'localhost';
$username = 'root';
$password = 'root';
$database = 'bleindoornavigation';

$db = new Db($host, $username, $password, $database);
?>
