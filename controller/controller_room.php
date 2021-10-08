<!-- nexgenITs HMS System All right reseverd.-->
<?php
      // Database Connection
      session_start();
      require '../include/config.php';

      // Room form submit btn insert details php code strat
      if(isset($_POST['room_btn_submit']))
      { 
        //  $roomid =mysqli_real_escape_string($conn ,$_POST['roomid']);
          $roomno =mysqli_real_escape_string($conn ,$_POST['roomno']);

          $roomtype =mysqli_real_escape_string($conn ,$_POST['roomtype']);
          $numbed =mysqli_real_escape_string($conn ,$_POST['numbed']);
          $roomprice =mysqli_real_escape_string($conn ,$_POST['roomprice']);

          $date =date('Y-m-d'); 
          $time =date('H:i:s',time());

          $createdate =$date." (".$time.")";

          $rommstatus ="0";

          $queryin ="INSERT INTO  roominfor (roomno,roomtype,numbed,roomprice,roomstatus,createdate)  VALUES (?,?,?,?,?,?)";
          w
          $stmt =mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt,$queryin))
          {
             echo "SQL Error";
          }
          else
          {
              mysqli_stmt_bind_param($stmt,"ssssss",$roomno,$roomtype,$numbed,$roomprice,$rommstatus,$createdate);
              $resultin =  mysqli_stmt_execute($stmt);
              if($resultin){
                echo "Successful Insert data";
              }
           }

        }



      // Logic Delete the diagnosis  use id start
       if (isset($_POST['delete_form']))
        {
            $id = $_POST['id'];
            $query ="DELETE FROM  roominfor WHERE id=?;";
            $stmt =mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$query))
            {
               echo "SQL Error";
            }
            else
            {
                mysqli_stmt_bind_param($stmt,"s",$id);
                $result =  mysqli_stmt_execute($stmt);
                if($result){
                  echo "Successful Remove data";
                }
            }
        }
        // Logic Delete the diagnosis  use id end




        // Room form update btn insert details php code strat
        if(isset($_POST['room_btn_edit']))
        {
            $roomid =mysqli_real_escape_string($conn ,$_POST['roomid']);
            $roomno =mysqli_real_escape_string($conn ,$_POST['roomno']);

            $roomtype =mysqli_real_escape_string($conn ,$_POST['roomtype']);
            $numbed =mysqli_real_escape_string($conn ,$_POST['numbed']);
            $roomprice =mysqli_real_escape_string($conn ,$_POST['roomprice']);

            $date =date('Y-m-d');
            $time =date('H:i:s',time());

            $updatedate =$date." (".$time.")";


            $query ="UPDATE  roominfor  SET roomno='$roomno',roomtype='$roomtype',numbed='$numbed',roomprice='$roomprice' ,lastupdate ='$updatedate' WHERE id='$roomid'";
            $result =mysqli_query($conn,$query);
            if($result){
                       echo "Successful Update data";
            }
            // $stmt =mysqli_stmt_init($conn);
            // if(!mysqli_stmt_prepare($stmt,$query))
            // {
            //    echo "SQL Error";
            // }
            // else
            // {
            //     mysqli_stmt_bind_param($stmt,"ssssss",$roomno,$roomtype,$numbed,$roomprice,$updatedate,$id);
            //     $result =  mysqli_stmt_execute($stmt);
            //     if($result){
            //
            //        echo "Successful Update data";
            //     //  echo $count;
            //     }
            //
            //  }

          }
