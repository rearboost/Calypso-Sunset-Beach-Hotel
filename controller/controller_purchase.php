<?php
    // Database Connection
    session_start();
    require '../include/config.php';

    // Purchase form submit btn insert details php code strat
    if(isset($_POST['add']))
    {
        $cat_id =mysqli_real_escape_string($conn ,$_POST['cat_id']);
        $item_id =mysqli_real_escape_string($conn ,$_POST['item_id']);
        $quantity =mysqli_real_escape_string($conn ,$_POST['quantity']);
        $price =mysqli_real_escape_string($conn ,$_POST['price']);
        $note =mysqli_real_escape_string($conn ,$_POST['note']);

        $date =date('Y-m-d');

        $queryin ="INSERT INTO  purchase (cat_id,item_id,quantity,price,note,cdate)  VALUES (?,?,?,?,?,?)";

        $stmt =mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$queryin))
        {
            echo "SQL Error";
        }
        else
        {
            mysqli_stmt_bind_param($stmt,"ssssss",$cat_id,$item_id,$quantity,$price,$note,$date);
            $resultin =  mysqli_stmt_execute($stmt);

            ///////// From Inventory  /////////
            $edit = "UPDATE Inventory 
                                SET quantity   = quantity + '$quantity'
                                WHERE id=$item_id";

            $result = mysqli_query($conn,$edit);
            if($result){
                echo  1;
            }else{
                echo  mysqli_error($conn);		
            }
        }
    }



