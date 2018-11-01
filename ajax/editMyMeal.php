<?php 
    
	include '../db/db.php';
    //get paymengt info 
    if (isset($_GET['id'])) {
        
        $id = $_GET['id'];

		$conn = getDbConnect();

        $sql = "SELECT * FROM mealsheet where id ='".$id."' ";

        $result = mysqli_query($conn , $sql);
        
        $row = mysqli_fetch_assoc( $result );

    }

    
   

?>
	<h1 style="margin-bottom: 30px;">Add Meal</h1>
		<form  method="POST" action="ajax/inesrtMemberMeal.php" name="memberMeal">
			
			
			<input type="hidden" class="form-control" name="id" value="<?=$row['id']?>"  />
		    <table>
		    	<tr>
		    		<td>
		    			<div class="form-group" style="margin-right: 20px">
						    <label for="usr">Meal Day:</label>
						    <input type="date" class="form-control"  value="<?=$row['mealDate']?>" name="mealDate"  />
							<label id="errorMealDate" class="error">Please Select start date</label>
					    </div>
		    		</td>
		    		
		    	</tr>
		    	<tr>
		    		<td>
		    			<div class="form-group" style="margin-right: 20px">
						    <label for="usr">My Meal:</label>
						    <input type="number" class="form-control" name="myMeal" value="<?=$row['myMeal']?>"  />
							<label id="errorMyMeal" class="error">Please Inser Meal Amount</label>
					    </div>
		    		</td>
		    		<td>
		    			<div class="form-group" style="margin-right: 20px">
						    <label for="usr">Guest Meal:</label>
						    <input type="number" class="form-control" name="guestMeal" value="<?=$row['guestMeal']?>" />
							<label id="errorGuestMeal" class="error">Please Insert Guest Meal Amount</label>
					    </div>
		    		</td>
		    	</tr>
		    </table>
			
		    <div class="form-group">
			      <label for="usr">Comment:</label>
			      <textarea class="form-control" rows="3" id="comment" name="comment" ><?=$row['comment']?></textarea>
		    </div>
		    <div>
		    	<button type="submit" class="btn btn-primary" name="updateMeal" id="updateMeal">Update</button>
		    </div>
		    <br><br>
		</form>	





	