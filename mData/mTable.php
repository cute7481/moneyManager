<?php 

include_once("../dbConnect-iphone.php");

$message = "";

$sql = "SELECT userid, name, number, duedate, madedate FROM W_13_Park_YJ.prize order by madedate asc";
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
