<?php
	
	include 'db/db.php';
	// Initialize Variables to Null.
	$email =""; // Sender's E-mail ID
	$Error ="";
	$successMessage ="";
	// On Submitting Form Below Function Will Execute
	if(isset($_POST['forgetpassword']))
	{
		if (!($_POST["email"]==""))
		{
			$email =$_POST["email"];  // Calling Function To Remove Special Characters From E-mail

			$email = filter_var($email, FILTER_SANITIZE_EMAIL);  // Sanitizing E-mail(Remove unexpected symbol like <,>,?,#,!, etc.)

			if (filter_var($email, FILTER_VALIDATE_EMAIL))
			{
				$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_"; // Generating Password
				
				$password = substr( str_shuffle( $chars ), 0, 8 );

				$connection = getDbConnect();

				$query = "UPDATE users SET password='$password' WHERE email='$email'"; 
				$result = mysqli_query($connection , $query);

				if($result)
				{
					$to = $email;
					$subject = 'Your New Password...';
					$headers = 'sendmail_from = me@example.com';
					// Let's Prepare The Message For E-mail.
					$message = 'Hello User
					Your new password : '.$password.'
					E-mail: '.$email.'
					Now you can login with this email and password.';

					// Send The Message Using mail() Function.
					if(mail($to, $subject, $message , $headers))
					{
						$successMessage = "New Password has been sent to your mail, Please check your mail and SignIn.";
					}
				}
			}
			else{
				$Error = "Invalid Email";
			}
		}
		else{
		$Error = "Email is required";
		}
	}
?>