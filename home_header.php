<!DOCTYPE html>
<html>
<head>
	<title>Bachelor's Home</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="include/dashboard.css">
	<script type="text/javascript" src="jquery-3.3.1.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="function.js"></script>

	
	


</head>
<body>
	
	<div class="wrapper">
		<div class="tagline">
			<?php if (isset($_SESSION['name'])) : ?>
				<div>
					<p>Hi <strong style="color: red;"><?php echo $_SESSION['name'];  ?></strong> , Welcome to Bachelor's Home </p>

				</div>			
			<?php endif ?>
		</div>
		<?php 
			
		    include 'include/mysql-to-json.php';
		    $sql = "select * from users where name = '".$_SESSION['name'] ."' ";
		    $jsonData = getJSONFromDB($sql);

		    $jsn = json_decode($jsonData);

		    $name; $email; $password ;$rented_month; $phone;
		    for($i= 0 ;$i<sizeof($jsn);$i++){

		    $id = $jsn[$i]->id;
		    $name = $jsn[$i]->name;
		    $email = $jsn[$i]->email;
		    $password = $jsn[$i]->password;
		    $rented_month = $jsn[$i]->rented_month;
		    $phone = $jsn[$i]->phone;
		    $uploadedImage = $jsn[$i]->uploadedImage;



		    }
		?>
		<div class="content">
			<div class="left_content col-md-2">

				<div class="vertical-menu">
					<?php 
		                if($_SESSION['type'] == 'admin')
		                { ?>
		                	<img 
		                	style="border-radius: 50px;"
		                	width="100px" height="100px" 
		                	align="center" 
		                	src="uploadedimage/<?php echo $uploadedImage ?>" >
		                    <a href="">User : <label style="color: red;"> <?=$_SESSION['type'];?></label></a>
						  	<a href="#" class="active" id="dashboard">Dashboard </a>
						  	<a href="#" id="pass">Change Password</a>
						  	<a href="#" id="changePicture">Profile Picture</a>
						  	<a href="#" id="meal">Meal Sheet</a>
						  	<a href="#"  id="bazar">My Bazar Day</a>
						  	<a href="#" id="rent">Rent</a>
						  	<a href="login.php?logout='1'" style="background-color: red;color: white;">Logout</a>
		            
		                <?php }else { ?>

							<a href="">User : <label style="color: red;"> <?=$_SESSION['type'];?></label></a>
						  	<a href="#" class="active" id="member_dashboard">Dashboard </a>
						  	<a href="#" id="member_profile">Profile</a>
						  	<a href="#" id="changePicture">Profile Picture</a>
						  	<a href="#" id="member_meal">My Meal</a>
						  	<a href="#"  id="member_bazar">Bazar Day</a>
						  	<a href="login.php?logout='1'" style="background-color: red;color: white;">Logout</a>

		            <?php } ?>
				</div>
			</div>

