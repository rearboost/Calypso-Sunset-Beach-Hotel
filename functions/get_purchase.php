<?php
	error_reporting(0);
	// Database Connection
    session_start();
    require '../include/config.php';

    if(isset($_POST['cat_id']))
    {
        $cat_id = $_POST['cat_id'];

        $query ="SELECT * FROM  inventory WHERE cat_id =$cat_id";
        $result =mysqli_query($conn, $query);

        echo '<select  class="form-control" id="item_id" name="item_id" required>';
        echo ' <option value="">Select</option>';
        while($row = mysqli_fetch_array($result))
        {
            echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
        }
        echo '</select>';
                                                        
    }

?>