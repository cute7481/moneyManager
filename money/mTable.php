<?php

	include_once("../dbConnect-iphone.php");

	$message = "";
	$sql = "SELECT mnum, tnum, mcon, mday, mcategory, mway, mname, money, mcur FROM SWU_project.mlist";
	
	$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	
	$resultArray = array(); 
	$tempArray = array();
	
	while($row = mysqli_fetch_object($query)){ 
		$tempArray = $row;
		array_push($resultArray, $tempArray); 
	}
	
	echo json_encode($resultArray);
	
	mysqli_close($conn);
?>
