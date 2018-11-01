	<!--Meal history table -->

	<div class="dashboard_table col-md-6">
		<h1 style="margin-bottom: 30px;">My Meal</h1>
		
		<table class="table table-dark">
		  <thead>
		  	
		    <tr>
		      
		      
		      <th scope="col">Meal Day</th>
		      <th scope="col">My Meal</th>
		      <th scope="col">Guest Meal</th>
		      <th scope="col">Coment</th>
		    </tr>
		  </thead>
		  <tbody id="demo">
		  		<?php 
		  			include '../db/db.php';

		  			session_start();
		  			$conn = getDbConnect();

			        $query = "SELECT * FROM mealsheet where memberId = '".$_SESSION['id']."' ";

			        $result = mysqli_query($conn , $query);

			        
			        if( $result ){
			        // success! check results
			            while( $row = mysqli_fetch_assoc( $result ) ){
			                echo  "<tr>";
			                       
			                       
			                       echo "<td>".$row['mealDate']. "</td>";
			                       echo "<td>".$row['myMeal']."</td>";
			                       echo "<td>".$row['guestMeal']."</td>";
			                       echo "<td>".$row['comment']."</td>";
			                       

			                       	echo '<td>
			                       			<a type="submit" 
			                       				class="btn btn-danger" 
			                       				style="color:white" 
			                       				id= "deleteSchedule"
			                       				name = "deleteSchedule"
			                       				href ="ajax/deleteMyMeal.php?id='.$row['id'].'">Delete
			                       			</a>
			                       		</td>';
			                       	
			                echo "</tr>";
			            }
			        }
		  		 ?>
		  </tbody>
		</table>
		
	</div>

</div>


	<!--Schedule history table -->

	<div class="dashboard_table col-md-5" id="right_table" style="margin-left: 15px;">
		<h1 style="margin-bottom: 30px;">Bazar Shcedule</h1>
		
		<table class="table table-dark">
		  <thead>
		  	
		    <tr>
		      
		      <th scope="col">Member Name</th>
		      <th scope="col">Start Scedule</th>
		      <th scope="col">End Scedule</th>
		      <th scope="col">Coment</th>
		    </tr>
		  </thead>
		  <tbody id="demo">
		  		<?php 
		  			
		  			$conn = getDbConnect();

			        $query = "SELECT * FROM bazar_schedule ";

			        $result = mysqli_query($conn , $query);

			        
			        if( $result ){
			        // success! check results
			            while( $row = mysqli_fetch_assoc( $result ) ){
			                echo  "<tr>";
			                       
			                       echo "<td>".$row['member_name']."</td>";
			                       echo "<td>".$row['start_day']. "</td>";
			                       echo "<td>".$row['end_day']."</td>";
			                       echo "<td>".$row['comment']."</td>";
			                       
			                       	
			                echo "</tr>";
			            }
			        }
		  		 ?>
		  </tbody>
		</table>
		
	</div>