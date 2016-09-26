<?php
	header('Content-Type: charset=utf-8');
	include_once("../dbConnect-iphone.php");

	$message = "";
	$tnum = ($_POST['tnum']);
	$cstartd = ($_POST['cstartd']);
	$cfinishd = ($_POST['cfinishd']);
	$ccountry = ($_POST['ccountry']);
	$ccur = ($_POST['ccur']);
	$cflag = ($_POST['cflag']);

	$sql="insert into SWU_project.tcountry (tnum,cstartd,cfinishd,ccountry,ccur,cflag) values('$tnum','$cstartd','$cfinishd','$ccountry','$ccur','$cflag')";

	$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

	mysqli_close($conn);
?>
