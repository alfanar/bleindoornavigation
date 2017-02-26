<?php
	include("../configs/configuration.php");
	if(isset($_GET['cid']) && !empty($_GET['cid'])){
		$cid=$_GET['cid'];
		$edit_query="select * from shop_coordinates_table where id='".$cid."'";
		$result=mysqli_query($link,$edit_query);
		$row=mysqli_fetch_array($result);
	}
?>

<form action="form_back.php" method="POST">
	<div class="row">
		<div class="cols">Point</div>
		<div class="cols">
			<input type="text" name="cpoint" id="cpoint" value="<?php if(isset($row['point'])){echo $row['point'];}?>">
			</div>
	</div>


<div class="row">
		<div class="cols">Shop_id</div>
		<div class="cols">
			<input type="text" name="cshop_id" id="cshop_id" value="<?php if(isset($row['shop_id'])){echo $row['shop_id'];}?>">
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
