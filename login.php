<?php
session_start();

$conn =  mysqli_connect('localhost','root','','market');

$email = $_POST['email'];
$password = $_POST['password'];
$_SESSION["username"] = $email;
	
		$select ="select * from registration where email ='$email' and password='$password'";
		$result=$conn->query($select);
		$row=mysqli_num_rows($result);
		if ($row == 1) {
			header( 'Location: index.php' );
		
		}else{
			echo "<h2>Invalid email or password</h2>";
		}
	
?>