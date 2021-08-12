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
                <li class="nav-item ">
                    <a class="nav-link" href="food_and_beverage.php">
                        <i class="fa fa-cutlery"></i>
                        <p>Food and beverage</p>
                    </a>
                </li>
                <li class="nav-item active">
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
            <!-- <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-warning card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">content_copy</i>
                                    </div>
                                    <p class="card-category">Bill and payment</p>
                                    <h3 class="card-title">49/50
                                        <small>GB</small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-danger">warning</i>
                                        <a href="#pablo">Get More Space...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-success card-header-icon">
                                    <div class="card-icon">
                                        <i class="fa fa-bed"></i>
                                    </div>
                                    <p class="card-category">Room management</p>
                                    <h3 class="card-title">$34,245</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> Last 24 Hours
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-danger card-header-icon">
                                    <div class="card-icon">
                                        <i class="fa fa-cutlery"></i>
                                    </div>
                                    <p class="card-category">Food and beverage</p>
                                    <h3 class="card-title">75</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">local_offer</i> Tracked from Github
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <p class="card-category">Employees</p>
                                    <h3 class="card-title">+245</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Just Updated
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-chart">
                                <div class="card-header card-header-success">
                                    <div class="ct-chart" id="dailySalesChart"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Daily Sales</h4>
                                    <p class="card-category">
                                        <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> updated 4 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-chart">
                                <div class="card-header card-header-warning">
                                    <div class="ct-chart" id="websiteViewsChart"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Email Subscriptions</h4>
                                    <p class="card-category">Last Campaign Performance</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-chart">
                                <div class="card-header card-header-danger">
                                    <div class="ct-chart" id="completedTasksChart"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Completed Tasks</h4>
                                    <p class="card-category">Last Campaign Performance</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header card-header-tabs card-header-primary">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <span class="nav-tabs-title">Tasks:</span>
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#profile" data-toggle="tab">
                                                        <i class="material-icons">bug_report</i> Bugs
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#messages" data-toggle="tab">
                                                        <i class="material-icons">code</i> Website
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#settings" data-toggle="tab">
                                                        <i class="material-icons">cloud</i> Server
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="profile">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" value="" checked>
                                                                    <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Sign contract for "What are conference organizers afraid of?"</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" value="">
                                                                    <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" value="">
                                                                    <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                                        </td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" value="" checked>
                                                                    <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="messages">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" value="" checked>
                                                                    <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                                        </td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" value="">
                                                                    <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Sign contract for "What are conference organizers afraid of?"</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="settings">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" value="">
                                                                    <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" value="" checked>
                                                                    <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                                        </td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" value="" checked>
                                                                    <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Sign contract for "What are conference organizers afraid of?"</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header card-header-warning">
                                    <h4 class="card-title">Employees Stats</h4>
                                    <p class="card-category">New employees on 15th September, 2016</p>
                                </div>
                                <div class="card-body table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Salary</th>
                                            <th>Country</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Dakota Rice</td>
                                                <td>$36,738</td>
                                                <td>Niger</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Minerva Hooper</td>
                                                <td>$23,789</td>
                                                <td>Curaçao</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Sage Rodriguez</td>
                                                <td>$56,142</td>
                                                <td>Netherlands</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Philip Chaney</td>
                                                <td>$38,735</td>
                                                <td>Korea, South</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Booking management</h4>
                                    <p class="card-category">Information</p>
                                </div>
                                <div class="card-body">
                                    <form id="booking_form">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Booking No<span style="color: red;">*<span></label>
                                                    <input type="text" class="form-control" id="bookingno">
                                                    <label id="bookingno_error" class="error" for="bookingno" style="display: none;  color: red; padding-top: 2%;">This field is required.</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Customer Name<span style="color: red;">*<span></label>
                                                    <input type="text" class="form-control" id="cname">
                                                    <label id="cname_error" class="error" for="cname" style="display: none;  color: red; padding-top: 2%;">This field is required.</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Customer NIC/ Passport ID<span style="color: red;">*<span></label>
                                                    <input type="text" class="form-control" id="cnic">
                                                    <label id="cnic_error" class="error" for="cnic" style="display: none;  color: red; padding-top: 2%;">This field is required.</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Booked By</label>
                                                    <input type="text" class="form-control" id="bookby">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Arrival Date<span style="color: red;">*<span></label>
                                                    <input type="date" class="form-control" id="arrivaldate" value="<?php echo date("Y-m-d"); ?>">
                                                    <label id="arrivaldate_error" class="error" for="arrivaldate" style="display: none;  color: red; padding-top: 2%;">This field is required.</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating" style="top: -1rem; left: 0; font-size: 0.6875rem;">Departure Date<span style="color: red;">*<span></label>
                                                    <input type="date" class="form-control" id="departuredate">
                                                    <label id="departuredate_error" class="error" for="departuredate" style="display: none;  color: red; padding-top: 2%;">This field is required.</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Number of People</label>
                                                    <input type="number" class="form-control" id="numofpeo">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Contact Number <span style="color: red;">*<span></label>
                                                    <input type="number" class="form-control" id="connum">
                                                    <label id="connum_error" class="error" for="connum" style="display: none;  color: red; padding-top: 2%;">This field is required.</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Address<span style="color: red;">*<span></label>
                                                    <textarea class="form-control" rows="3" id="address"></textarea>
                                                    <label id="address_error" class="error" for="address" style="display: none;  color: red; padding-top: 2%;">This field is required.</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="bmd-label-floating">Alocated Room<span style="color: red;">*<span></label>
                                                  <!-- <input type="text" class="form-control" id="alocatedroom"> -->
                                                  <select  class="form-control" id="alocatedroom">
                                                          <option value="">Select</option>
                                                          <?php
                                                          $tset ="0";
                                                          $query ="SELECT * FROM roominfor WHERE roomstatus='$tset'";
                                                          $result =mysqli_query($conn, $query);

                                                          while($row = mysqli_fetch_array($result))
                                                          {

                                                              echo "<option value='".$row['id']."'>".$row['roomno']."</option>";

                                                          }
                                                         ?>
                                                  </select>
                                                  <label id="alocatedroom_error" class="error" for="alocatedroom" style="display: none;  color: red; padding-top: 2%;">This field is required.</label>
                                              </div>
                                          </div>
                                        </div>
                                        <!-- <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>About Me</label>
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
                                                        <textarea class="form-control" rows="5"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->

                                        <div class="billinfor" style="border: 1px solid; padding: 2%; margin: 1%; border-color: #9e3fb0; margin-top: 3%;">
                                          <span>Billing Information</span>
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label class="" style="top: -25%;">Room Price</label>
                                                      <input type="text" class="form-control" id="roomprice" disabled>
                                                      <label id="roomprice_error" class="error" for="roomprice" style="display: none;  color: red; padding-top: 2%;">This field is required.</label>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label class="bmd-label-floating">Discount</label>
                                                      <input type="text" class="form-control" id="discount">
                                                  </div>
                                              </div>
                                          </div>
                                          <!-- <span>Food and beverage</span> -->
                                        </div>
                                        <button type="button" id="booking_btn" name="booking_btn" class="btn btn-primary pull-right" onclick="booking()">Update Data</button>
                                        <div class="clearfix"></div>
                                    </form>
                                    <div id="snackbar"><p id="msg_view"></p></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
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
                                                     if($date<0){
                                                       $date ="0";
                                                     }

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

           $('#bookingno').change(function(){

              var val =$(this).val();
              if(val!=''){
                  $('#bookingno_error').css("display", "none");
              }
           });
           $('#cname').change(function(){

              var val1 =$(this).val();
              if(val1!=''){
                  $('#cname_error').css("display", "none");
              }
           });
           $('#cnic').change(function(){

              var val2 =$(this).val();
              if(val2!=''){
                  $('#cnic_error').css("display", "none");
              }
           });
           $('#arrivaldate').change(function(){

              var val3 =$(this).val();
              if(val3!=''){
                  $('#arrivaldate_error').css("display", "none");
              }
           });
           $('#departuredate').change(function(){

              var val4 =$(this).val();
              if(val4!=''){
                  $('#departuredate_error').css("display", "none");
              }
           });
           $('#connum').change(function(){

              var val5 =$(this).val();
              if(val5!=''){
                  $('#connum_error').css("display", "none");
              }
           });
           $('#address').change(function(){

              var val6 =$(this).val();
              if(val6!=''){
                  $('#address_error').css("display", "none");
              }
           });
           $('#alocatedroom').change(function(){

              var val7 =$(this).val();

              if(val7!=''){

                  $('#alocatedroom_error').css("display", "none");
                  $.ajax({
                       url:"../controller/controller_booking.php",
                       method:"POST",
                       data:{aroom:val7},
                       success:function(data){

                          $('#roomprice').val(data);

                       }
                  });
              }
              else {
                  $('#roomprice').val('');
              }
           });
           $('#roomprice').change(function(){

              var val8 =$(this).val();
              if(val8!=''){
                  $('#roomprice_error').css("display", "none");
              }
           });
    });

    // Booking insert javascript
    function booking()
    {

      var bookingno =document.getElementById('bookingno').value;
      var bookingnocheck =document.getElementById('bookingno').value;


      var cname =document.getElementById('cname').value;
      var cnamecheck =document.getElementById('cname').value;

      var cnic =document.getElementById('cnic').value;
      var cniccheck =document.getElementById('cnic').value;

      var bookby =document.getElementById('bookby').value;

      var arrivaldate =document.getElementById('arrivaldate').value;
      var arrivaldateecheck =document.getElementById('arrivaldate').value;

      var departuredate =document.getElementById('departuredate').value;
      var departuredatecheck =document.getElementById('departuredate').value;

      var numofpeo =document.getElementById('numofpeo').value;

      var connum =document.getElementById('connum').value;
      var connumcheck =document.getElementById('connum').value;

      var address =document.getElementById('address').value;
      var addresscheck =document.getElementById('address').value;

      var alocatedroom =document.getElementById('alocatedroom').value;
      var alocatedroomcheck =document.getElementById('alocatedroom').value;

      var roomprice =document.getElementById('roomprice').value;
      var roompricecheck =document.getElementById('roomprice').value;

      var discount =document.getElementById('discount').value;

      var booking_btn =document.getElementById('booking_btn').name;


        if(bookingnocheck=='' && cnamecheck=='' && cniccheck==''  && departuredatecheck=='' && connumcheck=='' && addresscheck=='' && alocatedroomcheck=='' && roompricecheck=='')
        {

          $('#bookingno_error').css("display", "inherit");
          $('#bookingno').addClass('error');

          $('#cname_error').css("display", "inherit");
          $('#cname').addClass('error');

          $('#cnic_error').css("display", "inherit");
          $('#cnic').addClass('error');

          $('#arrivaldate_error').css("display", "inherit");
          $('#arrivaldate').addClass('error');

          $('#departuredate_error').css("display", "inherit");
          $('#departuredate').addClass('error');

          $('#connum_error').css("display", "inherit");
          $('#connum').addClass('error');

          $('#address_error').css("display", "inherit");
          $('#address').addClass('error');

          $('#alocatedroom_error').css("display", "inherit");
          $('#alocatedroom').addClass('error');

          $('#roomprice_error').css("display", "inherit");
          $('#roomprice').addClass('error');
        }
        else if (Date.parse(arrivaldateecheck) > Date.parse(departuredatecheck)) {
             alert("Departure Date Error");
        }
        else if(bookingnocheck==''){
          $('#bookingno_error').css("display", "inherit");
          $('#bookingno').addClass('error');
        }
        else if (cnamecheck=='') {
          $('#cname_error').css("display", "inherit");
          $('#cname').addClass('error');
        }
        else if (cniccheck=='') {
          $('#cnic_error').css("display", "inherit");
          $('#cnic').addClass('error');
        }
        else if (departuredatecheck=='') {
          $('#departuredate_error').css("display", "inherit");
          $('#departuredate').addClass('error');
        }
        else if (connumcheck=='') {
          $('#connum_error').css("display", "inherit");
          $('#connum').addClass('error');
        }
        else if (addresscheck=='') {
          $('#address_error').css("display", "inherit");
          $('#address').addClass('error');
        }
        else if (alocatedroomcheck=='') {
          $('#alocatedroom_error').css("display", "inherit");
          $('#alocatedroom').addClass('error');
        }
        else if (roompricecheck=='') {
          $('#roomprice_error').css("display", "inherit");
          $('#roomprice').addClass('error');
        }
        else {
          $.ajax({
               url:"../controller/controller_booking.php",
               method:"POST",
               data:{bookingno:bookingno,cname:cname,cnic:cnic,bookby:bookby,arrivaldate:arrivaldate,departuredate:departuredate,numofpeo:numofpeo,connum:connum,address:address,alocatedroom:alocatedroom,roomprice:roomprice,discount:discount,booking_btn:booking_btn},
               success:function(data){

                  $("#content").load(window.location.href + " #content");
                  $('#booking_form').trigger("reset");

                  bookingmsg();
                 $('#msg_view').html(data);

               }
          });
        }
      }

     // Message success view
      function bookingmsg() {
          var x = document.getElementById("snackbar");
          x.className = "show";
          setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);

          // Location refech
          setTimeout(function(){location.reload(); },3000);
      }








</script>
<!--
 -->

</html>
