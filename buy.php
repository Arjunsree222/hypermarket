<?php
$pname = $_GET['var'];
include_once('connection.php');
$query = "select * from products where image='$pname'";
$result = mysqli_query($conn, $query);
$row=mysqli_fetch_assoc($result);


	   $name = $row['name'];
	   $price = $row['price'];
	   $img = $row['image'];
        $size = $_POST['size'];

	// Database connection mysqli_connect('localhost','root','');
	
	
		$query = "insert into cart values ('$name','$price','$img','$size')";
		$data = mysqli_query($conn, $query);
        /*echo <sript>alert('inserted succsfully')</script>;*/
		header( 'Location: cart.php' );
	
?>