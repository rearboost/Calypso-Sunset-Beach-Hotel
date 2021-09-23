
<?php
      // Database Connection
      session_start();
      require '../include/config.php';

      // Designation form submit btn insert details php code strat
      if(isset($_POST['add']))
      {
          $dname =mysqli_real_escape_string($conn ,$_POST['dname']);
          
          //////// INSER /////////
          $queryA ="INSERT INTO  designation (name)  VALUES (?)";
          $stmt =mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt,$queryA))
          {
             echo "SQL Error";
          }
          else
          {
              mysqli_stmt_bind_param($stmt,"s",$dname);
              $resultA =  mysqli_stmt_execute($stmt);
              if($resultA){
                  echo  1;
              }else{
                  echo  mysqli_error($conn);	
              }
           }
     }

    

