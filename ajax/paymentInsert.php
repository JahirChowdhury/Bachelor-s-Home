<?php 
    
    include('../db/db.php');

//insert payment 
    
    if (isset($_POST['confirmPayment'])) {

        
        
        $memberName     = $_POST['memberName'];
        $paidDate       = $_POST['paidDate'];
        $paidMonth      = $_POST['paidMonth'];
        $paidYear       = $_POST['paidYear'];
        $paidAmount     = $_POST['paidAmount'];
        $dueAmount      = $_POST['dueAmount'];
        $receivedBy     = $_POST['receivedBy'];

        if ($memberName == "" || $paidDate == "" || $paidMonth == "" || $paidYear == "" ||
             $paidAmount == "" || $dueAmount == "" || $receivedBy == "" ) {
             
             echo "Payment Recording Unsuccesfull";
        }
        else{
            
            $conn = getDbConnect();

            $sql = "INSERT INTO payment (memberName, paidDate ,paidMonth, paidYear ,paidAmount , dueAmount, receivedBy) 
            values ('$memberName' , '$paidDate' , '$paidMonth', '$paidYear' , '$paidAmount' , '$dueAmount' , '$receivedBy')";

            if(mysqli_query($conn ,$sql)){

                echo  "Payment Recorded Succesfully";

            }
            else {
                echo "Payment Recorded Unsuccesfull";

            }
            
        }
    }
    
?>