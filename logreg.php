<?php 
session_start();
	//require connction
	require("connection.php");
	if (isset($_SESSION)) {
		
	}

	else{session_start();}
	

	//check if user registered
	if (isset($_POST['log_in'])) {
		extract($_POST);
		$hashedPassword = password_hash($password, PASSWORD_BCRYPT);
		
		$checkQuery = "SELECT * FROM register WHERE email = '$username';";
		$runCheckQuery = mysqli_query($conn, $checkQuery);
		$result = mysqli_fetch_assoc($runCheckQuery);
		$passDb = $result['password'];
		$count = mysqli_num_rows($runCheckQuery);

		if ($count == 1 && password_verify($password, $passDb)) {
			$_SESSION['userName'] = $username;
			// header("location: dashboard.php");
			echo "<h2 style='color:green'> Logging you in.....</h2>";
			header("location:dashboard.php");
		}
			
		else{
			echo "<h2 style='color:red'>Username or password you entered is incorrect</h2>";
		}


	}

	elseif (isset($_POST['register'])) {
		//register to db
		extract($_POST);
		$hashedPass = password_hash($pass, PASSWORD_BCRYPT);
		$query = "INSERT INTO register (name, email, password) VALUES ('$name', '$email', '$hashedPass')";
		$insert = mysqli_query($conn, $query);

		if ($insert) {
			echo "<h2 style='color:green'>User registered</h2>";
			echo "<a href='index.php'>Log in</a>";
		}else{
			echo "<h1 style='color:red'>Registration failed</h1>".mysqli_error($conn);
		}
	}
 ?>