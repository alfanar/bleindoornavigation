<?php
include("../configs/configuration.php");

// delete condition
if(isset($_GET['delete_id']))
{

      $shop_coordinates     = new Shop_coordinates($db);
      $result   = $shop_coordinates->delete($_GET['delete_id']);
	
}
// delete condition

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BLE Indoor Navigation</title>
<link rel="stylesheet" href="../assets/styles/style.css" type="text/css" />
<script type="text/javascript">
function edt_id(id)
{
	if(confirm('Are you sure you want to edit ?'))
	{
		window.location.href='edit_data.php?edit_id='+id;
	}
}
function delete_id(id)
{
	if(confirm('Are you sure you want to Delete ?'))
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
    <label>BLE Indoor Navigation <a href="http://www.codingcage.com" target="_blank"></a></label>
    </div>
</div>

<div id="body">
	<div id="content">
    <table align="center">
    <tr>
    <th colspan="5"><a href="add_data.php">add data here.</a></th>
    </tr>
    <th>Point</th>
    <th>Shop ID</th>
    
    <th colspan="2">Operations</th>
    </tr>
    <?php
    $shop_coordinates = new Shop_coordinates($db);
    $data = $shop_coordinates->select('*');
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
            <td><?php echo $row['point']; ?></td>
            <td><?php echo $row['shop_id']; ?></td>
            


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
