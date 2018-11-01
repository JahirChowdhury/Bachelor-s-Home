<?php 

    include('../db/db.php');

    

    //get paymengt info 

    $paidMonth = $_GET['paidMonth'];

    if ($paidMonth == "paymentByMonthNotSelected") {
        echo  "<tr>";
                
                echo "No Data Found.Selcet a month";
                   
        echo "</tr>";
    }

    else{

        $conn = getDbConnect();

        $query = "SELECT * FROM payment WHERE paidMonth='".$paidMonth."' ";

        $result = mysqli_query($conn , $query);

        
        if( $result ){
        // success! check results
            while( $row = mysqli_fetch_assoc( $result ) ){
                echo  "<tr>";
                       
                       echo "<td>".$row['memberName']."</td>";
                       echo "<td>".$row['paidDate']." / ".$row['paidMonth']." / ".$row['paidYear']. "</td>";
                       echo "<td>".$row['paidAmount']."</td>";
                       echo "<td>".$row['dueAmount']."</td>";
                       echo "<td>".$row['receivedBy']."</td>";
                echo "</tr>";
            }
        } 

    }
        


    
?>