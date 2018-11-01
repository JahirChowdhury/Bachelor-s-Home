<?php 
	
	//database include
	include '../db/db.php';
	
	if (isset($_POST['confirmSchedule'])) {
		
		$member_name = $_POST['memberName'];
		$start_day = $_POST['startDate'];

		$end_day = $_POST['endDate'];
		
		$comment = $_POST['comment'];

		if ($member_name == "" | $start_day == "" | $end_day == "") {
			
			echo "Input Field Empty.Try Again";
		}

		$dbconnect = getDbConnect();
		
		$sql = "INSERT INTO bazar_schedule (member_name, start_day ,end_day, comment) 
									values ('$member_name' , '$start_day' , '$end_day', '$comment')";

            if(mysqli_query($dbconnect ,$sql)){

                echo  "Bazar Schedule Recorded Succesfully";


            }
            else {
                echo "Bazar Schedule Recorded Failed. ".mysqli_error($dbconnect);

            }


	}
	else if (isset($_POST['updateSchedule'])) {
		
		$id = $_POST['id'];
		$member_name = $_POST['memberName'];
		$start_day = $_POST['startDate'];

		$end_day = $_POST['endDate'];
		
		$comment = $_POST['comment'];


		$dbconnect = getDbConnect();

		$sql = "UPDATE bazar_schedule SET  start_day='$start_day', 
												end_day = '$end_day', 
													comment = '$comment'  WHERE id='$id' ";

            if(mysqli_query($dbconnect ,$sql)){

                echo "Bazar Schedule Updated. ";


            }
            else {
                echo "Bazar Schedule Update Failed. ".mysqli_error($dbconnect);

            }


	}

 ?>