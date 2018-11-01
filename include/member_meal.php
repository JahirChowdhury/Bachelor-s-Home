<div class="row">
	<div class="dashboard_table col-md-5" id="left_table" style="margin-right: 40px;">
		<h1 style="margin-bottom: 30px;">Add Meal</h1>
		<form  method="POST" action="ajax/inesrtMemberMeal.php" name="memberMeal">
			<?php
				session_start(); 
				require_once('../db/db.php');

			    if(isset($_SESSION['id'])){

			    	$conn = getDbConnect();
			    	$sql = "select * from users where id='".$_SESSION['id']."'";
			    	$result = mysqli_query($conn, $sql);
			    	
			    	$row = mysqli_fetch_assoc($result);
			    	
			    }

			    	
			?>
			
			<div class="form-group">
		      <input type="hidden" class="form-control" id="memberId" name="memberId" value="<?=$row['id']?>" >
		    </div>
    		
		    <table>
		    	<tr>
		    		<td>
		    			<div class="form-group" style="margin-right: 20px">
						    <label for="usr">Meal Day:</label>
						    <input type="date" class="form-control"  value="<?php echo date('Y-m-d'); ?>" name="mealDate"  />
							<label id="errorMealDate" class="error">Please Select start date</label>
					    </div>
		    		</td>
		    		
		    	</tr>
		    	<tr>
		    		<td>
		    			<div class="form-group" style="margin-right: 20px">
						    <label for="usr">My Meal:</label>
						    <input type="number" class="form-control" name="myMeal" value="1"  />
							<label id="errorMyMeal" class="error">Please Inser Meal Amount</label>
					    </div>
		    		</td>
		    		<td>
		    			<div class="form-group" style="margin-right: 20px">
						    <label for="usr">Guest Meal:</label>
						    <input type="number" class="form-control" name="guestMeal" value="0" />
							<label id="errorGuestMeal" class="error">Please Insert Guest Meal Amount</label>
					    </div>
		    		</td>
		    	</tr>
		    </table>
			
		    <div class="form-group">
			      <label for="usr">Comment:</label>
			      <textarea class="form-control" rows="3" id="comment" name="comment" ></textarea>
		    </div>
		    <div>
		    	<button type="submit" class="btn btn-primary" name="confirmMeal" id="confirmMeal">Confirm Meal</button>
		    </div>
		    <br><br>
		</form>	
	
	</div>

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
			                       			<a type="button"  href="javascript:void(0)" 
			                       				class="btn btn-info" 
			                       				style="color:white" 
			                       				id= "editMyMeal"
			                       				name = "editMyMeal"
			                       				data-location ="ajax/editMyMeal.php?id='.$row['id'].'">Edit
			                       			</a>
			                       		</td>';

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

<script>
        $(document).ready(function () {
        	//alert("myMealedit")
        $("tbody tr td  #editMyMeal").click(function (item) {
            var clickitem = $(item.target).attr('data-location');
            $("#left_table").load(clickitem);


        }) 



    });
</script>


