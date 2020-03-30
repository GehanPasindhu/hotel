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
             <li class="nav-item">
                  <a class="nav-link" href="../index.php">
                    Profile
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../index.php">
                  Reservations
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../index.php">
                    Settings
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../common/logout.php">
                    Log Out
                </a>
            </li>
         </ul>
    </div>
</nav>