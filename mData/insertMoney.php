<?php
header('Content-Type: charset=utf-8');

include_once("../dbConnect-iphone.php");

$message = "";
$userid = ($_POST['id']);
$name = ($_POST['name']);
$number = ($_POST['number']); 
$duedate = ($_POST['duedate']);
$madedate = ($_POST['madedate']);

$sql="insert into prize (userid,name,number,duedate,madedate) values('$userid','$name','$number','$duedate','$madedate')";

$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

mysqli_close($conn);

?>
