<!-- nexgenITs HMS System All right reseverd.-->
<!DOCTYPE html>
<html lang="en">
<?php
    // Database connection
    require '../include/config.php';
    // Check Login is correct
    include('../include/check.php');

    if(isset($_GET['selectid']))
    {
      $query = "SELECT * FROM foodinfor WHERE id ='".$_GET['selectid']."'";
      $result = mysqli_query($conn ,$query);
      while($row = mysqli_fetch_array($result))
      {
         $getname =$row["foodname"];
         $getimg =$row["foodview"];
         $getsmallsize =$row["smallsize"];
         $getmediumsize =$row["mediumsize"];
         $getlargesize =$row["largesize"];

      }
    }
?>
<head>

    <!-- Favicons -->
    <!-- <link rel="apple-touch-icon" href="../assets/img/apple-icon.png"> -->
    <link rel="icon" href="../images/logo.png">
    <title>
        Calypso Sunset 
    </title>
    <!-- head links -->
    <?php include('../include/head.php'); ?>

    <style>


</style>



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
                <li class="nav-item">
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
                <li class="nav-item ">
                    <a class="nav-link" href="room_management.php">
                        <i class="fa fa-bed"></i>
                        <p>Room management</p>
                    </a>
                </li>
                <li class="nav-item active">
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
                    <a class="nav-link" href="inventory.php">
                      <i class="fa fa-book"></i>
                        <p>Inventory</p>
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

                 <div class="div1" style="float: left; width: 75%; height: 905px; overflow-y: auto;">
                   <div class="" style="padding-right: 2%;">
                       <div class="card">
                           <div class="card-header card-header-tabs card-header-primary">
                               <div class="nav-tabs-navigation">
                                   <div class="nav-tabs-wrapper">
                                       <span class="nav-tabs-title">Breakfast Food:</span>

                                   </div>
                               </div>
                           </div>
                           <div class="" style="margin: 1%; height: 600px; overflow-y: auto;">
                             <?php
                               $defultval ="breakfast";
                               $query = "SELECT * FROM foodinfor WHERE category='$defultval'";
                               $result = mysqli_query($conn ,$query);
                               while($row = mysqli_fetch_array($result))
                               {
                                 ?>
                                 <div class="card-body-view" name="<?php echo $row['id']; ?>">
                                     <center><img src="../<?php echo $row['foodview'];?>" alt="Avatar" width="150" height="150" style="padding: 5%"></center>
                                     <div class="container" style="padding: 2px 37px;">

                                       <p style="padding: 3%; font-weight: 500;"><?php echo $row['foodname']; ?></p>
                                     </div>
                                 </div>

                                 <?php
                               }
                             ?>
                           </div>
                       </div>
                   </div>
                   <div class="defult"></div>
                   <div class="" style="padding-right: 2%;">
                       <div class="card">
                           <div class="card-header card-header-tabs card-header-primary">
                               <div class="nav-tabs-navigation">
                                   <div class="nav-tabs-wrapper">
                                       <span class="nav-tabs-title">Lunch Food:</span>

                                   </div>
                               </div>
                           </div>
                           <div class="" style="margin: 1%; height: 600px; overflow-y: auto;">
                             <?php
                               $defultval ="lunch";
                               $query = "SELECT * FROM foodinfor WHERE category='$defultval'";
                               $result = mysqli_query($conn ,$query);
                               while($row = mysqli_fetch_array($result))
                               {
                                 ?>
                                 <div class="card-body-view" name="<?php echo $row['id']; ?>">
                                     <center><img src="../<?php echo $row['foodview'];?>" alt="Avatar" width="150" height="150" style="padding: 5%"></center>
                                     <div class="container" style="padding: 2px 37px;">

                                       <p style="padding: 3%; font-weight: 500;"><?php echo $row['foodname']; ?></p>
                                     </div>
                                 </div>

                                 <?php
                               }
                             ?>
                           </div>
                       </div>
                   </div>
                   <div class="defult"></div>
                   <div class="" style="padding-right: 2%;">
                       <div class="card">
                           <div class="card-header card-header-tabs card-header-primary">
                               <div class="nav-tabs-navigation">
                                   <div class="nav-tabs-wrapper">
                                       <span class="nav-tabs-title">Dinner Food:</span>

                                   </div>
                               </div>
                           </div>
                           <div class="" style="margin: 1%; height: 600px; overflow-y: auto;">
                             <?php
                               $defultval ="dinner";
                               $query = "SELECT * FROM foodinfor WHERE category='$defultval'";
                               $result = mysqli_query($conn ,$query);
                               while($row = mysqli_fetch_array($result))
                               {
                                 ?>
                                 <div class="card-body-view" name="<?php echo $row['id']; ?>">
                                     <center><img src="../<?php echo $row['foodview'];?>" alt="Avatar" width="150" height="150" style="padding: 5%"></center>
                                     <div class="container" style="padding: 2px 37px;">
                                       <p style="padding: 3%; font-weight: 500;"><?php echo $row['foodname']; ?></p>
                                     </div>
                                 </div>

                                 <?php
                               }
                             ?>
                           </div>
                       </div>
                   </div>
                 </div>
                 <div class="div2" style="width: 25%; float: right;">
                   <div class="">
                       <div class="card">
                           <div class="card-header card-header-tabs card-header-primary">
                               <div class="nav-tabs-navigation">
                                   <div class="nav-tabs-wrapper">
                                       <span class="nav-tabs-title">Food Add to Bill</span>
                                   </div>
                               </div>
                           </div>
                           <div class="card-body">
                             <form id="addbillForm" method="post">
                               <input type="hidden" id="foodid" name="foodid" value="<?php if(isset($_GET['selectid'])){ echo $_GET['selectid'];} ?>">
                               <center><img src="../<?php if(isset($_GET['selectid'])){ echo $getimg;}else{ echo "images/681.jpg";} ?>" alt="Avatar"  width="150" height="150"></center>
                               <div class="form-group">
                                   <label class="bmd-label-floating">Food Name</label>
                                   <input type="text" class="form-control" id="foodname" value="<?php if(isset($_GET['selectid'])){ echo $getname;} ?>" disabled>
                                   <label id="foodname_error" class="error" for="foodname" style="display: none;  color: red; padding-top: 2%;">This field is required.</label>
                               </div>
                               <div class="form-group">
                                   <label class="bmd-label-floating">Food Size</label>
                                     <select  class="form-control" id="foodsize">
                                       <option value="">Select</option>
                                       <?php
                                           if($getsmallsize!='0.00'){
                                             echo '<option value="small">Small</option>';
                                           }
                                           if($getmediumsize!='0.00'){
                                             echo '<option value="medium">Medium</option>';
                                           }
                                           if($getlargesize!='0.00'){
                                             echo '<option value="large">Large</option>';
                                           }
                                        ?>
                                   </select>
                                   <label id="foodsize_error" class="error" for="foodsize" style="display: none;  color: red; padding-top: 2%;">This field is required.</label>
                               </div>
                               <div class="form-group">
                                   <label class="bmd-label-floating">Quantity</label>
                                   <input type="number" class="form-control" id="quantity" disabled>
                                   <label id="quantity_error" class="error" for="quantity" style="display: none;  color: red; padding-top: 2%;">This field is required.</label>
                               </div>
                               <div class="form-group">
                                   <label class="bmd-label-floating">Price</label>
                                   <input type="text" class="form-control" id="foodprice" disabled>
                                   <label id="foodprice_error" class="error" for="foodprice" style="display: none;  color: red; padding-top: 2%;">This field is required.</label>
                               </div>
                               <div class="form-group">
                                   <label class="bmd-label-floating">Room No</label>
                                   <!-- <input type="text" class="form-control" id="alocatedroom"> -->
                                   <select  class="form-control" id="roomno">
                                           <option value="">Select</option>
                                           <?php
                                           $tset ="1";
                                           $query ="SELECT * FROM roominfor WHERE roomstatus='$tset'";
                                           $result =mysqli_query($conn, $query);

                                           while($row = mysqli_fetch_array($result))
                                           {

                                               echo "<option value='".$row['id']."'>".$row['roomno']."</option>";

                                           }
                                          ?>
                                   </select>
                                   <label id="roomno_error" class="error" for="roomno" style="display: none;  color: red; padding-top: 2%;">This field is required.</label>
                               </div>
                               <div class="form-group">
                                   <label class="bmd-label-floating">Customer Name</label>
                                   <input type="hidden" class="form-control" id="cnic">
                                   <input type="text" class="form-control" id="cbname" disabled >
                               </div>
                               <div class="form-group">
                                  <button type="button" class="btn btn-primary" id="add_bill_btn" name="add_bill_btn" onclick="BillForm()">Add to Bill</button>
                             </div>
                            </form>
                            <div id="snackbar"><p id="msg_view"></p></div>
                       </div>
                   </div>
                 </div>
                </div>
            </div>
            <footer class="footer" style="display: inherit;">
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

    // Select Food javascript
    $(".card-body-view").click(function(){
       var id =$(this).attr('name');
       //alert(id);
       window.location = 'food_and_beverage.php?selectid=' + id;
   });

   // View Values
    $(document).ready(function(){

          $('#quantity').keyup(function(){

             var getquantity =$(this).val();
             var foodid =document.getElementById('foodid').value;
             var getval  =document.getElementById('foodsize').value;

             if(getquantity!=''){

               $('#quantity_error').css("display", "none");

               $.ajax({
                    url:"../controller/controller_food.php",
                    method:"POST",
                    data:{sizeval:getval,getid:foodid,getquantity:getquantity},
                    success:function(data){

                      $('#foodprice').val(data);

                    }
               });
             }
             else {
               $('#foodprice').val('');

             }
          });

          $('#roomno').change(function(){

             var getroomno =$(this).val();

             if(getroomno!=''){

               $('#roomno_error').css("display", "none");
               $.ajax({
                    url:"../controller/controller_food.php",
                    method:"POST",
                    data:{roomval:getroomno},
                    success:function(data){

                     var data =JSON.parse(data);
                     $('#cbname').val(data['cname']);
                     $('#cnic').val(data['cnic']);

                    }
               });
             }
             else {
               $('#cbname').val('');
             }
          });

          $('#foodsize').change(function(){

             var getsize =$(this).val();
             if(getsize!=""){

                $('#quantity').prop("disabled", false);
                $('#foodsize_error').css("display", "none");
             }
             else {
                 $('#quantity').prop("disabled", true);
             }
          });

   });

   // Room insert javascript
   function BillForm()
   {
     var foodid =document.getElementById('foodid').value;

     var foodname =document.getElementById('foodname').value;
     var foodnamecheck =document.getElementById('foodname').value;

     var foodsize =document.getElementById('foodsize').value;
     var foodsizecheck =document.getElementById('foodsize').value;

     var quantity =document.getElementById('quantity').value;
     var quantitycheck =document.getElementById('quantity').value;

     var foodprice =document.getElementById('foodprice').value;

     var roomno =document.getElementById('roomno').value;
     var roomnocheck =document.getElementById('roomno').value;

     var cnic =document.getElementById('cnic').value;

     var cbname =document.getElementById('cbname').value;

     var add_bill_btn =document.getElementById('add_bill_btn').name;


      if(foodnamecheck=='' && quantitycheck=='' && roomnocheck=='' && foodsizecheck==''){
        $('#foodname_error').css("display", "inherit");
        $('#foodname').addClass('error');

        $('#foodsize_error').css("display", "inherit");
        $('#foodsize').addClass('error');

        $('#quantity_error').css("display", "inherit");
        $('#quantity').addClass('error');

        $('#roomno_error').css("display", "inherit");
        $('#roomno').addClass('error');
      }
      else if(foodnamecheck==''){
        $('#foodname_error').css("display", "inherit");
        $('#foodname').addClass('error');
      }
      else if (foodsizecheck=='') {
        $('#foodsize_error').css("display", "inherit");
        $('#foodsize').addClass('error');
      }
      else if (quantitycheck=='') {
        $('#quantity_error').css("display", "inherit");
        $('#quantity').addClass('error');
      }
      else if (roomnocheck=='') {
        $('#roomno_error').css("display", "inherit");
        $('#roomno').addClass('error');
      }
      else {
        $.ajax({
             url:"../controller/controller_addbill.php",
             method:"POST",
             data:{foodid:foodid,foodname:foodname,foodsize:foodsize,quantity:quantity,foodprice:foodprice,roomno:roomno,cnic:cnic,cbname:cbname,add_bill_btn:add_bill_btn},
             success:function(data){

               //  $("#room_table").load(window.location.href + " #room_table");
               // //  $("#room_form").load(window.location.href + " #room_form");
                $('#addbillForm').trigger("reset");
               //
               //
                addbillmsg();
               $('#msg_view').html(data);

             }
        });
      }
    }

    // Message success view
    function addbillmsg() {
        var x = document.getElementById("snackbar");
        x.className = "show";
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);

        // Location refech
        setTimeout(function(){window.location = 'food_and_beverage.php'; },3000);
    }





</script>
<!--
 -->

</html>
