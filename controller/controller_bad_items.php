
<?php
      // Database Connection
      session_start();
      require '../include/config.php';

      // Assign Item form submit btn insert details php code strat
      if(isset($_POST['add']))
      {
          $item_id =mysqli_real_escape_string($conn ,$_POST['item_id']);
          $from =mysqli_real_escape_string($conn ,$_POST['from']);
          $quantity =mysqli_real_escape_string($conn ,$_POST['quantity']);
          $room_id =mysqli_real_escape_string($conn ,$_POST['roomno']);
          $reson =mysqli_real_escape_string($conn ,$_POST['reson']);

          //////// INSER /////////
          $queryA ="INSERT INTO  bad_items (item_id,quantity,reson)  VALUES (?,?,?)";
          $stmt =mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt,$queryA))
          {
             echo "SQL Error";
          }
          else
          {
              mysqli_stmt_bind_param($stmt,"sss",$item_id,$quantity,$reson);
              $resultA =  mysqli_stmt_execute($stmt);
              if($resultA){

                if($from=="r"){

                    ///////// From Roo  /////////
                    $edit = "UPDATE assign_items 
                                        SET quantity   = quantity - '$quantity'
                                        WHERE room_id=$room_id AND item_id =$item_id";

                    $result = mysqli_query($conn,$edit);
                    if($result){
                        echo  1;
                    }else{
                        echo  mysqli_error($conn);		
                    }

                }else{
                    
                    ///////// Direct  /////////
                    $edit = "UPDATE Inventory 
                                        SET quantity   = quantity - '$quantity'
                                        WHERE id=$item_id";

                    $result = mysqli_query($conn,$edit);
                    if($result){
                        echo  1;
                    }else{
                        echo  mysqli_error($conn);		
                    }
                }

              }else{
                  echo  mysqli_error($conn);	
              }
           }
     }

    

