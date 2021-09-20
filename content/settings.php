<!-- nexgenITs HMS System All right reseverd.-->
<!DOCTYPE html>
<html lang="en">
<?php
    // Database connection
    require '../include/config.php';
    // Check Login is correct
    include('../include/check.php');
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
            <?php include('../include/sideMenu.php'); ?>
            
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <?php include('../include/navhead.php'); ?>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 row">
                          <div class="col-md-6">
                           <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Food</h4>
                                    <p class="card-category">Information</p>
                                </div>
                                <div class="card-body">
                                    <form id="food_form">
                                        <div class="form-group">
                                           <div class="col-md-4">
                                              <div class="form-group">
                                                  <label class="bmd-label-floating">Food Code<span style="color: red;">*<span></label>
                                                  <input type="text" class="form-control" id="foodcode">
                                                  <label id="foodcode_error" class="error" for="foodcode" style="display: none;  color: red; padding-top: 2%;">This field is required.</label>
                                              </div>
                                           </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Food Name<span style="color: red;">*<span></label>
                                                    <input type="text" class="form-control" id="foodname">
                                                    <label id="foodname_error" class="error" for="foodname" style="display: none;  color: red; padding-top: 2%;">This field is required.</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                              <div class="form-group">
                                                  <label class="bmd-label-floating">Description<span style="color: red;">*<span></label>
                                                  <textarea class="form-control" rows="3" id="des"></textarea>
                                                  <label id="des_error" class="error" for="des" style="display: none;  color: red; padding-top: 2%;">This field is required.</label>
                                              </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Food View<span style="color: red;">*<span></label>
                                                    <input type="file" name="file" id="file" style="position: inherit; opacity: 1; z-index: inherit;">
                                                </div>
                                            </div>
                                          
                                            <div class="col-md-4" style="margin-bottom: 1%;">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Category<span style="color: red;">*<span></label>
                                                      <select  class="form-control" id="category">
                                                        <option value="">Select</option>
                                                        <option value="breakfast">Breakfast</option>
                                                        <option value="lunch">Lunch</option>
                                                        <option value="dinner">Dinner</option>
                                                    </select>
                                                    <label id="category_error" class="error" for="category" style="display: none;  color: red; padding-top: 2%;">This field is required.</label>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                              <label class="bmd-label-floating" style="margin-bottom: 6%;">Size</label>
                                              <table class="table table-bordered">
                                                 <thead>
                                                   <tr>
                                                     <th>Size Name</th>
                                                     <th>Price<span style="padding-left: 2%; font-size: 13px;">(රු)</span></th>
                                                   </tr>
                                                 </thead>
                                                 <tbody>
                                                   <tr>
                                                     <td>Small</td>
                                                     <td><input type="number" class="error"  id="foodsmall"></td>
                                                   </tr>
                                                   <tr>
                                                     <td>Medium</td>
                                                     <td><input type="number"  id="foodmedium"></td>
                                                   </tr>
                                                   <tr>
                                                     <td>Large</td>
                                                     <td><input type="number"  id="foodlarge"></td>
                                                   </tr>
                                                 </tbody>
                                               </table>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                  <button type="button" class="btn btn-primary " onclick="window.location='http://localhost:8888/HMS/content/room_management.php'">Clear</button>
                                                  <button type="button" class="btn btn-primary" id="food_btn_submit" name="food_btn_submit" onclick="FoodFormsubmit()">Submit Data</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                           <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Item</h4>
                                    <p class="card-category">Category</p>
                                </div>
                                <div class="card-body">
                                    <form id="category_form">
                                        <div class="form-group">
                                           <div class="col-md-4">
                                              <div class="form-group">
                                                  <label class="bmd-label-floating">Category Name<span style="color: red;">*<span></label>
                                                  <input type="text" class="form-control" id="cname" name="cname">
                                              </div>
                                           </div>
                                            <div class="col-md-4" style="margin-bottom: 1%;">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Is Food<span style="color: red;">*<span></label>
                                                      <select  class="form-control" id="isFood" name="isFood">
                                                        <option value="">Select</option>
                                                        <option value="on">Food</option>
                                                        <option value="off">Non Food</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                  <input type="hidden" class="form-control" name="add" value="add" />
                                                  <button type="submit" class="btn btn-primary" >Submit Data</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                          </div>
                        </div>
                        </div>

                       

                        <div id="snackbar"><p id="msg_view"></p></div>
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
<!-- <script src="../assets/js/core/jquery.min.js"></script> -->
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        //init wizard

        // demo.initMaterialWizard();

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.initCharts();

    });

    // image upload javascript code

      $(document).ready(function(){
      $(document).on('change', '#file', function(){


      var name = document.getElementById("file").files[0].name;
      var form_data = new FormData();
      var ext = name.split('.').pop().toLowerCase();
      // allow to  upload
      if(jQuery.inArray(ext, ['jpg', 'jpeg', 'gif', 'png', 'mp3', 'mp4','wma']) == -1)
      {
       alert("Invalid Format File");
      }
      var oFReader = new FileReader();
      oFReader.readAsDataURL(document.getElementById("file").files[0]);
      var f = document.getElementById("file").files[0];
      var fsize = f.size||f.fileSize;
      if(fsize > 2000000000000)
      {
       alert("Image File Size is very big");
      }
      else
      {
       form_data.append("file", document.getElementById('file').files[0]);

       $.ajax({
        url:"../controller/controller_food.php",
        method:"POST",
        data: form_data,
        contentType: false,
        cache: false,
        processData: false,
        success:function(data)
        {

        }
       });
      }
     });
    });

    // Required check input box
    $(document).ready(function(){

           $('#foodcode').change(function(){

              var val =$(this).val();
              if(val!=''){
                  $('#foodcode_error').css("display", "none");
              }
           });
           $('#foodname').change(function(){

              var val1 =$(this).val();
              if(val1!=''){
                  $('#foodname_error').css("display", "none");
              }
           });

           $('#category').change(function(){

              var val3 =$(this).val();
              if(val3!=''){
                  $('#category_error').css("display", "none");
              }
           });

           $('#des').change(function(){

              var val4 =$(this).val();
              if(val4!=''){
                  $('#des_error').css("display", "none");
              }
           });
    });

    // Food insert Form
    function FoodFormsubmit()
    {
      var foodcode =document.getElementById('foodcode').value;
      var foodcodecheck =document.getElementById('foodcode').value;

      var foodname =document.getElementById('foodname').value;
      var foodnamecheck =document.getElementById('foodname').value;

      var des =document.getElementById('des').value;
      var descheck =document.getElementById('des').value;

      var category =document.getElementById('category').value;
      var categorycheck =document.getElementById('category').value;

      var foodsmall =document.getElementById('foodsmall').value;
      var foodmedium =document.getElementById('foodmedium').value;
      var foodlarge =document.getElementById('foodlarge').value;


      var food_btn_submit =document.getElementById('food_btn_submit').name;

       if(foodcodecheck=='' && foodnamecheck=='' && categorycheck=='' && descheck==''){
         $('#foodcode_error').css("display", "inherit");
         $('#foodcode').addClass('error');

         $('#foodname_error').css("display", "inherit");
         $('#foodname').addClass('error');

         $('#category_error').css("display", "inherit");
         $('#category').addClass('error');

         $('#des_error').css("display", "inherit");
         $('#des').addClass('error');

       }
       else if(foodcodecheck==''){
         $('#foodcode_error').css("display", "inherit");
         $('#foodcode').addClass('error');
       }
       else if (foodnamecheck=='') {
         $('#foodname_error').css("display", "inherit");
         $('#foodname').addClass('error');
       }
       else if (descheck=='') {
         $('#des_error').css("display", "inherit");
         $('#des').addClass('error');
       }
       else if (categorycheck=='') {
         $('#category_error').css("display", "inherit");
         $('#category').addClass('error');
       }
       else {
         $.ajax({
              url:"../controller/controller_food.php",
              method:"POST",
              data:{foodcode:foodcode,foodname:foodname,des:des,category:category,foodsmall:foodsmall,foodmedium:foodmedium,foodlarge:foodlarge,food_btn_submit:food_btn_submit},
              success:function(data){

                // $("#room_table").load(window.location.href + " #room_table");
                //  $("#room_form").load(window.location.href + " #room_form");
                $('#food_form').trigger("reset");


                 foodmsg();
                $('#msg_view').html(data);

              }
         });
       }
     }

     // Message success view
      function foodmsg() {
          var x = document.getElementById("snackbar");
          x.className = "show";
          setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);

          // Location refech
          setTimeout(function(){location.reload(); },3000);
      }

    
    //Category Form

    $(function () {

    $('#category_form').on('submit', function (e) {
      e.preventDefault();

          $.ajax({
            type: 'post',
            url: '../controller/controller_inventory.php',
            data: $('#category_form').serialize(),
            success: function (data) {
                if(data==1){
                
                  swal("Successfully Submited !", {
                  icon: "success",
                  });
                }
                // Location refech
                setTimeout(function(){location.reload(); },3000);
            }
          });
    });
  });
  
</script>


<!--
 -->

</html>
