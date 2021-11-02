<?php


$email = $_POST['email'];
$password = $_POST['password'];
	
		if ($email == 'anandu' && $password == 123456) {
            echo'<script>alert("login succesfully")</script>';
			header( 'Location: upload.php' );
		
		}else{
			echo "<h2>Invalid username or password <br> Please try again</h2>";
		}
	
?>