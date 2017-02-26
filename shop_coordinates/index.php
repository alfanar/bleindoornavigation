<?php
	include("../configs/configuration.php");
	include("../configs/menu.php");
	$query="select * from shop_coordinates";
	if(isset($_GET['msg'])){
		echo $_GET['msg'];
	}
?>
<h1>Shops Coordinates</h1>
<table border="1">
<tr>
<td>id</td>
<td>point</td>
<td>shop_id</td>
</tr>
<?php
	if($resource=mysqli_query($link,$query)){
		$num=1;
		while($rowData=mysqli_fetch_assoc($resource)) {
?>
<tr>
<td><?php echo $num; ?></td>
<td><?php echo $rowData['point'];?></td>
<td><?php echo $rowData['shop_id'];?></td>
<td><a href="form.php?cid=<?php echo $rowData['id']; ?>">EDIT</a></td>
<td><a href="delete.php?cid=<?php echo $rowData['id']; ?>">DELETE</a></td>
</tr>
<?php
		$num ++;
		}
	}
?>
<tr>
<td colspan="5"><a href="form.php">Insert New Record</a></td>
</tr>
</table
