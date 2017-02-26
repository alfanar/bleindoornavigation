
<?php
	include("../configs/configuration.php");
	$ccode=$_POST['ccode'];
	$cname=$_POST['cname'];
	$cdescription=$_POST['cdescription'];
	$cfloor=$_POST['cfloor'];
	

	if(isset($_POST['ccode']) && isset($_POST['cname']) && isset($_POST['cdescription'])&& isset($_POST['cfloor'])){
		if(empty($_POST['cid'])){
		 $query="insert into shop (`code`,`name`,`description`,`floor_id`) values ('".$ccode."','".$cname."','".$cdescription."','".$cfloor."')";
		$msg="Insert successful";
		}
		 else {
		$query="update shop set `code`='".$ccode."', `name`='".$cname."',`description`='".$cdescription."', `floor_id`='".$cfloor."', where `id`='".$_POST['cid']."'";
		$msg="Update successful";
	}

		$result=mysqli_query($link,$query);
		if($result){
			header("Location:index.php?msg=".$msg);
		} else {
			$msg="Problem with Insert";
			header("Location:index.php?msg=".$msg);
		}
} else {
	$msg="Please enter the country data";
	header("Location:index.php");
}
?>
