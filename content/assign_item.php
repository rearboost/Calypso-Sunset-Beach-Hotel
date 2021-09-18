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
                <li class="nav-item">
                    <a class="nav-link" href="booking.php">
                        <i class="fa fa-users"></i>
                        <p>Booking</p>
                    </a>
                </li>
                 <li class="nav-item active">
                    <a class="nav-link inv" style="cursor: pointer;">
                      <i class="fa fa-book"></i>
                        <p>Inventory <i class="fa fa-caret-down" style="float: right;"></i></p>
                    </a>
                    <div class="dropdown-container" style="display: none;">
                        <a class="nav-link" href="inventory.php">
                            <i class="fa fa-plus"></i>
                            <p>Add Items / Foods</p>
                        </a>
                         <a class="nav-link" href="assign_item.php">
                            <i class="fa fa-sliders"></i>
                            <p>Items Assign</p>
                        </a>
                    </div>
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
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Assign Item To Rooms</h4>
                                    <p class="card-category">Information</p>
                                </div>
                                <div class="card-body">
                                    <form id="assign_form">
                                         <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="bmd-label-floating">Rooms<span style="color: red;">*<span></label>
                                                  <!-- <input type="text" class="form-control" id="alocatedroom"> -->
                                                  <select  class="form-control" id="roomno" name="roomno" required>
                                                          <option value="">Select</option>
                                                          <?php
                                                          $query ="SELECT * FROM  roominfor";
                                                          $result =mysqli_query($conn, $query);

                                                          while($row = mysqli_fetch_array($result))
                                                          {
                                                              echo "<option value='".$row['id']."'>".$row['roomno']."</option>";
                                                          }
                                                         ?>
                                                  </select>
                                              </div>
                                          </div>
                                         <div class="col-md-6">
                                              <div class="form-group">
                                                  <p>Room Type - <b><span id="roomtype"></span></b></p>    
                                              </div>
                                          </div>
                                        </div>

                                        <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="bmd-label-floating">Item<span style="color: red;">*<span></label>
                                                  <!-- <input type="text" class="form-control" id="alocatedroom"> -->
                                                  <select  class="form-control" id="item_id" name="item_id" required>
                                                          <option value="">Select</option>
                                                          <?php
                                                          $query ="SELECT * FROM  inventory";
                                                          $result =mysqli_query($conn, $query);

                                                          while($row = mysqli_fetch_array($result))
                                                          {
                                                              echo "<option value='".$row['id']."'>".$row['name']."</option>";
                                                          }
                                                         ?>
                                                  </select>
                                              </div>
                                          </div>
                                        <div class="col-md-6">
                                              <div class="form-group">
                                                  <p>Available quantity - <b><span id="available"></span></b></p> 
                                                 
                                              </div>
                                          </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Quantity<span style="color: red;">*<span></label>
                                                    <input type="text" class="form-control" id="quantity" name="quantity" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Description</label>
                                                    <textarea class="form-control" rows="3" id="description" name="description"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                                        
                                         <input type="hidden" class="form-control" name="add" value="add" />
                                        <button type="submit"  class="btn btn-primary pull-right" >Add Data</button>
                                        <div class="clearfix"></div>
                                    </form>
                                    <div id="snackbar"><p id="msg_view"></p></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title ">Assign Item Table</h4>
                                    <p class="card-category"> Here is a subtitle for this table</p>
                                </div>
                                <div class="card-body">
                                   <?php
                                       $query = "SELECT A.roomno ,C.name AS iname ,B.quantity , B.description FROM
                                                roominfor A
                                                    INNER JOIN
                                                assign_items B
                                                    on A.id = B.room_id
                                                    INNER JOIN 
                                                Inventory C
                                                    on B.item_id = C.id";
                                       $result = mysqli_query($conn ,$query);

                                    ?>
                                    <div class="table-responsive" id="room_table">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                    Room No
                                                </th>
                                                <th>
                                                    Item name
                                                </th>
                                                <th>
                                                    Quantity
                                                </th>
                                                <th>
                                                   Description
                                                </th>
                                                <th>
                                                    
                                                </th>
                                            </thead>
                                            <tbody>
                                                <?php
                                                while($row = mysqli_fetch_array($result))
                                                   {
                                                    
                                                    $description = str_replace('\r\n',"</br>",$row["description"]);
                                                    echo '
                                                    <tr>
                                                     <td>'.$row["roomno"].'</td>';
                                                     echo '
                                                     <td>'.$row["iname"].'</td>
                                                     <td>'.$row["quantity"].'</td>
                                                     <td>'.$description.'</td>  ';
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../assets/js/plugins/demo.js"></script>
<script type="text/javascript">

    $('#available').html('0');

   //Assign Item Form
    $(function () {

    $('#assign_form').on('submit', function (e) {
      e.preventDefault();

          $.ajax({
            type: 'post',
            url: '../controller/controller_assign_item.php',
            data: $('#assign_form').serialize(),
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


  //////////////// GET AVABLE STOCK  ////////////////
   $('#item_id').on('change',function(){
       var item_id = $(this).val();
        $.ajax({

            url: '../functions/get_assign_item.php',
            method:"POST",
            data:{item_id:item_id},
            success: function (response) {
                var obj = JSON.parse(response);
                var available = obj.available;
                $('#available').html(available);
            }
        });
    });

    //////////////// GET ROOMS INFO  ////////////////

    $('#roomno').on('change',function(){
       var roomno = $(this).val();
        $.ajax({

            url: '../functions/get_assign_item.php',
            method:"POST",
            data:{roomno:roomno},
            success: function (response) {
                var obj = JSON.parse(response);
                var roomtype = obj.roomtype;
                $('#roomtype').html(roomtype);
            }
        });
    });




    
   

</script>

</html>
