<?php 
	function getDbConnect() {
    	
    	$server = "localhost";
		$dbuser = "root";
		$dbpass = "";
		$dbname = "bachalor_managemet";

		$dbconnect = mysqli_connect($server,$dbuser,$dbpass,$dbname);
		
		return $dbconnect;

	}
	
	


 ?>