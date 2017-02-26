
<?php
include("configuration.php");

$ccode=$_POST['ccode'];
$cnumber=$_POST['cnumber'];
$cname=$_POST['cname'];
$cplan_path=$_POST['cplan_path'];
$cmatrix=$_POST['cmatrix'];
	$clocation_id=$_POST['clocation_id'];

if(isset($_POST['ccode']) && isset($_POST['cnumber'])&& isset($_POST['cname']) && isset($_POST['cplan_path'])&& isset($_POST['cmatrix'])&& isset($_POST['clocation_id'])){
	if(empty($_POST['cid'])){
		$query="insert into floor (`code`,`number`,`name`,`plan_path`,`matrix`,`location_id`) values ('".$ccode."','".$cnumber."','".$cname."','".$cplan_path."','".$cmatrix."','".$clocation_id."')";
		$msg="Insert successful";
	} else {
		$query="update floor set `code`='".$ccode."', `number`='".$cnumber."', `name`='".$cname."', `plan_path`='".$cplan_path."', `matrix`='".$cmatrix."', `location_id`='".$clocation_id."' where `id`='".$_POST['cid']."'";
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
	$msg="Please enter the floor data";
	header("Location:index.php");
}

?>
