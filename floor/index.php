<?php
	include("../configs/configuration.php");
	$query="select * from floor";
	if(isset($_GET['msg'])){
		echo $_GET['msg'];
	}
?>
<table border="1">
<tr>
<td>id</td>
<td>code</td>
<td>number</td>
<td>name</td>
<td>plan_path</td>
<td>matrix</td>
<td>location_id</td>
</tr>
<?php
	if($resource=mysqli_query($link,$query)){
		$num=1;
		while($rowData=mysqli_fetch_assoc($resource)) {
?>
<tr>
<td><?php echo $rowData['id'];?></td>
<td><?php echo $rowData['code'];?></td>
<td><?php echo $rowData['number'];?></td>
<td><?php echo $rowData['name'];?></td>
<td><?php echo $rowData['plan_path'];?></td>
<td><?php echo $rowData['matrix'];?></td>
<td><?php echo $rowData['location_id'];?></td>

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
</table>
