<?php 
    

    //get paymengt info 
    if (isset($_GET['id'])) {
        
        $id = $_GET['id'];

        $dbconnect = mysqli_connect("localhost" , "root", "", "bachalor_managemet");

        $sql = "SELECT * FROM bazar_schedule where id ='".$id."' ";

        $result = mysqli_query($dbconnect , $sql);
        
        $row = mysqli_fetch_assoc( $result );

    }

    
   

?>


		<h1 style="margin-bottom: 30px;">Update Bazar Schedule</h1>
		<form  method="POST" action="ajax/insertBazarschedule.php" name="bazarSchedule" onsubmit="return scheduleFormValidation()">

			<div class="form-group">
			      <input type="hidden" class="form-control" name="id" value="<?php echo $row['id']?>" />
		    </div>
			<div class="form-group">
			      <label for="usr">Member Name:</label>
			      <select class="form-control" id="memberName" name="memberName" >
			      	<option value="<?php echo $row['member_name']?>"><?php echo $row['member_name']?></option>
				
				    
				  </select>
				  <label id="errorMemberName" class="error">Please Select a member</label>
		    </div>
		    <table>
		    	<tr>
		    		<td>
		    			<div class="form-group" style="margin-right: 20px">
						    <label for="usr">Start Day:</label>
						    <input type="date" class="form-control" name="startDate" value="<?php echo $row['start_day']?>" />
							<label id="errorStartDate" class="error">Please Select start date</label>
					    </div>
		    		</td>
		    		<td>
		    			<div class="form-group">
						    <label for="usr">End Day:</label>
						    <input type="date" class="form-control" name="endDate" value="<?php echo $row['end_day']?>" />
							<label id="errorEndDate" class="error">Please Select end date</label>
					    </div>
		    		</td>
		    	</tr>
		    </table>
			
		    <div class="form-group">
			      <label for="usr">Comment:</label>
			      <textarea class="form-control" rows="3" id="comment" name="comment" ><?=$row['comment']; ?></textarea>
		    </div>
		    <div>
		    	<!-- <a type="button" 
		    		class="btn btn-info" 
       				style="color:white" 
       				id= "updateSchedule"
       				name = "updateSchedule"
       				href="javascript:void(0)"
       				data-location ="ajax/editBazarSchedule.php?id='<?=$row['id']; ?>'">Save
			    </a> -->
		    	<button type="submit" class="btn btn-primary" name="updateSchedule" id="updateSchedule" >Save</button>
		    </div>
		    <br><br>
		</form>	
	</div>
	