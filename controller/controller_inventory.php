
<?php
      // Database Connection
      session_start();
      require '../include/config.php';

      // category form submit btn insert details php code strat
      if(isset($_POST['add']))
      {
          $cname =mysqli_real_escape_string($conn ,$_POST['cname']);
          $isFood =mysqli_real_escape_string($conn ,$_POST['isFood']);
          //////// INSER /////////
          $queryin ="INSERT INTO  category (name,isFood)  VALUES (?,?)";
          $stmt =mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt,$queryin))
          {
             echo "SQL Error";
          }
          else
          {
              mysqli_stmt_bind_param($stmt,"ss",$cname,$isFood);
              $resultin =  mysqli_stmt_execute($stmt);
              if($resultin){
                echo 1;
              }else{
                  echo  mysqli_error($conn);	
              }
           }
     }

       // item form submit btn insert details php code strat
      if(isset($_POST['add_item']))
      {
          $item_id =mysqli_real_escape_string($conn ,$_POST['item_id']);
          $cat_id =mysqli_real_escape_string($conn ,$_POST['cat_id']);
          $iname =mysqli_real_escape_string($conn ,$_POST['iname']);
          $quantity =mysqli_real_escape_string($conn ,$_POST['quantity']);
          $description =mysqli_real_escape_string($conn ,$_POST['description']);

          //////// INSER /////////
          $queryin ="INSERT INTO  Inventory (item_id,cat_id,name,quantity,description)  VALUES (?,?,?,?,?)";
          $stmt =mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt,$queryin))
          {
             echo "SQL Error";
          }
          else
          {
              mysqli_stmt_bind_param($stmt,"sssss",$item_id,$cat_id,$iname,$quantity,$description);
              $resultin =  mysqli_stmt_execute($stmt);
              if($resultin){
                echo 1;
              }else{
                  echo  mysqli_error($conn);	
              }
           }
     }

       // food form submit btn insert details php code strat
      if(isset($_POST['add_food']))
      {
          $item_id =mysqli_real_escape_string($conn ,$_POST['item_id']);
          $cat_id =mysqli_real_escape_string($conn ,$_POST['cat_id']);
          $iname =mysqli_real_escape_string($conn ,$_POST['iname']);
          $quantity =mysqli_real_escape_string($conn ,$_POST['quantity']);
          $measurement =mysqli_real_escape_string($conn ,$_POST['measurement']);
          $description =mysqli_real_escape_string($conn ,$_POST['description']);
          $isFood = 1;

          //////// INSER /////////
          $queryin ="INSERT INTO  Inventory (item_id,cat_id,name,measurement,quantity,description,isFood)  VALUES (?,?,?,?,?,?,?)";
          $stmt =mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt,$queryin))
          {
             echo "SQL Error";
          }
          else
          {
              mysqli_stmt_bind_param($stmt,"sssssss",$item_id,$cat_id,$iname,$measurement,$quantity,$description,$isFood);
              $resultin =  mysqli_stmt_execute($stmt);
              if($resultin){
                echo 1;
              }else{
                  echo  mysqli_error($conn);	
              }
           }
     }





    


