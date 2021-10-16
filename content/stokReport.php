<!-- nexgenITs HMS System All right reseverd.-->
<!DOCTYPE html>
<html lang="en">

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
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Stock Report</h4>
                                    <p class="card-category">Information</p>
                                </div>
                                <div class="card-body">
                                    <form id="stock_report_form">
                                        <div class="row">
                                             <div class="col-md-4" style="margin-bottom: 1%;">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Is Food<span style="color: red;">*<span></label>
                                                      <select  class="form-control" id="isFood" name="isFood" required>
                                                        <option value="">Select</option>
                                                        <option value="1">Food</option>
                                                        <option value="0">Non Food</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">Generate</button>
                                        <div class="clearfix"></div>
                                    </form>
                                    <hr>
                                    <div id="show"></div>
                                </div>
                            </div>
                        </div>

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

 $(function () {

    $('#stock_report_form').on('submit', function (e) {
      e.preventDefault();

          $.ajax({
            type: 'post',
            url: '../controller/controller_stokReport.php',
            data: $('#stock_report_form').serialize(),
            success: function (data) {

                $('#show').html(data)
            }
          });
    });
  });

  //////////////////

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

</script>
<!--
 -->

</html>
