<!--Schedule history table -->

	<div class="dashboard_table col-md-12" id="right_table">
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
		  			
		  			include '../db/db.php';
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