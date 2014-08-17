<?php
	include("my_lib.php");
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	echo $email;
	echo "<br/>";
	echo $password;
	
	if($email == "" || $password == ""){
		header("Location: index.php");
	}
	else if($email == "" && $password == ""){
		header("Location: index.php");
	}
?>