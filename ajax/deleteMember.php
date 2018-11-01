<?php
    require_once('../db/db.php');


    if(isset($_GET['id'])){

    		$id = $_GET['id'];
    		
			$conn = getDbConnect();


			$sql = "DELETE FROM users WHERE id='$id'";

			if(mysqli_query($conn, $sql)){

				echo "Member deleted !";
			}else{
				echo "delete unsuccesfull".mysqli_error($dbconnect);
			}
	}

	// echo "hello delete";
	// $id = $_GET['id'];
 //    echo $id;
?>

