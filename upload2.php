<?php
$conn = new mysqli('localhost','root','','market');

	$name = $_POST['name'];
	$price = $_POST['price'];
	$details = $_POST['details'];
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "uploads/".$filename;
    move_uploaded_file($tempname,$folder);

	// Database connection mysqli_connect('localhost','root','');
	
	
		$query = "insert into products values ('$name','$price','$details','$folder')";
		$data = mysqli_query($conn, $query);
echo 'inserted succsfully';
		
	
?>