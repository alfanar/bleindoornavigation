<?php
include("../configs/configuration.php");

if(isset($_POST['btn-update']))
{
    // variables for input data
    $point       = $_POST['point'];
    $shop_id       = $_POST['shop_id'];

    
    // variables for input data
    $data      = "point='$point', shop_id='$shop_id'";
    $shop_coordinates      = new Shop_coordinates($db);
    $result    = $shop_coordinates->update($data, $_GET['edit_id']);

    // sql query for update data into database
    
    // sql query execution function
    if($result)
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
<link rel="stylesheet" href="../assets/styles/style.css" type="text/css" />
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
    <td><input type="text" name="point" placeholder="point"  required /></td>
    </tr>
    <tr>
    <td><input type="text" name="shop_id" placeholder="Shop ID"  required /></td>
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