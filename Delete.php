<?php
if(isset($_GET['id'])){
	$id = $_GET['id'];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "bankdb";

	//Create connection
	$conn = new mysqli($servername, $username, $password, $database);

	$sql = "DELETE FROM banks WHERE id=$id";
	$conn -> query($sql);
}

header("location: View.php");
exit;

?>