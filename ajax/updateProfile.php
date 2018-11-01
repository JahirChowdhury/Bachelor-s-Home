<?php 
	
	include '../db/db.php';
	if (isset($_POST['updateProfile'])) {
		

		$id = $_POST['id'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$phone = $_POST['phone'];
		$rented_month = $_POST['rented_month'];

		$dbconnect = getDbConnect();

		$sql = "UPDATE users SET  name='$name', 
									email = '$email', 
										password = '$password', 
											email = '$email', 
												rented_month = '$rented_month',  
														phone = '$phone'  WHERE id='$id' ";

            if(mysqli_query($dbconnect ,$sql)){

                echo "Profile Updated. ";


            }
            else {
                echo "ProfileUpdate Failed. ".mysqli_error($dbconnect);

            }


	}

 ?>