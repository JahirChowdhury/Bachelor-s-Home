<?php
    require_once('../db/db.php');


    if(isset($_GET['id'])){

    		$id = $_GET['id'];
    		
			$conn = getDbConnect();


			$sql = "DELETE FROM mealsheet WHERE id='$id'";

			if(mysqli_query($conn, $sql)){

				echo "Meal deleted !";
			}else{
				echo "delete unsuccesfull".mysqli_error($dbconnect);
			}
	}

	// echo "hello delete";
	// $id = $_GET['id'];
 //    echo $id;
?>

