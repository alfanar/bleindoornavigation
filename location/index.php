<?php
include("../configs/configuration.php");

// delete condition
if(isset($_GET['delete_id']))
{    
	
      $location = new Location($db);
      $result   = $location->delete($_GET['delete_id']);
    //$sql_query="DELETE FROM location WHERE id=".$_GET['delete_id'];
	//mysqli_query($link,$sql_query);
	//header("Location: $_SERVER[PHP_SELF]");
}
// delete condition

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BLE indoornavigation</title>
<link rel="stylesheet" href="../assets/styles/style.css" type="text/css" />
<script type="text/javascript">
function edt_id(id)
{
	if(confirm('Sure to edit ?'))
	{
		window.location.href='edit_data.php?edit_id='+id;
	}
}
function delete_id(id)
{
	if(confirm('Sure to Delete ?'))
	{
		window.location.href='index.php?delete_id='+id;
	}
}
</script>
</head>
<body>
<center>

<div id="header">
	<div id="content">
    <label> BLE indoornavigation <a href="http://www.codingcage.com" target="_blank"></a></label>
    </div>
</div>

<div id="body">
	<div id="content">
    <table align="center">
    <tr>
    <th colspan="5"><a href="add_data.php">add data here.</a></th>
    </tr>
    <th>name</th>
    <th>address</th>
    <th>description</th>
    <th>coordinates</th>
     <th>image_path</th>



    <th colspan="2">Operations</th>
    </tr>
    <?php
    $location = new Location($db);
    $data     = $location->select('*');
    if (empty($data)) {
    ?>
        <tr>
        <td colspan="5">No Data Found !</td>
        </tr>
    <?php
    } else {
    foreach ($data as $row) {
		?>
            <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['coordinates']; ?></td>
            <td><?php echo $row['image_path']; ?></td>



            <td align="center"><a href="javascript:edt_id('<?php echo $row['id']; ?>')"><img src="../assets/imgs/b_edit.png" align="EDIT" /></a></td>
            <td align="center"><a href="javascript:delete_id('<?php echo $row['id']; ?>')"><img src="../assets/imgs/b_drop.png" align="DELETE" /></a></td>
            </tr>
        <?php
		}
	}
	?>
    </table>
    </div>
</div>

</center>
</body>
</html>
