<?php
	header('Content-Type: charset=utf-8');
	include_once("../dbConnect-iphone.php");

	$message = "";
	$tnum = ($_POST['tnum']);
	$mcon = ($_POST['mcon']);
	$mday = ($_POST['mday']);
	$mcategory = ($_POST['mcategory']);
	$mway = ($_POST['mway']);
	$mname = ($_POST['mname']);
	$money = ($_POST['money']);
	$mcur = ($_POST['mcur']);

	$sql="insert into SWU_project.mlist (tnum,mcon,mday,mcategory,mway,mname,money,mcur) values('$tnum','$mcon','$mday','$mcategory','$mway','$mname','$money','$mcur')";

	$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

	mysqli_close($conn);
?>
