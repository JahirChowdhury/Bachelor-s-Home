<?php 
	
	//database include
	include '../db/db.php';
	
	if (isset($_POST['confirmMeal'])) {
		
		$memberId 	= $_POST['memberId'];
		$mealDate = $_POST['mealDate'];
		$myMeal = $_POST['myMeal'];
		$guestMeal = $_POST['guestMeal'];
		$comment = $_POST['comment'];

		if ($mealDate == "" | $myMeal == "" | $myMeal == "" | $comment == "") {
			
			echo "Input Field Empty.Try Again";
		}
		else{
			
			$dbconnect = getDbConnect();
			
			$sql = "INSERT INTO mealsheet (memberId, mealDate ,myMeal, guestMeal, comment) 
										values ('$memberId' , '$mealDate' , '$myMeal', '$guestMeal','$comment')";

	            if(mysqli_query($dbconnect ,$sql)){

	                echo  "Meal Recorded Succesfully";


	            }
	            else {
	                echo "Meal Recorded Failed. ".mysqli_error($dbconnect);

	            }
	        }

	}
	else if (isset($_POST['updateMeal'])) {
		
		$id = $_POST['id'];


		$mealDate = $_POST['mealDate'];

		$myMeal = $_POST['myMeal'];

		$guestMeal = $_POST['guestMeal'];
		
		$comment = $_POST['comment'];


		$dbconnect = getDbConnect();

		$sql = "UPDATE mealsheet SET  mealDate='$mealDate', 
												myMeal = '$myMeal', 
													guestMeal = '$guestMeal', 
														comment = '$comment'  WHERE id='$id' ";

            if(mysqli_query($dbconnect ,$sql)){

                echo "Meal Updated. ";


            }
            else {
                echo "Meal Update Failed. ".mysqli_error($dbconnect);

            }


	 }

 ?>