
<?php
      // Database Connection
      session_start();
      require '../include/config.php';

      // Assign Item form submit btn insert details php code strat
      if(isset($_POST['add']))
      {
          $room_id =mysqli_real_escape_string($conn ,$_POST['roomno']);
          $item_id =mysqli_real_escape_string($conn ,$_POST['item_id']);

          $quantity =mysqli_real_escape_string($conn ,$_POST['quantity']);
          $description =mysqli_real_escape_string($conn ,$_POST['description']);

          //////// INSER /////////
          $queryA ="INSERT INTO  assign_items (room_id,item_id,quantity,description)  VALUES (?,?,?,?)";
          $stmt =mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt,$queryA))
          {
             echo "SQL Error";
          }
          else
          {
              mysqli_stmt_bind_param($stmt,"ssss",$room_id,$item_id,$quantity,$description);
              $resultA =  mysqli_stmt_execute($stmt);
              if($resultA){


                $edit = "UPDATE Inventory 
                                    SET quantity   = quantity - '$quantity',
                                        assign  = assign + '$quantity'
                                    WHERE id=$item_id";

                $result = mysqli_query($conn,$edit);
                if($result){
                    echo  1;
                }else{
                    echo  mysqli_error($conn);		
                }
              }else{
                  echo  mysqli_error($conn);	
              }
           }
     }

    

