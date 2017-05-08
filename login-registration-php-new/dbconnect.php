<?php

	// this will avoid mysql_connect() deprecation error.
	error_reporting( ~E_DEPRECATED & ~E_NOTICE );
	// but I strongly suggest you to use PDO or MySQLi.
	
	$conn = mysqli_connect("localhost","root","mariem","dbtest");
	//$dbcon = mysqli_select_db("dbtest");
	
	if ( !$conn ) {
		die("Connection failed : " . mysqli_error($conn));
	}
	
	//if ( !$dbcon ) {
	//	die("Database Connection failed : " . mysql_error($dbcon));
	//}