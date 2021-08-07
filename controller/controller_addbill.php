
<?php
      // Database Connection
      session_start();
      require '../include/config.php';


      // Room form submit btn insert details php code strat
      if(isset($_POST['add_bill_btn']))
      {
          $foodid =mysqli_real_escape_string($conn ,$_POST['foodid']);

          $foodname =mysqli_real_escape_string($conn ,$_POST['foodname']);
          $foodsize =mysqli_real_escape_string($conn ,$_POST['foodsize']);
          $quantity =mysqli_real_escape_string($conn ,$_POST['quantity']);

          $foodprice =mysqli_real_escape_string($conn ,$_POST['foodprice']);
          $roomno =mysqli_real_escape_string($conn ,$_POST['roomno']);
          $cnic =mysqli_real_escape_string($conn ,$_POST['cnic']);

          $cbname =mysqli_real_escape_string($conn ,$_POST['cbname']);

          $date =date('Y-m-d');
          $time =date('H:i:s',time());

          $createdate =$date." (".$time.")";

          $queryin ="INSERT INTO  addbillinfor (foodid,foodname,foodsize,foodquantity,tootalprice,roomnoid,cbnic,cbname,createdate)  VALUES (?,?,?,?,?,?,?,?,?)";

          $stmt =mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt,$queryin))
          {
             echo "SQL Error";
          }
          else
          {
              mysqli_stmt_bind_param($stmt,"sssssssss",$foodid,$foodname,$foodsize,$quantity,$foodprice,$roomno,$cnic,$cbname,$createdate);
              $resultin =  mysqli_stmt_execute($stmt);
              if($resultin){
                echo "Successful Add to Bill";
              }
           }

        }


        // Other changing form submit btn insert details php code strat
        if(isset($_POST['procedure_btn']))
        {
            $getprice1 =mysqli_real_escape_string($conn ,$_POST['getprice1']);
            $getname1 =mysqli_real_escape_string($conn ,$_POST['getname1']);
            $getdec1 =mysqli_real_escape_string($conn ,$_POST['getdec1']);

            $getprice2 =mysqli_real_escape_string($conn ,$_POST['getprice2']);
            $getname2 =mysqli_real_escape_string($conn ,$_POST['getname2']);
            $getdec2 =mysqli_real_escape_string($conn ,$_POST['getdec2']);

            $getnicval =mysqli_real_escape_string($conn ,$_POST['getnicval']);

            $date =date('Y-m-d');
            //$time =date('H:i:s',time());

            $createdate =$date;

            $queryin1 ="INSERT INTO  tempbill (bnic,bname,bdec,bprice,bcreatedate)  VALUES (?,?,?,?,?)";

            $stmt =mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$queryin1))
            {
               echo "SQL Error";
            }
            else
            {
                if($getname1!=''){
                  mysqli_stmt_bind_param($stmt,"sssss",$getnicval,$getname1,$getdec1,$getprice1,$createdate);
                  $resultin1 =  mysqli_stmt_execute($stmt);
                }
                if ($getname2!='') {
                  mysqli_stmt_bind_param($stmt,"sssss",$getnicval,$getname2,$getdec2,$getprice2,$createdate);
                  $resultin2 =  mysqli_stmt_execute($stmt);
                }

             }

          }

          // Discount Update  PHP code
          if(isset($_POST['getdiscount']))
          {
              $getdiscount =mysqli_real_escape_string($conn ,$_POST['getdiscount']);
              $getbookingid =mysqli_real_escape_string($conn ,$_POST['getbookingid']);

              $query ="UPDATE  bookinginfor  SET discount=? WHERE id=?;";

              $stmt =mysqli_stmt_init($conn);
              if(!mysqli_stmt_prepare($stmt,$query))
              {
                 echo "SQL Error";
              }
              else
              {
                  mysqli_stmt_bind_param($stmt,"ss",$getdiscount,$getbookingid);
                  $result =  mysqli_stmt_execute($stmt);
               }

          }


          //Cloase Booking  Update  PHP code
          if(isset($_POST['colsebid']))
          {
              $colsebid =mysqli_real_escape_string($conn ,$_POST['colsebid']);
              $totalbalance =mysqli_real_escape_string($conn ,$_POST['totalbalance']);

              $date =date('Y-m-d');
              //$time =date('H:i:s',time());

              $stabedate =$date;

              $query2="SELECT * FROM bookinginfor WHERE id='$colsebid'";
              $result2 =mysqli_query($conn,$query2);
              while($row2 = mysqli_fetch_array($result2))
              {
                $roomid =$row2["alocatedroom"];
              }

              $closebill ="1";
              $closebookigroom ="0";


              // Booking bill submit
              $query ="UPDATE  bookinginfor  SET billstatus=? ,billstaledate=?,ftootalprice=? WHERE id=?;";

              $stmt =mysqli_stmt_init($conn);
              if(!mysqli_stmt_prepare($stmt,$query))
              {
                 echo "SQL Error";
              }
              else
              {
                  mysqli_stmt_bind_param($stmt,"ssss",$closebill,$stabedate,$totalbalance,$colsebid);
                  $result =  mysqli_stmt_execute($stmt);
              }

              // Room bill submit
              $query ="UPDATE   roominfor  SET roomstatus=? WHERE id=?;";

              $stmt =mysqli_stmt_init($conn);
              if(!mysqli_stmt_prepare($stmt,$query))
              {
                 echo "SQL Error";
              }
              else
              {
                  mysqli_stmt_bind_param($stmt,"ss",$closebookigroom,$roomid);
                  $result =  mysqli_stmt_execute($stmt);
              }



          }
