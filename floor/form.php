<?php
	include("../configs/configuration.php");
	include("../configs/menu.php");

	if(isset($_GET['cid']) && !empty($_GET['cid'])){
		$cid=$_GET['cid'];
		$edit_query="select * from floor where id='".$cid."'";
		$result=mysqli_query($link,$edit_query);
		$row=mysqli_fetch_array($result);
	}
?>
<h1>Floors</h1>
<form action="form_back.php" method="POST">
<div class="row">
		<div class="cols">id</div>
		<div class="cols">
			<input type="hidden" name="c_id" id="c_id" value="<?php if(isset($row['id'])){echo $row['id'];}?>">
		</div>
	</div>
	<div class="row">
		<div class="cols">code</div>
		<div class="cols">
			<input type="text" name="ccode" id="ccode" value="<?php if(isset($row['code'])){echo $row['code'];}?>">
		</div>
	</div>
          <div class="row">
		<div class="cols">number</div>
		<div class="cols">
			<input type="text" name="cnumber" id="cnumber" value="<?php if(isset($row['number'])){echo $row['number'];}?>">
			</div>
	</div>
	    <div class="row">
		<div class="cols">name</div>
		<div class="cols">
			<input type="text" name="cname" id="cname" value="<?php if(isset($row['name'])){echo $row['name'];}?>">
			</div>
	</div>
             <div class="row">
		<div class="cols">plan_path</div>
		<div class="cols">
			<input type="text" name="cplan_path" id="cplan_path" value="<?php if(isset($row['plan_path'])){echo $row['plan_path'];}?>">
			</div> </div>
               <div class="row">
		<div class="cols">matrix</div>
		<div class="cols">
			<input type="text" name="cmatrix" id="cmatrix" value="<?php if(isset($row['matrix'])){echo $row['matrix'];}?>">
			</div>
	</div>

  <div class="row">
		<div class="cols">location_id</div>
		<div class="cols">
			<input type="text" name="clocation_id" id="clocation_id" value="<?php if(isset($row['location_id'])){echo $row['location_id'];}?>">
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