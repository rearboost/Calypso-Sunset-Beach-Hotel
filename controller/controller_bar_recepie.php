
<?php
      // Database Connection
      session_start();
      require '../include/config.php';

      // Assign Item form submit btn insert details php code strat
      if(isset($_POST['add']))
      {
          $rep_name =mysqli_real_escape_string($conn ,$_POST['rep_name']);
          $iqu_id =mysqli_real_escape_string($conn ,$_POST['item_id']);

          $qty =mysqli_real_escape_string($conn ,$_POST['quantity']);
          $description =mysqli_real_escape_string($conn ,$_POST['description']);

          ///////INSERT bar_recepies_tb ////////

          $queryA ="INSERT INTO bar_recepies_tb (rep_name)  VALUES (?)";
          $stmt =mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt,$queryA))
          {
             echo "SQL Error";
          }
          else
          {
             mysqli_stmt_bind_param($stmt,"s",$rep_name);
              $resultA =  mysqli_stmt_execute($stmt);
              if($resultA){ 
                    //$qry = "SELECT id FROM bar_recepies_tb WHERE rep_name = $rep_name ";
                    //$result=mysqli_query($conn,$sql);
                    //$row_get = mysqli_fetch_assoc($result);
                    //$bar_rec_Id = $row_get['id'];
                     
                    //$queryB ="INSERT INTO bar_rec_ingredients_tb (lqu_id,qty,bar_rec_Id,description)  VALUES (?,?,?,?)";
                    //if(!mysqli_stmt_bind_param($stmt,$queryB))
                    //{
                       // echo "SQL Error";
                    //}
                    //else 
                    //{
                    //mysqli_stmt_bind_param($stmt,"ssss",$iqu_id,$qty,$bar_rec_Id,$description);
                    //$resultB =  mysqli_stmt_execute($stmt);
                     // if($resultB){
                      //      echo 1
                      //}
                      //else 
                     // {
                      //echo  mysqli_error($conn);	
                      //}
                      echo 1;
                    }
                          
              }else{
                  echo  mysqli_error($conn);	
              }
          }

                                                       
          //////// INSER /////////

         
     }

    

