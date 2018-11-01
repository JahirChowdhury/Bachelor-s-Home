<?php 

	include '../db/db.php';

	$conn = getDbConnect();
	$sql = "SELECT * FROM users";

	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

 ?>
<div class="row">
	<div class="dashboard_table col-md-5" style="margin-right: 40px;">
	<h1 style="margin-bottom: 30px;">Change Password</h1>
	<form action="ajax/insertNewPass.php" method="POST" name="changePass" onsubmit="return changepassValidation()">
		<div class="form-group">
	      <input type="hidden" class="form-control" id="id" name="id" value="<?=$row['id']?>" >
	    </div>
		<div class="form-group">
	      <label for="usr">Current Password:</label>

	      <input type="Password" class="form-control" id="currentPass" name="currentPass" value="<?=$row['password']?>" >
	      <label class="error" id="errorcurrpass">Please fill the field</label>
	    </div>
	    <div class="form-group">
	      <label for="pwd">New Password:</label>
	      <input type="Password" class="form-control" id="newPass" name="newPass">
	      <label class="error" id="errornewpass">Please fill the field</label>
	    </div>
	    <div class="form-group">
	      <label for="pwd">Retype Password:</label>
	      <input type="Password" class="form-control" id="conNewPass" name="conNewPass">
	      <label class="error" id="errorconnewpass">Please fill the field</label>
	    </div>
	    <div>
	      <button type="submit" class="btn btn-primary" name="confirmpass" >Confirm</button>
	    </div><br><br>
	</form>	
</div>
</div>
