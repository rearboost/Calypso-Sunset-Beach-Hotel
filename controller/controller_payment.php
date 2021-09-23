
<?php
      // Database Connection
      session_start();
      require '../include/config.php';

      // Paymnet form submit btn insert details php code strat
      if(isset($_POST['add']))
      {
          $emp_id =mysqli_real_escape_string($conn ,$_POST['emp_id']);
          $amount =mysqli_real_escape_string($conn ,$_POST['amount']);
          $description =mysqli_real_escape_string($conn ,$_POST['description']);

         $date =date('Y-m-d');
          
          //////// INSER /////////
          $queryA ="INSERT INTO  payment (emp_id,amount,description,date)  VALUES (?,?,?,?)";
          $stmt =mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt,$queryA))
          {
             echo "SQL Error";
          }
          else
          {
              mysqli_stmt_bind_param($stmt,"ssss",$emp_id,$amount,$description,$date);
              $resultA =  mysqli_stmt_execute($stmt);
              if($resultA){
                  echo  1;
              }else{
                  echo  mysqli_error($conn);	
              }
           }
     }

    

