<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];

	//Database Connection
	$conn = new mysqli('localhost','root','','bankdb');
	if($conn -> connect_error){
		die('Connection Failed : '.$conn -> connect_error);
	}else{
		$stmt = $conn -> prepare("insert into user(name, email, password, cpassword)
			values(?, ?, ?, ?)");
		$stmt -> bind_param("ssss", $name, $email, $password, $cpassword);
		$stmt -> execute();
		echo "Registration Successfully...!";
		$stmt -> close();
		$conn -> close();
	}
?>