<?php
	include("../configs/configuration.php");
	include("../configs/menu.php");
	if(isset($_GET['cid']) && !empty($_GET['cid'])){
		$cid=$_GET['cid'];
		$edit_query="select * from location where id='".$cid."'";
		$result=mysqli_query($link,$edit_query);
		$row=mysqli_fetch_array($result);
	}
?>
<h1>Locations</h1>
<form action="form_back.php" method="POST">



<div class="row">
		<div class="cols">Name </div>
		<div class="cols">
			<input type="text" name="t_name" id="t_name"  value="<?php if(isset($row['name'])){echo $row['name'];}?>">
			</div>
	</div>


<div class="row">
		<div class="cols">Address</div>
		<div class="cols">
			<input type="text" name="t_address" id="t_address"  value="<?php if(isset($row['address'])){echo $row['address'];}?>">
			</div>
	</div>

<div class="row">
		<div class="cols">Description</div>
		<div class="cols">
			<input type="text" name="t_description" id="t_description"  value="<?php if(isset($row['description'])){echo $row['description'];}?>">
			</div>
	</div>


<div class="row">
		<div class="cols">Coordinates</div>
		<div class="cols">
			<input type="text" name="t_coordinates"  id=name="t_coordinates" value="<?php if(isset($row['coordinates'])){echo $row['coordinates'];}?>">
			</div>
	</div>



     <div class="row">
		<div class="cols">Image Path</div>
		<div class="cols">
			<input type="text" name="t_imagepath" id="t_imagepath"  value="<?php if(isset($row['image_path'])){echo $row['image_path'];}?>">
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
