<?php
	include("configuration.php");
	if(isset($_GET['cid']) && !empty($_GET['cid'])){
		$cid=$_GET['cid'];
		$edit_query="select * from shop where id='".$cid."'";
		$result=mysqli_query($link,$edit_query);
		$row=mysqli_fetch_array($result);
	}
?>

<form action="form_back.php" method="POST">
	<div class="row">
		<div class="cols">Code</div>
		<div class="cols">
			<input type="text" name="ccode" id="ccode" value="<?php if(isset($row['code'])){echo $row['code'];}?>">
			</div>
	</div>


<div class="row">
		<div class="cols">Name</div>
		<div class="cols">
			<input type="text" name="cname" id="cname" value="<?php if(isset($row['name'])){echo $row['name'];}?>">
			</div>
	</div>

	<div class="row">
		<div class="cols">Description</div>
		<div class="cols">
			<input type="text" name="cdescription" id="cdescription" value="<?php if(isset($row['description'])){echo $row['description'];}?>">
			</div>
	</div>

<div class="row">
		<div class="cols">Floor_id</div>
		<div class="cols">
			<input type="text" name="cfloor" id="cfloor" value="<?php if(isset($row['floor_id'])){echo $row['floor_id'];}?>">
			</div>
	</div>


	<div class="row">
		<div class="cols">
			<input type="submit" name="submit" value="submit">
		</div>
		<div class="cols">
			<input type="hidden" name="cid" value="">
		</div>
	</div>
</form>
