
<?php
      // Database Connection
      session_start();
      require '../include/config.php';

      // if(isset($_POST['sizeval']))
      if(isset($_POST['getquantity']))
      {
          $sizeval =mysqli_real_escape_string($conn ,$_POST['sizeval']);
          $getid =mysqli_real_escape_string($conn ,$_POST['getid']);
          $getquantity =mysqli_real_escape_string($conn ,$_POST['getquantity']);

          if($sizeval=="small"){
              $query1 ="SELECT * FROM foodinfor WHERE id='$getid'";
              $result1 =mysqli_query($conn,$query1);
              while($row1 = mysqli_fetch_array($result1))
              {
                    $sprice = $row1['smallsize'];
                    echo $sprice*$getquantity;
              }
          }
          if($sizeval=="medium"){
              $query1 ="SELECT * FROM foodinfor WHERE id='$getid' ";
              $result1 =mysqli_query($conn,$query1);
              while($row1 = mysqli_fetch_array($result1))
              {
                    $mprice = $row1['mediumsize'];
                    echo $mprice*$getquantity;
              }
          }
          if($sizeval=="large"){
              $query1 ="SELECT * FROM foodinfor WHERE id='$getid' ";
              $result1 =mysqli_query($conn,$query1);
              while($row1 = mysqli_fetch_array($result1))
              {
                    $lprice = $row1['largesize'];
                    echo $lprice*$getquantity;
              }
          }

      }

       // if(isset($_POST['roomval']))
       if(isset($_POST['roomval']))
       {
           $roomval =mysqli_real_escape_string($conn ,$_POST['roomval']);

           $query_obj ="SELECT * FROM bookinginfor WHERE alocatedroom='$roomval'";
           $result_obj =mysqli_query($conn,$query_obj);

           $object_obj =mysqli_fetch_object($result_obj);
           echo json_encode($object_obj);

        }

      // image upload to the  investigationsinfor table and image folder
      if($_FILES["file"]["name"] != '')
      {
         $test = explode('.', $_FILES["file"]["name"]);
         $ext = end($test);
         $name = rand(100, 999) . '.' . $ext;

         $location = '../images/' . $name;
         $location_path = 'images/' . $name;
         move_uploaded_file($_FILES["file"]["tmp_name"], $location);
         echo '<img src="'.$location.'" height="150" width="225" class="img-thumbnail"/>';
         $_SESSION['lc'] =$location_path;

         // image  upload code end
      }

      // Room form submit btn insert details php code strat
      if(isset($_POST['food_btn_submit']))
      {

          $foodcode =mysqli_real_escape_string($conn ,$_POST['foodcode']);

          $category =mysqli_real_escape_string($conn ,$_POST['category']);
          $foodname =mysqli_real_escape_string($conn ,$_POST['foodname']);
          $des =mysqli_real_escape_string($conn ,$_POST['des']);
          $foodsmall =mysqli_real_escape_string($conn ,$_POST['foodsmall']);
          $foodmedium =mysqli_real_escape_string($conn ,$_POST['foodmedium']);
          $foodlarge =mysqli_real_escape_string($conn ,$_POST['foodlarge']);

          $date =date('Y-m-d');
          $time =date('H:i:s',time());

          if(isset($_SESSION['lc'])){

              $img =$_SESSION['lc'];
            }
            else {
              $img ="images/916.png";
            }

          $createdate =$date." (".$time.")";


          $queryin ="INSERT INTO  foodinfor (foodcode,foodname,description,foodview,category,smallsize,mediumsize,largesize,createdate)  VALUES (?,?,?,?,?,?,?,?,?)";

          $stmt =mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt,$queryin))
          {
             echo "SQL Error";
          }
          else
          {
              mysqli_stmt_bind_param($stmt,"sssssssss",$foodcode,$foodname,$des,$img,$category,$foodsmall,$foodmedium,$foodlarge,$createdate);
              $resultin =  mysqli_stmt_execute($stmt);
              if($resultin){

                $_SESSION['lc']=null;
                echo "Successful Insert data";
              }
           }

        }



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
