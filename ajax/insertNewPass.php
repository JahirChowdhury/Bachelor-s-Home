<?php 
	
	//database include
	include '../db/db.php';
	
	
	 if (isset($_POST['confirmpass'])) {
		
		$id 			= $_POST['id'];
		$currentPass 	= $_POST['currentPass'];
		$newPass 		= $_POST['newPass'];
		$conNewPass 	= $_POST['conNewPass'];
		
		$dbconnect = getDbConnect();

		$query = "SELECT * FROM users where id = '$id'";
		
		$result = mysqli_query($dbconnect,$query);
		
		if ($row = mysqli_fetch_assoc($result)) {
			$dbpass = $row['password'];

			if ($newPass == $conNewPass) {
				
				$sql = "UPDATE users SET  password ='$newPass'  WHERE id='$id' ";
				if (mysqli_query($dbconnect,$sql)) {
					echo "password updated";
				}
				else{
					echo "password updated";
				}
			}
		}

		

        


	}

 ?>