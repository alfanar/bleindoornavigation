
<?php
include("configuration.php");

	$t_name=$_POST['t_name'];
	$t_address=$_POST['t_address'];
	$t_description=$_POST['t_description'];
	$t_coordinates=$_POST['t_coordinates'];
	$t_imagepath=$_POST['t_imagepath'];

if(isset($_POST['t_name'])&&isset($_POST['t_address']) && isset($_POST['t_description'])&&isset($_POST['t_coordinates']) && isset($_POST['t_imagepath'])){
	if(empty($_POST['cid'])){
		$insert_query="insert into location (`name`,`address`,`description`,`coordinates`,`image_path`) values ('".$t_name."','".$t_address."','".$t_description."','".$t_coordinates."','".$t_imagepath."')";
		$msg="Insert successful";
		
	} 
	else{
		$insert_query="update location set  `name`='".$t_name."' , `address`='".$t_address."', `description`='".$t_description."',`coordinates`='".$t_coordinates."', `image_path`='".$t_imagepath."' where id='".$_POST['cid']."'";
		$msg="Update successful";
		
	}
	
	$result=mysqli_query($link,$insert_query);
	if($result){
		
		header("Location:index.php?msg=".$msg);
	} else {
		$msg="Problem with Insert";
		header("Location:index.php?msg=".$msg);
	}
} 
else {
	$msg="Please enter the location_table data";
	header("Location:index.php?msg=".$msg);
}

?>
