<!-- nexgenITs HMS System All right reseverd.-->
<?php
      // Database Connection
      session_start();
      require '../include/config.php';

      // Room form submit btn insert details php code strat
      if(isset($_POST['room_btn_submit']))
      { 
        //  $roomid =mysqli_real_escape_string($conn ,$_POST['roomid']);
          $lq_name =mysqli_real_escape_string($conn ,$_POST['roomno']);
          $qty =mysqli_real_escape_string($conn ,$_POST['roomtype']);
          $pur_price =mysqli_real_escape_string($conn ,$_POST['numbed']);
          $selling_price =mysqli_real_escape_string($conn ,$_POST['roomprice']);

          $queryin ="INSERT INTO  bar_inventory (lq_name,qty,pur_price,selling_price)  VALUES (?,?,?,?)";
          
          $stmt =mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt,$queryin))
          {
             echo "SQL Error";
          }
          else
          {
              mysqli_stmt_bind_param($stmt,"ssss",$lq_name,$qty,$pur_price,$selling_price);
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
            $query ="DELETE FROM bar_inventory WHERE id=?;";
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
            $barItemId =mysqli_real_escape_string($conn ,$_POST['roomid']);
            $lq_name =mysqli_real_escape_string($conn ,$_POST['roomno']);
            $qty =mysqli_real_escape_string($conn ,$_POST['roomtype']);
            $pur_price =mysqli_real_escape_string($conn ,$_POST['numbed']);
            $selling_price =mysqli_real_escape_string($conn ,$_POST['roomprice']);


            $query ="UPDATE  bar_inventory  SET lq_name='$lq_name',qty='$qty',pur_price='$pur_price',selling_price	='$selling_price' WHERE id='$barItemId'";
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
