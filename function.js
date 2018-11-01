$(document).ready(function(){

	
	//admin menu content loading
	$("#dashboard").click(function(){
		console.log("hello");
		 $(".right_content").load('http://localhost/demo/include/dashboard.php');
	})
		 
	

	$("#pass").click(function(){
		 $(".right_content").load('http://localhost/demo/include/changePassword.php');

	})
	
	$("#changePicture").click(function(){
		 $(".right_content").load('http://localhost/demo/include/changePicture.php');

	})
		   	
	$("#bazar").click(function(){
		  $(".right_content").load('http://localhost/demo/include/bazarday.php');
	})
		  
	
	$("#meal").click(function(){
		 $(".right_content").load('http://localhost/demo/include/mealsheet.php');

	})
		  	

    $("#rent").click(function(){
    	$(".right_content").load('http://localhost/demo/include/rent.php');
    })
    //admin menu content loading end

    //member menu content loading
	$("#member_dashboard").click(function(){
		
		 $(".right_content").load('http://localhost/demo/include/member_dashboard.php');
	})
		 
	

	$("#member_profile").click(function(){
		 $(".right_content").load('http://localhost/demo/include/member_profile.php');

	})
		   	
	$("#member_bazar").click(function(){
		  $(".right_content").load('http://localhost/demo/include/member_bazarday.php');
	})
		  
	
	$("#member_meal").click(function(){
		 $(".right_content").load('http://localhost/demo/include/member_meal.php');

	})
    //member menu content loading end







});



// payment form validation

function paymentFormValidation(){
	
	var numValid = /^[0-9]+$/;
	var isValid = true;

	//member name validation
	var memberName = document.payment.memberName;
	var errMemberName = document.getElementById("errMemberName");
	if (memberName.value === "notSelected1") {

		errMemberName.style.visibility = "visible";
		return isValid = false;
	}
	else{
		errMemberName.style.visibility = "hidden";	
	}

	//date Valodation
	var paidDate = document.payment.paidDate;
	var errorDate = document.getElementById("errorDate");
	if (paidDate.value === "paidDateNotSelected") {

		errorDate.style.visibility = "visible";
		return isValid = false;
	}
	else{
		errorDate.style.visibility = "hidden";	
	}

	//month validation
	var paidMonth = document.payment.paidMonth;
	var errorMonth = document.getElementById("errorMonth");
	if (paidMonth.value === "paidMonthNotSelected") {

		errorMonth.style.visibility = "visible";
		return isValid = false;
	}
	else{
		errorMonth.style.visibility = "hidden";	
	}

	//Year Validation
	var paidYear = document.payment.paidYear;
	var errorYear = document.getElementById("errorYear");
	if (paidYear.value === "paidYearNotSelected") {

		errorYear.style.visibility = "visible";
		return isValid = false;
	}
	else{
		errorYear.style.visibility = "hidden";	
	}

	//paid amount field validation
	var paidAmount = document.payment.paidAmount;
	var errorPaidAmount = document.getElementById("errorPaidAmount");
	var numValid = /^[0-9]+$/;
	if (paidAmount.value === "") {

		errorPaidAmount.style.visibility = "visible";
		return isValid = false;


	}
	if (!paidAmount.value.match(numValid)) {
		errorPaidAmount.innerHTML = "Insert any number";
		return isValid = false;
	}
	else{
		
		errorPaidAmount.style.visibility = "hidden";
	}

	//due amount validation
	var dueAmount = document.payment.dueAmount;
	var errorDueAmount = document.getElementById("errorDueAmount");
	if (dueAmount.value === "") {

		errorDueAmount.style.visibility = "visible";
		return isValid = false;
	}
	if (!dueAmount.value.match(numValid)) {
		errorDueAmount.innerHTML = "Insert any number";
		return isValid = false;
	}
	else{
		errorDueAmount.style.visibility = "hidden";	
	}

	//received by field validation
	var receivedBy = document.payment.receivedBy;
	var errorReceivedBy = document.getElementById("errorReceivedBy");
	if (receivedBy.value === "") {

		errorReceivedBy.style.visibility = "visible";
		return isValid = false;
	}
	if (receivedBy.value.match(numValid)) {
		errorReceivedBy.innerHTML = "Format Invaid.Do not use number";
		return isValid = false;
	}
	else{

		errorReceivedBy.style.visibility = "hidden";	
	}

	
	
};

//Bazar Schedule Form Validation
function scheduleFormValidation(){

	//alert("scheduleFormValidation");
	var isValid = true;

	//member name validation
	var memberName = document.bazarSchedule.memberName;
	var errorMemberName = document.getElementById("errorMemberName");
	if (memberName.value === "memberNotSelected") {

		errorMemberName.style.visibility = "visible";
		return isValid = false;
	}
	else{
		errorMemberName.style.visibility = "hidden";	
	}

	//start date validation
	var startDate = document.bazarSchedule.startDate;
	var errorStartDate = document.getElementById("errorStartDate");
	if (startDate.value === "") {

		errorStartDate.style.visibility = "visible";
		return isValid = false;
	}
	else{
		errorStartDate.style.visibility = "hidden";	
	}

	//end date validation
	var endDate = document.bazarSchedule.endDate;
	var errorEndDate = document.getElementById("errorEndDate");
	if (endDate.value === "") {

		errorEndDate.style.visibility = "visible";
		return isValid = false;
	}
	else{
		errorEndDate.style.visibility = "hidden";	
	}
};

//change password
function changepassValidation(){

	//alert("changepassValidation");
	var isValid = true;

	
	var currentPass = document.changePass.currentPass;
	var errorcurrpass = document.getElementById("errorcurrpass");
	if (currentPass.value === "") {

		errorcurrpass.style.visibility = "visible";
		return isValid = false;
	}
	else{
		errorcurrpass.style.visibility = "hidden";	
	}

	
	var newPass = document.changePass.newPass;
	var errornewpass = document.getElementById("errornewpass");
	if (newPass.value == "") {

		errornewpass.style.visibility = "visible";
		return isValid = false;
	}
	else{
		errornewpass.style.visibility = "hidden";	
	}

	
	var conNewPass = document.changePass.conNewPass;
	var errorconnewpass = document.getElementById("errorconnewpass");
	if (conNewPass.value == "" ) {

		errorconnewpass.style.visibility = "visible";
		return isValid = false;

	}
	else if (newPass.value != conNewPass.value) {
		errorconnewpass.innerHTML = "Password Did not match.Try Again !";
		return isValid = false;
	}
	else{
		errorconnewpass.style.visibility = "hidden";	
	}

}
