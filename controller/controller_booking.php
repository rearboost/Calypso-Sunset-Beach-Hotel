
<?php
      // Database Connection
      session_start();
      require '../include/config.php';


      // if(isset($_POST['aroom']))
      if(isset($_POST['aroom']))
      {
          $value =$_POST['aroom'];
          $query1 ="SELECT * FROM roominfor WHERE id='".$value."'";
          $result =mysqli_query($conn,$query1);
          while($row = mysqli_fetch_array($result))
          {
                $roomprice = $row['roomprice'];
                echo $roomprice;
          }
       }

      // Room form submit btn insert details php code strat
      if(isset($_POST['booking_btn']))
      {
          $bookingno =mysqli_real_escape_string($conn ,$_POST['bookingno']);

          $cname =mysqli_real_escape_string($conn ,$_POST['cname']);
          $cnic =mysqli_real_escape_string($conn ,$_POST['cnic']);
          $bookby =mysqli_real_escape_string($conn ,$_POST['bookby']);

          $arrivaldate =mysqli_real_escape_string($conn ,$_POST['arrivaldate']);
          $departuredate =mysqli_real_escape_string($conn ,$_POST['departuredate']);
          $numofpeo =mysqli_real_escape_string($conn ,$_POST['numofpeo']);

          $connum =mysqli_real_escape_string($conn ,$_POST['connum']);
          $address =mysqli_real_escape_string($conn ,$_POST['address']);
          $alocatedroom =mysqli_real_escape_string($conn ,$_POST['alocatedroom']);

          $roomprice =mysqli_real_escape_string($conn ,$_POST['roomprice']);
          $discount =mysqli_real_escape_string($conn ,$_POST['discount']);

          $date =date('Y-m-d');
          $time =date('H:i:s',time());

          $createdate =$date." (".$time.")";

          $billstaus= "0";
          $rommstatus ="1";

          $queryup ="UPDATE  roominfor  SET roomstatus='$rommstatus', bookingtime='$createdate' WHERE id='$alocatedroom'";
          $resultup =mysqli_query($conn,$queryup);


          $queryin ="INSERT INTO  bookinginfor (bookingno,cname,cnic,bookby,arrivaldate,departuredate,numofpeo,connum,address,alocatedroom,roomprice,discount,billstatus,createdate)  VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

          $stmt =mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt,$queryin))
          {
             echo "SQL Error";
          }
          else
          {
              mysqli_stmt_bind_param($stmt,"ssssssssssssss",$bookingno,$cname,$cnic,$bookby,$arrivaldate,$departuredate,$numofpeo,$connum,$address,$alocatedroom,$roomprice,$discount,$billstaus,$createdate);
              $resultin =  mysqli_stmt_execute($stmt);
              if($resultin){
                echo "Successful Insert data";
              }
           }

        }


        
