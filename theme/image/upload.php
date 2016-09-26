<?php
	$uploaddir = './'; //Uploading to same directory as PHP file 
	$file = basename($_FILES['userfile']['name']);
	$uploadFile = $file;
	$randomNumber = rand(0, 9999999);
	$newName = $uploadDir.$randomNumber.$uploadFile;
	
	if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
	    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $newName)) {
		echo $newName; 
	    }
	} 
	else {
	    echo "Temp file not uploaded. \r\n"; 
	}
?>
