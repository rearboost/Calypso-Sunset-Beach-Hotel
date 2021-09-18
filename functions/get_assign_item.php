<?php
	error_reporting(0);
	// Database Connection
    session_start();
    require '../include/config.php';

    if(isset($_POST['item_id']))
    {

        $id = $_POST['item_id'];

        $get_item = mysqli_query($conn, "SELECT * FROM  Inventory WHERE id='$id'");
        $itemData = mysqli_fetch_assoc($get_item);
        $quantity = $itemData['quantity'];
        $myObj->available  = $quantity;
        $myJSON = json_encode($myObj);

        echo $myJSON;
    }

    if(isset($_POST['roomno']))
    {
        $id = $_POST['roomno'];

        $get_room = mysqli_query($conn, "SELECT * FROM  roominfor WHERE id='$id'");
        $roomData = mysqli_fetch_assoc($get_room);
        $roomtype = $roomData['roomtype'];

        $myObj->roomtype  = $roomtype;
        $myJSON = json_encode($myObj);

        echo $myJSON;
    }

?>