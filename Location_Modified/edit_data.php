<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
    $sql_query="SELECT * FROM location WHERE id=".$_GET['edit_id'];
    $result_set=mysqli_query($link,$sql_query);
    $fetched_row=mysqli_fetch_array($link,$result_set);
}
if(isset($_POST['btn-update']))
{
    // variables for input data
    $name = $_POST['name'];
    $address= $_POST['address'];
    $description= $_POST['description'];
    $coordinates= $_POST['coordinates'];
    $image_path= $_POST['image_path'];
    
    // variables for input data
    
    // sql query for update data into database
    $sql_query = "UPDATE location SET name='$name',address='$address',description='$description',coordinates='$coordinates',image_path='$image_path' WHERE id=".$_GET['edit_id'];
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
<title>BLE Indoornavigation </title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
    <div id="content">
    <label>BLE Indoornavigation <a href="http://www.codingcage.com" target="_blank"></a></label>
    </div>
</div>

<div id="body">
    <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="name" placeholder="name" value="<?php echo $fetched_row['name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="address" placeholder="address" value="<?php echo $fetched_row['address']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="description" placeholder="description" value="<?php echo $fetched_row['description']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="coordinates" placeholder="coordinates" value="<?php echo $fetched_row['coordinates']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="image_path" placeholder="image_path" value="<?php echo $fetched_row['image_path']; ?>" required /></td>
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
