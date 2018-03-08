<?php 

	$host = "localhost";
	$user= "root";
	$password = "";
	$dbName = "logregGamma";

	$conn = mysqli_connect($host, $user, $password, $dbName);

	if (!$conn) {
		die("database connection failed :".mysqli_connect_error());
	} else{
		echo "<p> Connection Success</p>";
	}
 ?>