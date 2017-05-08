<?php

	include('dbconnect.php');

	$action = $_REQUEST['action'];	
    $stmt=$conn->prepare('SELECT id, name, address, description FROM location WHERE id=:lid ORDER BY id');
	$stmt->execute(array(':lid'=>$action));
	
	?>
	<div class="row">
	<?php
	if($stmt->rowCount() > 0){
		
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
	
			?>
			<div class="col-xs-3">
			<div style="border-radius:3px; border:#cdcdcd solid 1px; padding:22px;"><?php echo $address; ?></div><br />
			</div>
			<?php		
		}
		
	}
	
	?>
	</div>