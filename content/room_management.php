<!-- nexgenITs HMS System All right reseverd.-->
<!DOCTYPE html>
<html lang="en">
<?php
    // Database connection
    require '../include/config.php';
    // Check Login is correct
    include('../include/check.php');

    if(isset($_GET['prop_id']))
    {
      $query = "SELECT * FROM roominfor";
      $result = mysqli_query($conn ,$query);
      while($row = mysqli_fetch_array($result))
      {
         $roomid =$row["id"];
         $roomno =$row["roomno"];
         $roomtype =$row["roomtype"];
         $numbed =$row["numbed"];
         $roomprice =$row["roomprice"];
      }
    }
?>
<head>

    <!-- Favicons -->
    <!-- <link rel="apple-touch-icon" href="../assets/img/apple-icon.png"> -->
    <link rel="icon" href="../images/logo.png">
    <title>
        Kandy Rivers Edge
    </title>
    <!-- head links -->
    <?php include('../include/head.php'); ?>

</head>

<body class="">
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
              <a href="home.php" class="simple-text logo-normal">
              <img src="../images/logo.png" alt="" style="width: 80%;">
              </a>
            </div>
            <!-- nav bar  -->
            <div class="sidebar-wrapper">
              <ul class="nav">
                <li class="nav-item ">
                    <a class="nav-link" href="home.php">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="bill_and_payment.php">
                        <i class="material-icons">content_copy</i>
                        <p>Bill and payment</p>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="room_management.php">
                        <i class="fa fa-bed"></i>
                        <p>Room management</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="food_and_beverage.php">
                        <i class="fa fa-cutlery"></i>
                        <p>Food and beverage</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="booking.php">
                        <i class="fa fa-users"></i>
                        <p>Booking</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="settings.php">
                         <i class="fa fa-cog"></i>
                        <p>Settings</p>
                    </a>
                </li>
              </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <?php include('../include/navhead.php'); ?>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Room management</h4>
                                    <p class="card-category">Information</p>
                                </div>
                                <div class="card-body">
                                    <form id="room_form">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Room No <span style="color: red;">*<span></label>
                                                    <input type="text" class="form-control" id="roomno" value="<?php if(isset($roomno)){ echo $roomno;} ?>">
                                                    <input type="hidden" class="form-control" id="roomid" value="<?php if(isset($roomid)){ echo $roomid;} ?>">
                                                    <label id="roomno_error" class="error" for="roomno" style="display: none;  color: red; padding-top: 2%;">This field is required.</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Room Type <span style="color: red;">*<span></label>
                                                    <input type="text" class="form-control" id="roomtype" value="<?php if(isset($roomtype)){ echo $roomtype;} ?>">
                                                    <label id="roomtype_error" class="error" for="roomtype" style="display: none;  color: red; padding-top: 2%;">This field is required.</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Number of bed <span style="color: red;">*<span></label>
                                                    <input type="number" class="form-control" id="numbed" value="<?php if(isset($numbed)){ echo $numbed;} ?>">
                                                    <label id="numbed_error" class="error" for="numbed" style="display: none;  color: red; padding-top: 2%;">This field is required.</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Room Price <span style="color: red;">*<span></label>
                                                    <input type="number" class="form-control" id="roomprice" value="<?php if(isset($roomprice)){ echo $roomprice;} ?>">
                                                    <label id="roomprice_error" class="error" for="roomprice" style="display: none;  color: red; padding-top: 2%;">This field is required.</label>
                                                </div>
                                            </div>
                                        </div>
                                           <button type="button" class="btn btn-primary pull-right" onclick="window.location='http://localhost:8888/HMS/content/room_management.php'">Clear</button>
                                        <?php if (isset($_GET['prop_id'])): ?>
                                             <button type="button" class="btn btn-primary pull-right" id="room_btn_edit" name="room_btn_edit" onclick="roomFormedit()">Update Data</button>
                                        <?php else: ?>
                                             <button type="button" class="btn btn-primary pull-right" id="room_btn_submit" name="room_btn_submit" onclick="roomFormsubmit()">Submit Data</button>
                                        <?php endif; ?>

                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="snackbar"><p id="msg_view"></p></div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title ">Simple Table</h4>
                                    <p class="card-category"> Here is a subtitle for this table</p>
                                </div>
                                <div class="card-body">
                                   <?php
                                       $query = "SELECT * FROM roominfor";
                                       $result = mysqli_query($conn ,$query);
                                    ?>
                                    <div class="table-responsive" id="room_table">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                    Room No
                                                </th>
                                                <th>
                                                    Room Type
                                                </th>
                                                <th>
                                                    Number of bed
                                                </th>
                                                <th>
                                                    Room Price
                                                </th>
                                                <th>

                                                </th>
                                                <th>

                                                </th>
                                            </thead>
                                            <tbody>
                                                <?php
                                                while($row = mysqli_fetch_array($result))
                                                   {
                                                    echo '
                                                    <tr>
                                                     <td>'.$row["roomno"].'</td>
                                                     <td>'.$row["roomtype"].'</td>
                                                     <td>'.$row["numbed"].'</td>
                                                     <td>'.$row["roomprice"].'</td>
                                                     <td width="5%"><button type="button" id="delete_form" name="delete_form" onclick="roomremoveconf(event ,'.$row["id"].')" class="btn btn-primary edit_data" style="margin: 0px; height: 25px; width: 70px; color: white; border-color: #2CA8FF; background-color: #2CA8FF; font-size: 12px;  padding: 4px 10px; margin-top: 0px;">Delete</button></td>
                                                     '; ?>
                                                     <td width="5%"><button type="button" id="edit_form" name="edit_form" onclick="window.location='http://localhost:8888/HMS/content/room_management.php?prop_id=<?php echo $row["id"];  ?>';" class="btn btn-primary edit_data" style="margin: 0px; height: 25px; width: 70px; color: white; border-color: #2CA8FF; background-color: #2CA8FF; font-size: 12px;  padding: 4px 10px; margin-top: 0px;">Edit</button></td>
                                                     <?php
                                                     echo '
                                                    </tr>
                                                      ';
                                                    $i++;
                                                   }
                                                 ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-4">
                            <div class="card card-profile">
                                <div class="card-avatar">
                                    <a href="#pablo">
                                        <img class="img" src="../assets/img/faces/marc.jpg" />
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                                    <h4 class="card-title">Alec Thompson</h4>
                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                    </p>
                                    <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <footer class="footer ">
                <div class="container-fluid" style="display: inline-grid;">
                    <!-- footer company review -->
                    <?php include('../include/footerc.php'); ?>
                </div>
            </footer>
        </div>
    </div>
