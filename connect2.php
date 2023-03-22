<?php
	$bname = $_POST['bname'];
	$branch = $_POST['branch'];
	$bcode = $_POST['bcode'];
	$anumber = $_POST['anumber'];

	//Database Connection
	$conn = new mysqli('localhost','root','','bankdb');
	if($conn -> connect_error){
		die('Connection Failed : '.$conn -> connect_error);
	}else{
		$stmt = $conn -> prepare("insert into banks(bname, branch, bcode, anumber)
			values(?, ?, ?, ?)");
		$stmt -> bind_param("ssss", $bname, $branch, $bcode, $anumber);
		$stmt -> execute();
		echo "Added Account Details Successfully...!";
		$stmt -> close();
		$conn -> close();
	}
?>