<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
	$sql_query="SELECT * FROM shop_coordinates_table WHERE id=".$_GET['edit_id'];
	$result_set=mysqli_query($link,$sql_query);
	$fetched_row=mysqli_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
	// variables for input data
	$point = $_POST['point'];
	$shop_id = $_POST['shop_id'];
	// variables for input data
	
	// sql query for update data into database
	$sql_query = "UPDATE shop_coordinates_table SET point='$point',shop_id='$shop_id' WHERE id=".$_GET['edit_id'];
	// sql query for update data into database
	
	// sql query execution function
	if(mysqli_query($link,$sql_query))
	{
		?>
		<script type="text/javascript">
		alert('Data Are Updated Successfully');
		window.location.href='index.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('error occured while updating data');
		</script>
		<?php
	}
	// sql query execution function
}
if(isset($_POST['btn-cancel']))
{
	header("Location: index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD Operations With PHP and MySql - By Coding Cage</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
	<div id="content">
    <label>CRUD Operations With PHP and MySql - <a href="http://www.codingcage.com" target="_blank">By Coding Cage</a></label>
    </div>
</div>

<div id="body">
	<div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="point" placeholder="Point" value="<?php echo $fetched_row['point']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="shop_id" placeholder="Shop ID" value="<?php echo $fetched_row['shop_id']; ?>" required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>
