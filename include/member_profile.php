<div class="row">

	<!--Personal info table -->
	<?php 
		  		
			session_start();

			require_once('../db/db.php');
			
			$conn = getDbConnect();

        $query = "SELECT * FROM users where id = '".$_SESSION['id']."' ";

        $result = mysqli_query($conn , $query);

        $row = mysqli_fetch_assoc($result);
  ?>

	<div class="dashboard_table col-md-6" style="margin-right: 15px;">
		<h1 style="margin-bottom: 30px;"> Profile</h1>

		
		<table class="table table-dark">
		  
		  <tbody id="demo">

		  	<tr>
		  		<td>Name :</td>
		  		<td><label><?php echo $row['name'] ?></label></td>
		  	</tr>
		  	<tr>
		  		<td>Email : </td>
		  		<td><label><?=$row['email'] ?></label></td>
		  	</tr>
		  	<tr>
		  		<td>Password : </td>
		  		<td><label><?=$row['password'] ?></label></td>
		  	</tr>
		  	<tr>
		  		<td>Rented Month</td>
		  		<td><label><?=$row['rented_month'] ?></label></td>
		  	</tr>
		  	<tr>
		  		<td>User Type</td>
		  		<td><label><?=$row['type'] ?></label></td>
		  	</tr>
		  	<tr>
		  		
			  		<td ><a type="button"  href="javascript:void(0)" 
		   				class="btn btn-info" 
		   				style="color:white;text-align:center;" 
		   				id= "editMyMeal"
		   				name = "editMyMeal"
		   				data-location ="ajax/editProfile.php?id='.$row['id'].'">Edit
		   			</a>
	   			</td>
			                       			<td></td>
		  	</tr>
		  	
		  		
		  </tbody>
		</table>
		
	</div>

	<div class="dashboard_table col-md-5" id="left_table" >
		
	
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


