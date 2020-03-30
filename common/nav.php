<?php
session_start();
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Hotel Elephant Bay</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="rooms.php">Rooms</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Menu Details
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="menu.php#food">Food</a>
                    <a class="dropdown-item" href="menu.php#bev">Beverage</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="menu.php#menu">Fix Menu</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contactus.php">Contact Us</a>
            </li>
        </ul>

        <ul class="nav navbar-nav">
            <?php
            if (!isset($_SESSION['customer'])) {
                ?>
                <li class = "nav-item">
                    <a class = "nav-link" href = "./common/login.php">Sign In/Sign Up</a>
                </li> 
                <?php
            } else {
                ?>

                <li class = "nav-item dropdown">
                    <a class = "nav-link dropdown-toggle" href = "#" id = "navbarDropdown" role = "button" data-toggle = "dropdown" aria-haspopup = "true" aria-expanded = "false">
                        Welcome <?php echo $_SESSION['customer']; ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="client/clientDash.php">My Profile</a>
                        <a class="dropdown-item" href="#">My Reservations</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="./common/logout.php">Log Out</a>
                    </div>
                </li>

                <?php
            }
            ?>
        </ul>
        <button class="btn btn-outline-success my-2 my-sm-0">
            <a href="reservation.php" class="text-reset">Make a Reservation</a>
        </button>

    </div>
</nav>