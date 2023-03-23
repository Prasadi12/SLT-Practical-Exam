<?php
	$email = $_POST['email'];
	$password = $_POST['password'];

	//Database Connection
	$conn = new mysqli('localhost','root','','bankdb');
	if($conn -> connect_error){
		die('Connection Failed : '.$conn -> connect_error);
	}else{
		$stmt = $conn -> prepare("select * from user where email = ?");
		$stmt -> bind_param("s", $email);
		$stmt -> execute();
		$stmt_result = $stmt -> get_result();
		if($stmt_result -> num_rows > 0){
			$data = $stmt_result -> fetch_assoc();
			if($data['password'] === $password){
				echo "<script>alert('Login successfully...!');</script>";
				header("location: View.php");
			}else{
				echo "<script>alerts('Invalied Email or Password');</script>";
				
			}
		}else{
			echo "<script>alerts('Invalied Email or Password');</script>";
		}
	}
?>