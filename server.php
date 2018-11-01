<?php 
	
	session_start();
	$name = "";
	$email = "";
	$error = array();
	
	//connect to the database
	$db = mysqli_connect('localhost' , 'root', '' , 'bachalor_managemet');

	//if registration confirm button is clcked
	if (isset($_POST['register'])) {
		
		

		$name = $_POST['name'];
		$email = $_POST['email'];
		$rented_month = $_POST['month'];
		$password = $_POST['password'];
		$conpassword = $_POST['conpassword'];

		//check whether the input fields are filled properly
		if (empty($name)) {
			array_push($error, "Name is required!");
		}
		if (empty($email)) {
			array_push($error, "Email is required!");
		}
		if (empty($password)) {
			array_push($error, "Password is required!");
		}
		if ($password != $conpassword) {
			array_push($error, "Password didn't match!");
		}
		if ($month == "notSelected") {
			array_push($error, "Please select your rented month");
		}
		//there are no errors, save to the database
		if (count($error) == 0) {
			$sql = "INSERT INTO 
			users (name, email ,rented_month, password) 
			values ('$name' , '$email' , '$rented_month', '$password')";

			mysqli_query($db , $sql);

			$_SESSION['name'] = $name;
			$_SESSION['success'] = "Registration Successfull  ";

			header("location: login.php");

		}
	}

	//User login from login.php page
	if (isset($_POST['login'])) {



		$name = $_POST['name'];
		$password = $_POST['password'];
		

		//empty input fields validation
		if (empty($name)) {
			array_push($error, "Name is required!");
		}
		if (empty($password)) {
			array_push($error, "Password is required!");
		}

		if (count($error) == 0) {
			

			$query = "SELECT * FROM users WHERE name = '$name' AND password= '$password'";
			$result = mysqli_query($db , $query);
			
			
			if (mysqli_num_rows($result) == 1 ) {
				//user log in
				$row = mysqli_fetch_assoc($result);
				
				$_SESSION['id'] = $row['id'];
				$_SESSION['name'] = $name;
				$_SESSION['type'] = $row['type'];

				if ($_POST['remember'] != NULL) {
					setcookie("name" , $name ,time()+ 60, "/");	
					if (isset($_COOKIE['name']) ) {
						header("location: home.php");
					}
						
				}
				
				header("location: home.php");
			}

			else {

				array_push($error, "Invalid User Name or Passowrd!");
				

				
			}
			
		}

	}
	
	//Logout
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['name']);

		header("location: login.php");
	}

	//rent
	


 ?>