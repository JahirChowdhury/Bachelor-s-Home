<?php
				include '../db/db.php';

			?>
<!--Schedule history table -->

	<div class="dashboard_table col-md-6" style="margin-right: 15px;">
		<h1 style="margin-bottom: 30px;">Member Name</h1>
		
		<table class="table table-dark">
		  <thead>
		  	
		    <tr>
		      
		      <th scope="col">Member Name</th>
		      <th scope="col">Email</th>
		      <th scope="col">Mobile Number</th>
		      <th scope="col">Rented Month</th>
		    </tr>
		  </thead>
		  <tbody id="demo">
		  		<?php 
		  			
		  			$conn = getDbConnect();

			        $query = "SELECT * FROM users ";

			        $result = mysqli_query($conn , $query);

			        
			        if( $result ){
			        // success! check results
			            while( $row = mysqli_fetch_assoc( $result ) ){
			                echo  "<tr>";
			                       
			                       echo "<td>".$row['name']."</td>";
			                       echo "<td>".$row['email']. "</td>";
			                       echo "<td>".$row['phone']."</td>";
			                       echo "<td>".$row['rented_month']."</td>";
			                       echo '<td>
			                       			<a type="submit" 
			                       				class="btn btn-danger" 
			                       				style="color:white" 
			                       				id= "deleteSchedule"
			                       				name = "deleteSchedule"
			                       				href ="ajax/deleteMember.php?id='.$row['id'].'">Delete
			                       			</a>
			                       		</td>';
			                       	
			                echo "</tr>";
			            }
			        }
		  		 ?>
		  </tbody>
		</table>
		
	</div>

<!--Schedule history table -->

	<div class="dashboard_table col-md-5">
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
	
	
