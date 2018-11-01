<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Demo Php Project</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="regi_wrapper">
		<div class="header">
			<h1>Registration</h1>
		</div>
	<form class="cssForm" action="#" method="POST">
		<!-- Display input validation here -->
		<?php include('error.php'); ?>

		<div class="form-group">
	      <label for="usr">Name:</label>
	      <input type="text" class="form-control" name="name">
	    </div>
	    <div class="form-group">
	      <label for="usr">Email:</label>
	      <input type="text" class="form-control" name="email">
	    </div>
	    <div class="form-group">
	      <label for="usr">Rented Month:</label>
	      <select class="form-control" name="month">
	      	<option value="notSelected">-- Select Rented Month --</option>
		    <option value="January">January</option>
		    <option value="Februry">Februry</option>
		    <option value="March">March</option>
		    <option value="April">April</option>
		    <option value="May">May</option>
		    <option value="June">June</option>
		    <option value="July">July</option>
		    <option value="August">August</option>
		    <option value="September">September</option>
		    <option value="October">October</option>
		    <option value="November">November</option>
		    <option value="December">December</option>
		  </select>
	    </div>
	    <div class="form-group">
	      <label for="pwd">Password:</label>
	      <input type="password" class="form-control" name="password">
	    </div>
	    <div class="form-group">
	      <label for="pwd">Confirm Password:</label>
	      <input type="password" class="form-control" name="conpassword">
	    </div>
	    <div>
	      <button type="submit" class="btn btn-info" name="register">Confirm</button>
	    </div>
	    <br><br>
	    <p style="font">Already a User? <a href="login.php">Sign In</a></p>
	    
	</form>
	</div>
	
</body>
</html>