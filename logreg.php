<?php 
session_start();
	//require connction
	require("connection.php");
	session_start();

	//check if user registered
	if (isset($_POST['log_in'])) {
		extract($_POST);

		$checkQuery = "SELECT * FROM register WHERE email = '$username' AND password = '$password';";
		$runCheckQuery = mysqli_query($conn, $checkQuery);
		$count = mysqli_num_rows($runCheckQuery);

		if ($count == 1) {
			$_SESSION['userName'] = $username;
			// header("location: dashboard.php");
			echo "<h2 style='color:green'> Logging you in.....</h2>";
			header("location:dashboard.php");
		}else{
			echo "<h2 style='color:red'>Username or password you entered is incorrect</h2>";
		}


	}

	elseif (isset($_POST['register'])) {
		//register to db
		extract($_POST);

		$query = "INSERT INTO register (name, email, password) VALUES ('$name', '$email', '$pass')";
		$insert = mysqli_query($conn, $query);

		if ($insert) {
			echo "<h2 style='color:green'>User registered</h2>";
			echo "<a href='index.php'>Log in</a>";
		}else{
			echo "<h1 style='color:red'>Registration failed</h1>".mysqli_error($conn);
		}
	}
 ?>