<div class="row">
	
</div>
<!--Schedule history table -->

	<div class="dashboard_table col-md-12" id="right_table">
		<h1 style="margin-bottom: 30px;">Bazar Shcedule</h1>
		
		<table class="table table-dark">
		  <thead>
		  	
		    <tr>
		      
		      <th scope="col">Member Name</th>
		      <th scope="col">Date</th>
		      <th scope="col">Meal</th>
		      <th scope="col">Guest Meal</th>
		      <th scope="col">Comment</th>
		    </tr>
		  </thead>
		  <tbody id="demo">
		  		<?php 
		  			
		  			include '../db/db.php';
		  			$conn = getDbConnect();

			        $query = "SELECT * FROM mealsheet ";

			        $result = mysqli_query($conn , $query);

			        
			        if( $result ){
			        // success! check results
			            while( $row = mysqli_fetch_assoc( $result ) ){
			                echo  "<tr>";
			                       
			                       echo "<td>".$row['memberId']."</td>";
			                       echo "<td>".$row['mealDate']. "</td>";
			                       echo "<td>".$row['myMeal']."</td>";
			                       echo "<td>".$row['guestMeal']."</td>";
			                       echo "<td>".$row['comment']."</td>";
			                       
			                       	
			                echo "</tr>";
			            }
			        }
		  		 ?>
		  </tbody>
		</table>
		
	</div>
<!-- https://docs.google.com/spreadsheets/d/1LOo-cmxB_3wtiFDngrQur_kjpPZ1XTSV5THYvg9xdnY/edit#gid=0 -->

