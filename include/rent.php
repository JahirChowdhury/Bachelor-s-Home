
<div class="row">
<div class="dashboard_table col-md-5" style="margin-right: 40px;">
	<h1 style="margin-bottom: 30px;">Payment</h1>
    
	<form method="POST" action="ajax/paymentInsert.php"  name="payment" onsubmit="return paymentFormValidation()">
		<!-- succesfull message -->
		
		
		<div class="form-group">
		    <label for="usr">Member Name:</label>
		    <select class="form-control" id="memberName" name="memberName">
		    	<option value="notSelected1">-- Select a Member --</option>
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
			<label id="errMemberName" class="error">Please select a member</label>
	    </div>
	    <table>
	    	<tr>
	    		<td>
	    			<div class="form-group" style="margin-right: 20px;">
				      <label for="usr">Paid Date:</label>
				      <select class="form-control" id="paidDate" name="paidDate">
				      	<option value="paidDateNotSelected">Selcet Date</option>
				      	<?php
				      		for ($i=1; $i <=31 ; $i++) { 
				      			echo '<option value = "'.$i.'">'.$i.'</option>';
				      		}
				      	?>
				      </select>
				      <label id="errorDate" class="error">Please select a date</label>
					</div>
	    		</td>
	    		<td>
	    			<div class="form-group" style="margin-right: 20px;">
				      <label for="usr">Paid Month:</label>
				      <select class="form-control" width="65px"  id="paidMonth" name="paidMonth">
				      	<option value="paidMonthNotSelected">Select month</option>
				      	<option value="January">January</option>
				      	<option value="February">February</option>
				      	<option value="March">March</option>
				      	<option value="April">April</option>
				      	<option value="May">May</option>
				      	<option value="June">June</option>
				      	<option value="July">July</option>
				      	<option value="August">August</option>
				      	<option value="Septemper">Septemper</option>
				      	<option value="October">October</option>
				      	<option value="November">November</option>
				      	<option value="December">December</option>
				      </select>
				      <label id="errorMonth" class="error">Please select a month</label>
					</div>
	    		</td>
	    		<td>
	    			<div class="form-group">
				      <label for="usr">Paid Year:</label>
				      <select class="form-control" id="paidYear" name="paidYear">
				      	<option value="paidYearNotSelected">Selcet Year</option>
				      	<?php
				      		for ($i=2000; $i <2050 ; $i++) { 
				      			echo '<option value = "'.$i.'">'.$i.'</option>';
				      		}
				      	?>
				      </select>
				      <label id="errorYear" class="error">Please select a year</label>
					</div>
	    		</td>
	    	</tr>
	    </table>
		

		<div class="form-group">
	      <label for="usr">Paid Amount:</label>
	      <input type="text" class="form-control" id="paidAmount" name="paidAmount" >
	      <label id="errorPaidAmount" class="error">Please fill the field</label>
	    </div>
	    <div class="form-group">
	      <label for="pwd">Due Amount:</label>
	      <input type="text" class="form-control" id="dueAmount" name="dueAmount" >
	      <label class="error" id="errorDueAmount">Please fill the field</label>
	    </div>
	    <div class="form-group">
	      <label for="pwd">Received By:</label>
	      <input type="text" class="form-control" id="receivedBy" name="receivedBy" >
	      <label class="error" id="errorReceivedBy">Please fill the field</label>
	    </div>
	    <div>
	      <button type="submit" class="btn btn-primary" name="confirmPayment"  onclick="paymentInsertion()">Payment Confirm</button>
	    </div><br><br>
	</form>	
</div>


<div class="dashboard_table col-md-6">
	<h1 style="margin-bottom: 30px;">Payment History</h1>

		<table class="table table-dark">
		  	<thead>
			  	<tr>
			  		<td>
			  			<label for="usr">Payment By Month:</label>
			  		</td>
			  		<td>
			  			<div class="form-group">
				      
						    <select class="searchByMonth form-control" id="paidByMonth" name="paidByMonth"  width="60px" onchange="getPaymentHistory()">
							    <option value="paymentByMonthNotSelected">-- Select a month --</option>
				                
						      	<option value="January">January</option>
						      	<option value="February">February</option>
						      	<option value="March">March</option>
						      	<option value="April">April</option>
						      	<option value="May">May</option>
						      	<option value="June">June</option>
						      	<option value="July">July</option>
						      	<option value="August">August</option>
						      	<option value="Septemper">Septemper</option>
						      	<option value="October">October</option>
						      	<option value="November">November</option>
						      	<option value="December">December</option>
							</select>
			    		</div>
			  		</td>
			  	</tr>

			    <tr>
			      
			      <th scope="col">Member Name</th>
			      <th scope="col">Paid Month</th>
			      <th scope="col">Paid Amount</th>
			      <th scope="col"> Due Amount</th>
			      <th scope="col"> Received by</th>
			  	</tr>
			</thead>

			<tbody id="demo">
				
			</tbody>		  
	</table>
</div>

</div>
<script >
	
//Payment History Table
function getPaymentHistory(){
	var paidMonth = document.getElementById('paidByMonth').value;
	var xhttp = new XMLHttpRequest();
  
	xhttp.open("GET", "ajax/payment.php?paidMonth="+paidMonth, true);     
	xhttp.send();

	xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {

	    	document.getElementById("demo").innerHTML = this.responseText;

		}
	};
};
	
function paymentInsertion(){

	
	var memberName = document.getElementById('memberName').value;
	var paidDate = document.getElementById('paidDate').value;
	var paidMonth = document.getElementById('paidMonth').value;
	var paidYear = document.getElementById('paidYear').value;
	var paidAmount = document.getElementById('paidAmount').value;
	var dueAmount = document.getElementById('dueAmount').value;
	var receivedBy = document.getElementById('receivedBy').value;
	

	xhttp.open("POST", "ajax/paymentInsert.php", true);   
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("memberName="+memberName+"&paidDate="+paidDate+"&paidMonth="+paidMonth+
		"&paidYear="+paidYear+"&paidAmount="+paidAmount+"&dueAmount="+dueAmount+"&receivedBy="+receivedBy);
	xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {

	    	alert(this.responseText) ;

		}
	};

	
}



</script>
