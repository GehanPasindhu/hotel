<?php
session_start();
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="../index.php">Hotel Elephant Bay</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
            </li>
        </ul>

        <ul class="nav navbar-nav">
             <li class = "nav-item dropdown">
                <a class = "nav-link dropdown-toggle" href = "#" id = "navbarDropdown" role = "button" data-toggle = "dropdown" aria-haspopup = "true" aria-expanded = "false">
                    Room Details
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Add Room Type</a>
                    <a class="dropdown-item" href="#">All Room Types</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">All Rooms</a>
                    <a class="dropdown-item" href="#">All Room Details</a>
                </div>
            </li>
            <li class = "nav-item dropdown">
                <a class = "nav-link dropdown-toggle" href = "#" id = "navbarDropdown" role = "button" data-toggle = "dropdown" aria-haspopup = "true" aria-expanded = "false">
                    Booking Details
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Reservation Requests</a>
                    <a class="dropdown-item" href="#">Bookings</a>
                </div>
            </li>
            <li class = "nav-item dropdown">
                <a class = "nav-link dropdown-toggle" href = "#" id = "navbarDropdown" role = "button" data-toggle = "dropdown" aria-haspopup = "true" aria-expanded = "false">
                   Menu Details
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Food List</a>
                    <a class="dropdown-item" href="#">Beverage List</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Menu List</a>
                </div>
            </li>
            <li class = "nav-item dropdown">
                <a class = "nav-link dropdown-toggle" href = "#" id = "navbarDropdown" role = "button" data-toggle = "dropdown" aria-haspopup = "true" aria-expanded = "false">
                   Employee Details
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Add Employee</a>
                    <a class="dropdown-item" href="#">All Employee Detail</a>
                </div>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="../index.php">
                  Other Settings
                </a>
            </li>
            <li class = "nav-item dropdown">
                <a class = "nav-link dropdown-toggle" href = "#" id = "navbarDropdown" role = "button" data-toggle = "dropdown" aria-haspopup = "true" aria-expanded = "false">
                    Welcome <?php echo $_SESSION['admin']; ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">My Profile</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../common/logout.php">Log Out</a>
                </div>
            </li>
        </ul>
    </div>
</nav>