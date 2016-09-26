<?php
	header('Content-Type: charset=utf-8');
	include_once("../dbConnect-iphone.php");

	$message = "";
	$tstartd = ($_POST['tstartd']);
	$tfinishd = ($_POST['tfinishd']);
	$timage = ($_POST['timage']);
	$tname = ($_POST['tname']);

	$sql="insert into SWU_project.usrtheme (tstartd,tfinishd,timage,tname)			 values('$tstartd','$tfinishd','$timage','$tname')";
	
	$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

	mysqli_close($conn);
?>
