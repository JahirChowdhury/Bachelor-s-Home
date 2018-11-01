<div class="row">
	<div class="dashboard_table col-md-5" id="left_table" style="margin-right: 40px;">
		<h1 style="margin-bottom: 30px;">Add Bazar Schedule</h1>
		<form  method="POST" action="ajax/insertBazarschedule.php" name="bazarSchedule" onsubmit="return scheduleFormValidation()">

			<?php
				include '../db/db.php';

			?>

			<div class="form-group">
			      <label for="usr">Member Name:</label>
			      <select class="form-control" id="memberName" name="memberName" >
			      	<option value="memberNotSelected">-- Select Member --</option>
					<?php 
						include 'mysql-to-json.php';
						$sql = "select * from users ";
	                 	$jsonData = getJSONFromDB($sql);
	    
	                 	$jsn = json_decode($jsonData);
	                   
	   
	                    for($i= 0 ;$i<sizeof($jsn);$i++){
	                    //if($jsn[$i]->name=="abc")
	                     $name = $jsn[$i]->name;

	                     
	                     echo '<option value = "'.$name.'">'.$name.'</option>';
	                     
	                    }
	                ?>
				    
				  </select>
				  <label id="errorMemberName" class="error">Please Select a member</label>
		    </div>
		    <table>
		    	<tr>
		    		<td>
		    			<div class="form-group" style="margin-right: 20px">
						    <label for="usr">Start Day:</label>
						    <input type="date" class="form-control" name="startDate"  />
							<label id="errorStartDate" class="error">Please Select start date</label>
					    </div>
		    		</td>
		    		<td>
		    			<div class="form-group">
						    <label for="usr">End Day:</label>
						    <input type="date" class="form-control" name="endDate"  />
							<label id="errorEndDate" class="error">Please Select end date</label>
					    </div>
		    		</td>
		    	</tr>
		    </table>
			
		    <div class="form-group">
			      <label for="usr">Comment:</label>
			      <textarea class="form-control" rows="3" id="comment" name="comment" ></textarea>
		    </div>
		    <div>
		    	<button type="submit" class="btn btn-primary" name="confirmSchedule" id="confirmSchedule">Schdule Confirm</button>
		    </div>
		    <br><br>
		</form>	
	</div>

	<!--Schedule history table -->

	<div class="dashboard_table col-md-6" id="right_table">
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
			                       echo '<td>
			                       			<a type="button"  href="javascript:void(0)" 
			                       				class="btn btn-info" 
			                       				style="color:white" 
			                       				id= "editSchedule"
			                       				name = "editSchedule"
			                       				data-location ="ajax/editBazarSchedule.php?id='.$row['id'].'">Edit
			                       			</a>
			                       		</td>';
			                       	echo '<td>
			                       			<a type="submit" 
			                       				class="btn btn-danger" 
			                       				style="color:white" 
			                       				id= "deleteSchedule"
			                       				name = "deleteSchedule"
			                       				href ="ajax/deleteBazarSchedule.php?id='.$row['id'].'">Delete
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

<script>
        $(document).ready(function () {
        $("tbody tr td  #editSchedule").click(function (item) {
            var clickitem = $(item.target).attr('data-location');
            $("#left_table").load(clickitem);


        }) 



    });
</script>


