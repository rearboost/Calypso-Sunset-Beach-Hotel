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
      $query = "SELECT * FROM  bookinginfor WHERE id ='".$_GET['selectid']."'";
      $result = mysqli_query($conn ,$query);
      while($row = mysqli_fetch_array($result))
      {
         $roomprice =$row["roomprice"];
         $discount =$row["discount"];
         $cnic =$row["cnic"];
         $pcname	 =$row["cname"];

         $arrivaldate =strtotime($row["arrivaldate"]);
         $departuredate =strtotime($row["departuredate"]);
         $todate =strtotime(date("Y-m-d"));
         $count1 =$todate-$departuredate;
         $count1 =$count1/86400;

         if($count1==0){

            $count =$departuredate-$arrivaldate;
            $count =$count/86400;
            if($count==0){
              $count =1;
            }
         }
         if($count1>0) {

           $count =$todate-$arrivaldate;
           $count =$count/86400;
         }
         if($count1<0) {

           $count =$todate-$arrivaldate;
           $count =$count/86400;
           if($count==0){
             $count =1;
           }
         }

         $roomprice =$roomprice*$count;

         $ballance =$roomprice-$discount;
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
                <li class="nav-item active">
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
                <li class="nav-item">
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
                <li class="nav-item">
                    <a class="nav-link" href="inventory_management.php">
                    <i class="material-icons">article</i>
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


                 <div class="div1" style="float: left; width: 75%; height: 780px; overflow-y: auto;">
                   <div class="" style="padding-right: 2%;">
                       <div class="card">
                           <div class="card-header card-header-tabs card-header-primary">
                               <div class="nav-tabs-navigation">
                                   <div class="nav-tabs-wrapper">
                                       <span class="nav-tabs-title">Bill</span>
                                   </div>
                               </div>
                           </div>
                           <div class="" style="margin: 4%; height: 780px;">
                              <span>Billing Information</span>
                                 <div class="col-md-6" style="margin-top: 3%;">
                                     <div class="form-group">
                                         <label class="" style="top: -25%;">Room Price <span>(LKR)</span></label>
                                         <input type="text" class="form-control" id="roomprice" value="<?php if(isset($_GET['selectid'])){ echo $roomprice;} ?>" disabled>
                                         <!-- <label id="roomprice_error" class="error" for="roomprice" style="display: none;  color: red; padding-top: 2%;">This field is required.</label> -->
                                     </div>
                                 </div>
                                 <div class="col-md-6" style="margin-bottom: 4%;">
                                     <div class="form-group">
                                         <label class="bmd-label-floating">Discount</label>
                                         <input type="number" class="form-control" id="discount" value="<?php if(isset($_GET['selectid'])){ echo $discount;} ?>">
                                         <input type="=hidden"  id="bookingid" class="form-control" value="<?php if(isset($_GET['selectid'])){ echo $_GET['selectid'];} ?>" style="display: none;">
                                     </div>
                                 </div>
                                  <?php if (isset($_GET['selectid'])): ?>
                                 <span>Fool Information</span>
                                 <div class="table-responsive" id="bill_food_table" style="margin-top: 2%;">
                                     <table class="table">
                                       <?php
                                           $queryfood = "SELECT * FROM addbillinfor WHERE cbnic='$cnic'";
                                           $resultfood = mysqli_query($conn ,$queryfood);
                                        ?>
                                         <thead class=" text-primary">
                                             <th>
                                                 Food No
                                             </th>
                                             <th>
                                                 Food Name
                                             </th>
                                             <th>
                                                 Size
                                             </th>
                                             <th>
                                                 Quantity
                                             </th>
                                             <th>
                                                 Price (LKR)
                                             </th>
                                         </thead>
                                         <tbody>
                                           <?php
                                           $no =1;
                                           while($rowfood = mysqli_fetch_array($resultfood))
                                              {
                                               echo '
                                               <tr>';
                                               ?>
                                                <td><?php echo $no; ?></td>
                                               <?php
                                               echo '
                                                <td>'.$rowfood["foodname"].'</td>
                                                <td>'.$rowfood["foodsize"].'</td>
                                                <td>'.$rowfood["foodquantity"].'</td>
                                                <td>'.$rowfood["tootalprice"].'</td>
                                               </tr>
                                                 ';
                                               $no++;
                                               $ballance =$ballance +$rowfood["tootalprice"];
                                              }
                                            ?>
                                         </tbody>
                                     </table>
                                   </div>
                                <?php else: ?>

                                <?php endif ?>

                                <?php if (isset($_GET['selectid'])): ?>
                                <span>Other Charges</span>
                                <form class="" method="post">
                                <div class="row" style="margin-top: 4%;">
                                    <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="" style="top: -25%;">Name</label>
                                          <input type="=hidden" class="form-control" id="nicval" value="<?php if(isset($_GET['selectid'])){ echo $_GET['selectid'];} ?>" style="display: none;">
                                          <input type="text" class="form-control" id="name1" >
                                          <!-- <label id="roomprice_error" class="error" for="roomprice" style="display: none;  color: red; padding-top: 2%;">This field is required.</label> -->
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="" style="top: -25%;">Description</label>
                                          <input type="text" class="form-control" id="dec1" >
                                          <!-- <label id="roomprice_error" class="error" for="roomprice" style="display: none;  color: red; padding-top: 2%;">This field is required.</label> -->
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="" style="top: -25%;">Price<span>(LKR)</span></label>
                                          <input type="number" class="form-control" id="price1" >
                                          <label id="price1_error" class="error" for="price1" style="display: none;  color: red; padding-top: 15%;">This field is required.</label>
                                      </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 4%;">
                                   <div class="col-md-4">
                                     <div class="form-group">
                                         <label class="" style="top: -25%;">Name</label>
                                         <input type="text" class="form-control" id="name2" >
                                         <!-- <label id="roomprice_error" class="error" for="roomprice" style="display: none;  color: red; padding-top: 2%;">This field is required.</label> -->
                                     </div>
                                   </div>
                                   <div class="col-md-4">
                                     <div class="form-group">
                                         <label class="" style="top: -25%;">Description</label>
                                         <input type="text" class="form-control" id="dec2" >
                                         <!-- <label id="roomprice_error" class="error" for="roomprice" style="display: none;  color: red; padding-top: 2%;">This field is required.</label> -->
                                     </div>
                                   </div>
                                   <div class="col-md-4">
                                     <div class="form-group">
                                         <label class="" style="top: -25%;">Price<span>(LKR)</span></label>
                                         <input type="number" class="form-control" id="price2" >
                                         <label id="price2_error" class="error" for="price2" style="display: none;  color: red; padding-top: 15%;">This field is required.</label>
                                   </div>
                                </div>
                                <input type="button" value="Proceed" id="procedure_btn" name="procedure_btn" onclick="OtherForm()" class="btn btn-primary btn-sm"  style="background: #56b8fb; color: white; border-color: #56b8fb;"/>
                              </form>
                              <?php else: ?>

                              <?php endif ?>
                           <!-- <input type="button" value="Print" onclick="javascript:printDiv('printablediv')" class="btn btn-primary btn-sm" style="background: #56b8fb; color: white; border-color: #56b8fb;"/> -->
                         </div>
                       </div>
                   </div>
                   <div class="card" style="margin-top: 10%;">
                       <div class="card-header card-header-primary">
                           <h4 class="card-title ">Bill Table</h4>
                           <p class="card-category">Past Bill Information</p>
                       </div>
                       <div class="card-body">
                          <?php
                              $combillstatus ="1";
                              $query = "SELECT * FROM bookinginfor WHERE billstatus='$combillstatus'";
                              $result = mysqli_query($conn ,$query);
                           ?>
                           <div class="table-responsive" id="cbill_table">
                               <table class="table">
                                   <thead class=" text-primary">
                                       <th>
                                           Room No
                                       </th>
                                       <th>
                                           Customer Name
                                       </th>
                                       <th>
                                          No of Dates
                                       </th>
                                       <th>
                                           Price
                                       </th>
                                   </thead>
                                   <tbody>
                                       <?php
                                       while($row = mysqli_fetch_array($result))
                                          {
                                           echo '
                                           <tr>
                                            ';

                                            $query1 ="SELECT * FROM roominfor WHERE id='".$row["alocatedroom"]."'";
                                            $result1 =mysqli_query($conn,$query1);
                                            while($ro = mysqli_fetch_array($result1))
                                            {
                                               $val= $ro['roomno'];
                                            }
                                            ?>
                                            <td><?php echo $val ?></td>
                                           <?php
                                            echo '
                                            <td>'.$row["cname"].'</td>';

                                           // $date1 =strtotime($row["arrivaldate"]);
                                             $arr =strtotime($row["arrivaldate"]);
                                             $dep =strtotime($row["departuredate"]);
                                             $to =strtotime(date("Y-m-d"));
                                             $cou1 =$to-$dep;
                                             $cou1 =$cou1/86400;

                                             if($cou1==0){

                                                // $cou =$dep-$arr;
                                                // $cou =$cou/86400;
                                                // if($cou==0){
                                                  $cou =1;
                                                // }
                                             }
                                             elseif($cou1>0) {

                                               $cou =$to-$arr;
                                               $cou =$cou/86400;
                                             }
                                             elseif($cou1<0) {

                                               $cou =$to-$arr;
                                               $cou =$cou/86400;
                                             }
                                            echo '<td>'.$cou.'</td>';
                                            echo '<td>'.$row["ftootalprice"].'</td>';
                                         echo '</tr>
                                             '  ;
                                           $i++;
                                          }
                                        ?>
                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>




                 </div>
                 <!-- <div class="" style="margin-top: 10%;">
                     <div class="card">
                         <div class="card-header card-header-primary">
                             <h4 class="card-title ">Booking Table</h4>
                             <p class="card-category"> Here is a subtitle for this table</p>
                         </div>
                         <div class="card-body">
                            <?php
                                $query = "SELECT * FROM bookinginfor";
                                $result = mysqli_query($conn ,$query);
                             ?>
                             <div class="table-responsive" id="room_table">
                                 <table class="table">
                                     <thead class=" text-primary">
                                         <th>
                                             Booking No
                                         </th>
                                         <th>
                                             Alocated Room
                                         </th>
                                         <th>
                                             Customer Name
                                         </th>
                                         <th>
                                            Contact Number
                                         </th>
                                         <th>
                                             Arrival Date
                                         </th>
                                         <th>
                                             Departure Date
                                         </th>
                                         <th>
                                             Days
                                         </th>

                                     </thead>
                                     <tbody>
                                         <?php
                                         while($row = mysqli_fetch_array($result))
                                            {
                                             echo '
                                             <tr>
                                              <td>'.$row["bookingno"].'</td>';

                                              $query1 ="SELECT * FROM roominfor WHERE id='".$row["alocatedroom"]."'";
                                              $result1 =mysqli_query($conn,$query1);
                                              while($ro = mysqli_fetch_array($result1))
                                              {
                                                 $val= $ro['roomno'];
                                              }
                                              ?>
                                              <td><?php echo $val ?></td>
                                             <?php
                                              echo '
                                              <td>'.$row["cname"].'</td>
                                              <td>'.$row["connum"].'</td>
                                              <td>'.$row["arrivaldate"].'</td>
                                              <td>'.$row["departuredate"].'</td>  ';
                                             // $date1 =strtotime($row["arrivaldate"]);
                                              $date1 =date("Y-m-d");
                                              $date1 =strtotime($date1);
                                              $date2 =strtotime($row["departuredate"]);
                                              $date =$date2-$date1;
                                              $date =$date/86400;
                                              echo '<td>'.$date.'</td>';
                                           echo '</tr>
                                               '  ;
                                             $i++;
                                            }
                                          ?>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div> -->
                 </div>
                 <!-- RIGHT Side Code -->
                 <div class="div2" style="width: 25%; float: right;">
                       <div class="card">
                           <div class="card-header card-header-tabs card-header-primary">
                               <div class="nav-tabs-navigation">
                                   <div class="nav-tabs-wrapper">
                                       <span class="nav-tabs-title">Bill Payment</span>
                                   </div>
                               </div>
                           </div>
                           <div class="card-body">
                             <?php
                                 $staus ="0";
                                 $query = "SELECT * FROM bookinginfor WHERE billstatus='$staus'";
                                 $result = mysqli_query($conn ,$query);
                              ?>
                              <div class="table-responsive" id="room_table">
                                  <table class="table">
                                      <thead class=" text-primary">
                                          <th>
                                              Room No
                                          </th>
                                          <th>
                                              Customer Name
                                          </th>
                                      </thead>
                                      <tbody>

                                          <?php
                                          while($row = mysqli_fetch_array($result))
                                             {
                                               echo '<tr onclick="window.location=bill_and_payment.php?selectid='.$row["id"].'">'  ;
                                               $date1 =strtotime($row["arrivaldate"]);
                                               $date1 =date("Y-m-d");
                                               $date1 =strtotime($date1);
                                               $date2 =strtotime($row["departuredate"]);
                                               $date =$date2-$date1;
                                               $date =$date/86400;
                                                // echo '<td>'.$date.'</td>';
                                               // if($date<=0){
                                                 $query1 ="SELECT * FROM roominfor WHERE id='".$row["alocatedroom"]."'";
                                                 $result1 =mysqli_query($conn,$query1);
                                                 while($ro = mysqli_fetch_array($result1))
                                                 {
                                                    $val= $ro['roomno'];
                                                 }
                                                 ?>
                                                 <?php if ($date<0): ?>
                                                     <td style="font-weight: 500; background-color: #ff7979;"><a href="bill_and_payment.php?selectid=<?php echo $row["id"]; ?>"><?php echo $val ?></a></td>
                                                  <?php elseif($date=="0"): ?>
                                                     <td style="font-weight: 500; background-color: #5aca3e;"><a href="bill_and_payment.php?selectid=<?php echo $row["id"]; ?>"><?php echo $val ?></a></td>
                                                  <?php else: ?>
                                                     <td style="font-weight: 500; background-color: #7e7cf7;"><a href="bill_and_payment.php?selectid=<?php echo $row["id"]; ?>"><?php echo $val ?></a></td>
                                                  <?php endif ?>

                                                <?php
                                                 if($date<0){
                                                   echo '
                                                   <td style="font-weight: 500; background-color: #ff7979;"><a href="bill_and_payment.php?selectid='.$row["id"].'">'.$row["cname"].'</a></td>
                                                   ';
                                                 }
                                                 elseif ($date=="0") {
                                                   echo '
                                                   <td style="font-weight: 500; background-color: #5aca3e;"><a href="bill_and_payment.php?selectid='.$row["id"].'">'.$row["cname"].'</a></td>
                                                   ';
                                                 }
                                                 else {
                                                   echo '
                                                   <td style="font-weight: 500; background-color: #7e7cf7;"><a href="bill_and_payment.php?selectid='.$row["id"].'">'.$row["cname"].'</a></td>
                                                   ';
                                                 }
                                               // }

                                            echo '</tr>
                                                '  ;
                                              $i++;
                                             }
                                           ?>

                                      </tbody>
                                  </table>

                            <!-- <div id="snackbar"><p id="msg_view"></p></div> -->
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

   // Submit Discount Values
    $(document).ready(function(){

          $('#discount').keyup(function(){

             var getdiscount =$(this).val();
             var getbookingid  =document.getElementById('bookingid').value;

               $.ajax({
                    url:"../controller/controller_addbill.php",
                    method:"POST",
                    data:{getbookingid:getbookingid,getdiscount:getdiscount},
                    success:function(data){
                      //$('#foodprice').val(data);
                    }
               });

          });

          $('#price1').keyup(function(){

             var price1val =$(this).val();

             if(price1val!=''){
               $('#price1_error').css("display", "none");
             }

          });

          $('#price2').keyup(function(){

             var price2val =$(this).val();

             if(price2val!=''){
               $('#price2_error').css("display", "none");
             }

          });


   });

   // Other changing insert javascript
   function OtherForm()
   {
     var val =false;
     var getprice1  =document.getElementById('price1').value;
     var getprice1check  =document.getElementById('price1').value;

     var getname1  =document.getElementById('name1').value;
     var getname1check  =document.getElementById('name1').value;

     var getdec1 =document.getElementById('dec1').value;

     var getprice2  =document.getElementById('price2').value;
     var getprice2check  =document.getElementById('price2').value;

     var getname2  =document.getElementById('name2').value;
     var getname2check  =document.getElementById('name2').value;

     var getdec2 =document.getElementById('dec2').value;

     var getnicval =document.getElementById('nicval').value;

     var procedure_btn =document.getElementById('procedure_btn').name;


      if(getname1check!=''){

        if(getprice1check==''){
          $('#price1_error').css("display", "inherit");
        }
        else{
          if(getname2check!=''){

            if(getprice2check==''){

              $('#price2_error').css("display", "inherit");
            }
            else {
              othersubmit();
              var val =true;
            }
          }
          else {
            othersubmit();
          }
        }
      }

    if(getname2check!='' && val ==false){

      if(getprice2check==''){

        $('#price2_error').css("display", "inherit");
      }
      else {
        othersubmit();
      }
    }
    if(getname2check=='' && getname1check==''){
              othersubmit();
    }

      function othersubmit(){
        $.ajax({

             url:"../controller/controller_addbill.php",
             method:"POST",
             data:{getprice1:getprice1,getname1:getname1,getdec1:getdec1,getnicval:getnicval,getprice2:getprice2,getname2:getname2,getdec2:getdec2,procedure_btn:procedure_btn},
             success:function(data){
                //$( "#bill_main" ).load(window.location.href + " #bill_main" );
               $('#myModal').modal('show');
               //alert("OO");
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


    function printDiv(divID)
   {
     $('#all').modal('hide');
      //Get the HTML of div
      var divElements = document.getElementById(divID).innerHTML;
      //Get the HTML of whole page
      var oldPage = document.body.innerHTML;

      //Reset the page's HTML with div's HTML only
      document.body.innerHTML =
        "<html><head><title></title></head><body>" +
        divElements + "</body>";

      //Print Page
      window.print();

      //Restore orignal HTML
      document.body.innerHTML = oldPage;


   }
   // Boooking Colse
   function bookingclose() {

     var colsebid  =document.getElementById('bookingid').value;
     var totalbalance  =document.getElementById('totalbalance').value;


       $.ajax({
            url:"../controller/controller_addbill.php",
            method:"POST",
            data:{colsebid:colsebid,totalbalance:totalbalance},
            success:function(data){
              //$('#foodprice').val(data);
            }
       });

   }


</script>
<!--
 -->

</html>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <!-- <h4 class="modal-title">Bill Print View</h4> -->
        </div>
        <div class="modal-body">
          <div id="printablediv">
          <div class="billinfor">
            <h4 style="text-align: center;">Kandy Rivers Edge</h4>
            <p style="text-align: center; font-size: 15px; margin-top: -7px;">89, Thekka Watta road, Tennekumbura, Kandy, 20166 Kandy, Sri Lanka</p>
            <p style="text-align: center; font-size: 15px; margin-top: -12px;">055-XXXXXXXX</p>
            <p style="text-align: center; font-size: 15px; margin-top: -12px;">Date : <?php echo date("Y-m-d"); ?></p>
              <p style="float: left;">Customer Name : <?php echo $pcname; ?></p>
              <p style="float: right;">Booking No : <?php echo $_GET['selectid']; ?></p>
          </div>
          <div class="" style="margin-top: 8%;">
            <span>Billing Information</span>
          </div>
             <div class="col-md-6" style="margin-top: 3%;">
                 <div class="form-group">
                     <label class="" style="top: -25%;">Room Price <span>(LKR)</span></label>
                     <input type="text" class="form-control"  value="<?php if(isset($_GET['selectid'])){ echo $roomprice;} ?>" disabled>
                     <!-- <label id="roomprice_error" class="error" for="roomprice" style="display: none;  color: red; padding-top: 2%;">This field is required.</label> -->
                 </div>
             </div>
             <div class="col-md-6" style="margin-bottom: 4%;">
                 <div class="form-group">
                     <label class="bmd-label-floating">Discount</label>
                     <input type="number" class="form-control"  value="<?php if(isset($_GET['selectid'])){ echo $discount;} ?>" disabled>
                 </div>
             </div>
             <span>Fool Information</span>
             <div class="table-responsive" id="bill_food_table" style="margin-top: 2%;">
                 <table class="table">
                   <?php
                       $queryfood = "SELECT * FROM addbillinfor WHERE cbnic='$cnic'";
                       $resultfood = mysqli_query($conn ,$queryfood);
                    ?>
                     <thead class=" text-primary">
                         <th>
                             Food No
                         </th>
                         <th>
                             Food Name
                         </th>
                         <th>
                             Size
                         </th>
                         <th>
                             Quantity
                         </th>
                         <th>
                             Price (LKR)
                         </th>
                     </thead>
                     <tbody>
                       <?php
                       $no =1;
                       while($rowfood = mysqli_fetch_array($resultfood))
                          {
                           echo '
                           <tr>';
                           ?>
                            <td><?php echo $no; ?></td>
                           <?php
                           echo '
                            <td>'.$rowfood["foodname"].'</td>
                            <td>'.$rowfood["foodsize"].'</td>
                            <td>'.$rowfood["foodquantity"].'</td>
                            <td>'.$rowfood["tootalprice"].'</td>
                           </tr>
                             ';
                           $no++;
                          }
                        ?>
                     </tbody>
                 </table>
               </div>
               <span>Other Charges</span>
               <div class="table-responsive" id="bill_food_table" style="margin-top: 2%;">
                   <table class="table">
                     <?php
                         $queryother = "SELECT * FROM tempbill WHERE bnic='".$_GET['selectid']."'";
                         $resultother = mysqli_query($conn ,$queryother);
                      ?>
                       <thead class=" text-primary">
                           <th>
                               Name
                           </th>
                           <th>
                               Description
                           </th>
                           <th>
                               Price (LKR)
                           </th>
                       </thead>
                       <tbody>
                         <?php
                         $no =1;
                         while($rowother = mysqli_fetch_array($resultother))
                            {
                             echo '
                              <td>'.$rowother["bname"].'</td>
                              <td>'.$rowother["bdec"].'</td>
                              <td>'.$rowother["bprice"].'</td>
                             </tr>
                               ';
                             $no++;
                            $ballance =$ballance +$rowother["bprice"];
                            }
                          ?>
                       </tbody>
                   </table>
                 </div>
                 <span>Balance Information</span>
                  <div class="col-md-6" style="margin-top: 3%;">
                      <div class="form-group">
                          <label class="" style="top: -25%;">Total Balance <span>(LKR)</span></label>
                          <input type="text" class="form-control" id="totalbalance" value="<?php echo $ballance;  ?>" disabled>
                          <!-- <label id="roomprice_error" class="error" for="roomprice" style="display: none;  color: red; padding-top: 2%;">This field is required.</label> -->
                      </div>
                  </div>
                  <br>
                  <div class="billfooter">
                    <h4 style="text-align: center;">Thank You</h4>
                    <p style="text-align: center; font-size: 15px; margin-top: -7px;">Come Again</p>
                    <p style="text-align: center; font-size: 15px; margin-top: -12px;">Web :www.kandyriceredge.com  Tel: 071-XXXXXXXXX</p>
                      <p style="text-align: center; font-size: 13px; margin-top: -12px;">Powered by | Nexgen ITs @ 2018</p>
                  </div>
        </div>
       </div>
        <div class="modal-footer">
          <input type="button" value="Print" onclick="javascript:printDiv('printablediv'); bookingclose();" class="btn btn-primary btn-sm" style="background: #56b8fb; color: white; border-color: #56b8fb;"/>
          <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" style="background: #56b8fb; color: white; border-color: #56b8fb;">Close</button>
        </div>
      </div>
    </div>
  </div>
