<?php 
	
	//database include
	include '../db/db.php';
	

	if (isset($_POST['uploadFile'])) {
		
		$uploadedImage = $_FILES["fileToUpload"]["name"];
		$id = $_POST['id'];

		$target = "../uploadedimage/".basename($_FILES["fileToUpload"]["name"]);
		
		$temp =  $_FILES['fileToUpload']['tmp_name'];

		

		$dbconnect = getDbConnect();

		$sql = "UPDATE users SET uploadedImage = '$uploadedImage' WHERE id = '$id' ";
		

            if(mysqli_query($dbconnect ,$sql)){

            	if (move_uploaded_file($temp , $target)) {
            		
            		echo  "Photo Upload Succesfully";
            	}
                


            }
            else {
                echo "Photo Upload Failed. ".mysqli_error($dbconnect);

            }


	}

 ?>