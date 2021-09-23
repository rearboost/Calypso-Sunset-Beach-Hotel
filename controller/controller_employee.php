
<?php
      // Database Connection
      session_start();
      require '../include/config.php';

      // Employee form submit btn insert details php code strat
      if(isset($_POST['add']))
      {
          $emp_id =mysqli_real_escape_string($conn ,$_POST['emp_id']);
          $des_id =mysqli_real_escape_string($conn ,$_POST['des_id']);
          $ename =mysqli_real_escape_string($conn ,$_POST['ename']);
          $address =mysqli_real_escape_string($conn ,$_POST['address']);
          $phoneNo =mysqli_real_escape_string($conn ,$_POST['phoneNo']);
          $join_date =mysqli_real_escape_string($conn ,$_POST['join_date']);
          
          //////// INSER /////////
          $queryA ="INSERT INTO  employee (emp_id,des_id,name,address,phoneNo,join_date)  VALUES (?,?,?,?,?,?)";
          $stmt =mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt,$queryA))
          {
             echo "SQL Error";
          }
          else
          {
              mysqli_stmt_bind_param($stmt,"ssssss",$emp_id,$des_id,$ename,$address,$phoneNo,$join_date);
              $resultA =  mysqli_stmt_execute($stmt);
              if($resultA){
                  echo  1;
              }else{
                  echo  mysqli_error($conn);	
              }
           }
     }

    

