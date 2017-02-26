<?php
include("dbconfig.php");

if(isset($_POST['name'])&&isset($_POST['address'])&&isset($_POST['description'])&&isset($_POST['coordinates'])&&isset($_POST['image_path'])){
if(isset($_POST['btn-save']))
{
    // variables for input data
    $name = $_POST['name'];
    $address= $_POST['address'];
    $description= $_POST['description'];
    $coordinates= $_POST['coordinates'];
    $image_path= $_POST['image_path'];
    
    // variables for input data
    
    // sql query for inserting data into database
    $sql_query = "INSERT INTO location (name,address,description,coordinates,image_path) VALUES('$name','$address','$description','$coordinates','$image_path')";
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
<title>BLE indoornavigation </title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
    <div id="content">
    <label>BLE indoornavigation <a href="http://www.codingcage.com" target="_blank"> </a></label>
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
    <td><input type="text" name="name" placeholder="name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="address" placeholder="address" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="description" placeholder="description" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="coordinates" placeholder="coordinates" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="image_path" placeholder="image_path" required /></td>
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
