<!DOCTYPE html>
<html>
<head>
	<title>LOG IN AND REGISTER</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<style type="text/css">
		.jumbotron{
			background-image: url('images/forest.jpg');
			background-position: center;
			background-size: cover;
			padding: 0;
			
		}

		.jumbotron div{
			padding: 10em;
			background-color: rgba(0, 0, 0, .8);
		}
		.jumbotron  h2{
			color:white;
			font-weight: 600;
		}

		.auth{
			width:60%;
			margin: auto;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="jumbotron">
			<div align='center'>
				<h2>Register/Log in with sessions and cookies</h2>
			</div>
		</div>
		<div class="auth">
		<ul class="nav nav-tabs">
			
			<li><a data-toggle="tab" href="#login">Log In</a></li>
			<li><a data-toggle="tab" href="#register">Register</a></li>
		</ul>

		<div class="tab-content">
			<div id="login" class="tab-pane fade in active">
				<h3 class="text-center">Log In to Your Dashboard</h3>
				<form role="form" method="post" action="logreg.php" class="form-vertical">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							
							
							<input type="text" placeholder="username" class="form-control" name="username" id="username" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							
							
							<input type="password" placeholder="password" class="form-control" name="password" id="password" required>
						</div>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="remember"> Remember me</label>
					</div>
					<button type="submit" name="log_in" class="btn btn-default">LOG IN</button>
				</form>
			</div>
			<div id="register" class="tab-pane fade">
				<h3 class="text-center">Register to Get Started</h3>
				<form role="form" method="post" action="logreg.php" class="form-vertical">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							
							
							<input type="text" placeholder="name" class="form-control" name="name" id="name" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
							
							
							<input type="email" placeholder="email" class="form-control" name="email" id="email" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							
							
							<input type="password" placeholder="password" class="form-control" name="pass" id="pass" required>
						</div>
					</div>
					
					<button type="submit" name="register" class="btn btn-default">REGISTER</button>
				</form>
			</div>
			
		</div>
		</div>
	</div>



<script src="bootstrap/js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>