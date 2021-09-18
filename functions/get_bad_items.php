<?php
	error_reporting(0);
	// Database Connection
    session_start();
    require '../include/config.php';

    if(isset($_POST['roomno']))
    {

        $room_id = $_POST['roomno'];
        $item_id = $_POST['item_id'];

        $get_rooms = mysqli_query($conn, "SELECT * FROM  assign_items WHERE room_id='$room_id' AND item_id ='$item_id'");
        $itemData = mysqli_fetch_assoc($get_rooms);
        $quantity = $itemData['quantity'];
        $myObj->roomQuantity  = $quantity;
        $myJSON = json_encode($myObj);

        echo $myJSON;
    }

?>