<?php
	error_reporting(0);
	// Database Connection
    session_start();
    require '../include/config.php';

    if(isset($_POST['empID']))
    {

        $empID = $_POST['empID'];

        $get_emp = mysqli_query($conn, "SELECT * FROM  employee WHERE id='$empID'");
        $empData = mysqli_fetch_assoc($get_emp);
        $address = $empData['address'];
        $phoneNo = $empData['phoneNo'];
        $myObj->address  =  str_replace('\r\n'," , ",$address);
        $myObj->phoneNo  = $phoneNo;
        $myJSON = json_encode($myObj);

        echo $myJSON;
    }

?>