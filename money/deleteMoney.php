<?php
	
    include_once("../dbConnect-iphone.php");
    
    $message = "";
    $no = ($_POST['mnum']);
    $sql = "DELETE FROM SWU_project.mlist where mnum = '$no'";

    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn)); 
	
    mysqli_close($conn);
?>
