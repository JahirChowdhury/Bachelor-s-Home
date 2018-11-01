<?php error_reporting(0); include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Demo Php Project</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="background-color: black;">
	<div>
		<div class="header">
		<h1>Sign In</h1>
	</div>
	<form class="cssForm" action="#" method="POST">

		<!-- Display input validation here -->
		<?php include('error.php'); ?>
				

		<div class="form-group">
	      <label for="usr">Name:</label>
	      <input type="text" class="form-control" name="name">
	    </div>
	    <div class="form-group">
	      <label for="pwd">Password:</label>
	      <input type="password" class="form-control" name="password">
	    </div>
	    <div class="form-group">
	      
	      <input type="checkbox"  name="remember"> Remember Me
	      <a href="forgetpass.php">Forget Password</a>
	    </div>
	    <div>
	      <button type="submit" class="btn btn-primary" name="login">Login</button>
	    </div><br><br>
	    <p>Not a User?   <a class="button btn btn-success" href="register.php">Sign Up</a></button></p>
	    
	</form>	
	</div>
	
</body>
</html>
