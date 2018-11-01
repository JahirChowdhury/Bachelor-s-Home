<?php include('ajax/forgetpassword.php'); ?>
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
		<h1>Forget Password</h1>
	</div>
	<form class="cssForm" action="#" method="POST">

		<!-- Display input validation here -->
		<span class="error"><?php echo $Error;?></span>
		<span class="success"><?php echo $successMessage;?></span>
				

		<div class="form-group">
	      <label for="usr">Email:</label>
	      <input type="text" class="form-control" name="email">
	    </div>
	    
	    <div>
	      <button type="submit" class="btn btn-primary" name="forgetpassword">Confirm</button>
	    </div><br><br>
	    
	</form>	
	</div>
	
</body>
</html>
