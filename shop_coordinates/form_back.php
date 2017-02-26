
<?php
	include("../configs/configuration.php");
	$cpoint=$_POST['cpoint'];
	$cshop_id=$_POST['cshop_id'];


	if(isset($_POST['cpoint']) && isset($_POST['cshop_id'])){
		if(empty($_POST['cid'])){
		 $insert_query="insert into shop_coordinates (`point`,`shop_id`) values ('".$cpoint."','".$cshop_id."')";
		$msg="Insert successful";
		}
		 else {
		$insert_query="update shop_coordinates set `point`='".$cpoint."', `shop_id`='".$cshop_id."' where `id`='".$_POST['cid']."'";
		$msg="Update successful";
	}

		$result=mysqli_query($link,$insert_query);
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
