<?php
        include_once('db.php');
 
		$sql = "SELECT * FROM people";
		$res = mysqli_query($conn,$sql);
		$result = array();
 
		while( $row = mysqli_fetch_array($res) )
		    array_push($result, array('name' => $row[0],
			                          'age'  => $row[1],
						              'company' => $row[2]));
 
		echo json_encode(array("result" => $result));
?>