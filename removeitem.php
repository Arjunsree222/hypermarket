<?php
$pname1 = $_GET['id'];
echo $pname1;
include_once('connection.php');
$query = "DELETE FROM `cart` WHERE image='$pname1'";
mysqli_query($conn, $query);

	// Database connection mysqli_connect('localhost','root','');
	
        /*echo <sript>alert('inserted succsfully')</script>;*/
		header( 'Location: cart.php' );
	
?>