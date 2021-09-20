 <div class="sidebar-wrapper">
    <ul class="nav">
    <li class="nav-item <?php  if(basename($_SERVER['PHP_SELF'])=='home.php'){ echo "active";}  ?>">
        <a class="nav-link" href="home.php">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
        </a>
    </li>
    <li class="nav-item <?php  if(basename($_SERVER['PHP_SELF'])=='bill_and_payment.php'){ echo "active";}  ?>">
        <a class="nav-link" href="bill_and_payment.php">
            <i class="material-icons">content_copy</i>
            <p>Bill and payment</p>
        </a>
    </li>
    <li class="nav-item <?php  if(basename($_SERVER['PHP_SELF'])=='room_management.php'){ echo "active";}  ?>">
        <a class="nav-link" href="room_management.php">
            <i class="fa fa-bed"></i>
            <p>Room management</p>
        </a>
    </li>
    <li class="nav-item <?php  if(basename($_SERVER['PHP_SELF'])=='food_and_beverage.php'){ echo "active";}  ?>">
        <a class="nav-link" href="food_and_beverage.php">
            <i class="fa fa-cutlery"></i>
            <p>Food and beverage</p>
        </a>
    </li>
    <li class="nav-item <?php  if(basename($_SERVER['PHP_SELF'])=='booking.php'){ echo "active";}  ?>">
        <a class="nav-link" href="booking.php">
            <i class="fa fa-users"></i>
            <p>Booking</p>
        </a>
    </li>
    <li class="nav-item <?php  if(basename($_SERVER['PHP_SELF'])=='inventory.php'|| basename($_SERVER['PHP_SELF'])=='assign_item.php' || basename($_SERVER['PHP_SELF'])=='bad_items.php' || basename($_SERVER['PHP_SELF'])=='purchase.php'){ echo "active";}  ?>">
        <a class="nav-link inv" style="cursor: pointer;">
            <i class="fa fa-book"></i>
            <p>Inventory <i class="fa fa-caret-down" style="float: right;"></i></p>
        </a>
        <div class="dropdown-container" style="display: none;">
            <a class="nav-link" href="inventory.php">
                <i class="fa fa-plus"></i>
                <p><b>Add Items / Foods</b></p>
            </a>
                <a class="nav-link" href="assign_item.php">
                <i class="fa fa-sliders"></i>
                <p><b>Items Assign</b></p>
            </a>
            <a class="nav-link" href="bad_items.php">
                <i class="fa fa-ban"></i>
                <p><b>Bad Items</b></p>
            </a>
            <a class="nav-link" href="purchase.php">
                <i class="fa fa-shopping-cart"></i>
                <p><b>Purchase</b></p>
            </a>
        </div>
    </li>
    <li class="nav-item <?php  if(basename($_SERVER['PHP_SELF'])=='settings.php'){ echo "active";}  ?>">
        <a class="nav-link" href="settings.php">
            <i class="fa fa-cog"></i>
            <p>Settings</p>
        </a>
    </li>
    </ul>
</div>