</body>
<!-- Modal -->
<?php include('../include/modal.php'); ?>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/bootstrap-material-design.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!-- Library for adding dinamically elements -->
<script src="../assets/js/plugins/arrive.min.js" type="text/javascript"></script>
<!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Material Dashboard Core initialisations of plugins and Bootstrap Material Design Library -->
<script src="../assets/js/material-dashboard.js?v=2.0.0"></script>
<!-- demo init -->
<script src="../assets/js/plugins/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        //init wizard

        // demo.initMaterialWizard();

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.initCharts();

    });

    $(document).ready(function(){

           $('#roomno').change(function(){

              var val =$(this).val();
              if(val!=''){
                  $('#roomno_error').css("display", "none");
              }
           });
           $('#roomtype').change(function(){

              var val1 =$(this).val();
              if(val1!=''){
                  $('#roomtype_error').css("display", "none");
              }
           });
           $('#numbed').change(function(){

              var val2 =$(this).val();
              if(val2!=''){
                  $('#numbed_error').css("display", "none");
              }
           });
           $('#roomprice').change(function(){

              var val3 =$(this).val();
              if(val3!=''){
                  $('#roomprice_error').css("display", "none");
              }
           });
    });

    // Room insert javascript
    function roomFormsubmit()
    {
      var roomno =document.getElementById('roomno').value;
      var roomnocheck =document.getElementById('roomno').value;

      var roomtype =document.getElementById('roomtype').value;
      var roomtypecheck =document.getElementById('roomtype').value;

      var numbed =document.getElementById('numbed').value;
      var numbedcheck =document.getElementById('numbed').value;

      var roomprice =document.getElementById('roomprice').value;
      var roompricecheck =document.getElementById('roomprice').value;


      var room_btn_submit =document.getElementById('room_btn_submit').name;

       if(roomnocheck=='' && roomtypecheck=='' && numbedcheck=='' && roompricecheck==''){
         $('#roomno_error').css("display", "inherit");
         $('#roomno').addClass('error');

         $('#roomtype_error').css("display", "inherit");
         $('#roomtype').addClass('error');

         $('#numbed_error').css("display", "inherit");
         $('#numbed').addClass('error');

         $('#roomprice_error').css("display", "inherit");
         $('#roomprice').addClass('error');
       }
       else if(roomnocheck==''){
         $('#roomno_error').css("display", "inherit");
         $('#roomno').addClass('error');
       }
       else if (roomtypecheck=='') {
         $('#roomtype_error').css("display", "inherit");
         $('#roomtype').addClass('error');
       }
       else if (numbedcheck=='') {
         $('#numbed_error').css("display", "inherit");
         $('#numbed').addClass('error');
       }
       else if (roompricecheck=='') {
         $('#roomprice_error').css("display", "inherit");
         $('#roomprice').addClass('error');
       }
       else {
         $.ajax({
              url:"../controller/controller_room.php",
              method:"POST",
              data:{roomno:roomno,roomtype:roomtype,numbed:numbed,roomprice:roomprice,room_btn_submit:room_btn_submit},
              success:function(data){

                 $("#room_table").load(window.location.href + " #room_table");
                //  $("#room_form").load(window.location.href + " #room_form");
                $('#room_form').trigger("reset");


                 roommsg();
                $('#msg_view').html(data);

              }
         });
       }
     }

     // Room update From

     function roomFormedit()
     {

       var roomid =document.getElementById('roomid').value;

       var roomno =document.getElementById('roomno').value;
       var roomnocheck =document.getElementById('roomno').value;

       var roomtype =document.getElementById('roomtype').value;
       var roomtypecheck =document.getElementById('roomtype').value;

       var numbed =document.getElementById('numbed').value;
       var numbedcheck =document.getElementById('numbed').value;

       var roomprice =document.getElementById('roomprice').value;
       var roompricecheck =document.getElementById('roomprice').value;


       var room_btn_edit =document.getElementById('room_btn_edit').name;

        if(roomnocheck=='' && roomtypecheck=='' && numbedcheck=='' && roompricecheck==''){
          $('#roomno_error').css("display", "inherit");
          $('#roomno').addClass('error');

          $('#roomtype_error').css("display", "inherit");
          $('#roomtype').addClass('error');

          $('#numbed_error').css("display", "inherit");
          $('#numbed').addClass('error');

          $('#roomprice_error').css("display", "inherit");
          $('#roomprice').addClass('error');
        }
        else if(roomnocheck==''){
          $('#roomno_error').css("display", "inherit");
          $('#roomno').addClass('error');
        }
        else if (roomtypecheck=='') {
          $('#roomtype_error').css("display", "inherit");
          $('#roomtype').addClass('error');
        }
        else if (numbedcheck=='') {
          $('#numbed_error').css("display", "inherit");
          $('#numbed').addClass('error');
        }
        else if (roompricecheck=='') {
          $('#roomprice_error').css("display", "inherit");
          $('#roomprice').addClass('error');
        }
        else {
          $.ajax({
               url:"../controller/controller_room.php",
               method:"POST",
               data:{roomid:roomid,roomno:roomno,roomtype:roomtype,numbed:numbed,roomprice:roomprice,room_btn_edit:room_btn_edit},
               success:function(data){

                  $("#room_table").load(window.location.href + " #room_table");
                //  $('#room_form').trigger("reset");
                  $("#room_form").load(window.location.href + " #room_form");

                  // $('#room_form')[0].reset();

                  roommsg();
                  $('#msg_view').html(data);

               }
          });
        }
      }

     // delete data  javascript code
      function deleteroom(id)
      {

        var delete_form =document.getElementById('delete_form').name;

        $.ajax({
             url:"../controller/controller_room.php",
             method:"POST",
             data:{id:id,delete_form:delete_form},
             success:function(data){

              $("#room_table").load(window.location.href + " #room_table");
              // // $('#diagnosis_form').trigger("reset");

              // Message success call function
               roommsg();
               $('#msg_view').html(data);

             }
        });
      }

     // Message success view
      function roommsg() {
          var x = document.getElementById("snackbar");
          x.className = "show";
          setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
      }

      // Delete Conformation function
      function roomremoveconf(e,id) {
           var answer = confirm("Are you sure you want to permanently delete this record?")
    		if (!answer){
    			e.preventDefault();
    			return false;
    		}
        else {
          deleteroom(id);
        }
      }




</script>
<!--
 -->

</html>
