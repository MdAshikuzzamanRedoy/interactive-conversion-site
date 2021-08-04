<?php
	include 'database.php';
	$drop=$_POST['drop'];
	$rname=$_POST['rname'];
	$result=$_POST['result'];
	
	$sql = "INSERT INTO `history`( `type`, `input`, `output`) 
	VALUES ('$drop','$rname','$result')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>