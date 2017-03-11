<?php
include("../configs/configuration.php");
// variables for input data
	$point = $_POST['point'];
	$shop_id = $_POST['shop_id'];
	// variables for input data
if(isset($_POST['point'])&&isset($_POST['shop_id'])){
if(isset($_POST['btn-save']))
{
	
	
	// sql query for inserting data into database
	$sql_query = "INSERT INTO shop_coordinates_table(point,shop_id) VALUES('$point','$shop_id')";
	// sql query for inserting data into database
	}
	// sql query execution function
	$result=mysqli_query($link,$sql_query) or die(mysqli_error($link));
	if($result)
	{
		?>
		<script type="text/javascript">
		alert('Data Are Inserted Successfully ');
		window.location.href='index.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('error occured while inserting your data');
		</script>
		<?php
	}
	// sql query execution function
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BLE Indoor Navigation</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
	<div id="content">
    <label>BLE Indoor Navigation <a href="http://www.codingcage.com" target="_blank"></a></label>
    </div>
</div>
<div id="body">
	<div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="index.php">back to main page</a></td>
    </tr>
    <tr>
    <td><input type="text" name="point" placeholder="Point" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="shop_id" placeholder="Shop ID" required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>
