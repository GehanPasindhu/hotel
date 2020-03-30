<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include './common/database.php';
?>
<html>
    <head>
        <script src="https://use.fontawesome.com/e052114790.js"></script>
        <link src="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
        <meta charset="UTF-8">
        <title>Hotel Elephant Bay</title>
        <style>
            .rooms button{
                margin-top: 4em;
                margin-bottom: 2em; 
                padding: 10px;
            }
            .icons img{
                margin-top: 2em;
                width: 55%;
                height: 40%;
            }
        </style>
    </head>
    <body>
        <?php
        include './common/nav.php';
        ?> 
        <div class="container-fluid d-flex flex-column justify-content-around rooms">
            <?php
            $countroomtype = "select * from rtype";
            $rrtype = mysqli_query($connection, $countroomtype);
            while ($cresultrow = mysqli_fetch_array($rrtype)) {
                $number = $cresultrow['idrtype'] % 2;
                if ($number == 0) {
                    ?>
                    <div class="row" id='rooms'>
                        <div class="col-lg-6" id="word">
                            <div class="container justify-content-center">
                                <div class=" d-flex">
                                    <div class="px-3 pt-3 pb-1">
                                        <p class="text-mute">A MEMORABLE HOLLIDAY</p>
                                        <h1 class="text-black display-4">
                                            <?php
                                            echo $cresultrow['type'];
                                            ?>
                                        </h1>
                                        <p class="text-mute">
                                            Starting From <?php
                                            echo $cresultrow['price'];
                                            ?>
                                        </p>
                                        <p class="text-info">
                                            <?php
                                            echo $cresultrow['description'];
                                            ?>
                                        </p>
                                        <div class="row row-cols-5 row-cols-md-3 text-center icons">
                                            <div class="col-lg-2">
                                                <img src="images/icons/tv.png" alt=""/>
                                                <br>
                                                Smart TV
                                            </div>
                                            <div class="col-lg-3">
                                                <img src="images/icons/wifi.png" alt=""/>
                                                <br>
                                                High Wi-fi
                                            </div>
                                            <div class="col-lg-2">
                                                <img src="images/icons/AC.png" alt=""/>
                                                <br>
                                                AC
                                            </div>
                                            <div class="col-lg-2">
                                                <img src="images/icons/park.png" alt=""/>
                                                <br>
                                                Parking
                                            </div>
                                            <div class="col-lg-2">
                                                <img src="images/icons/swim.png" alt=""/>
                                                <br>
                                                Pool
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-outline-success btn-lg"><a href="reservation.php" class="text-reset">Make a Reservation</a></button>
                            </div>
                        </div>
                        <div class="col-lg-6" id="pic"
                             style="background: url('images/rooms/<?php
                                                                echo $cresultrow['image'];
                                            ?>');
                             background-repeat: no-repeat;
                             background-size: cover;
                             background-position: center;
                             height:40em;">

                        </div>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="row" id='rooms'>
                        <div class="col-lg-6" id="pic"
                             style="background: url('images/rooms/<?php
                                                                echo $cresultrow['image'];
                                            ?>');
                             background-repeat: no-repeat;
                             background-size: cover;
                             background-position: center;
                             height:40em;">

                        </div>
                        <div class="col-lg-6" id="word">
                            <div class="container justify-content-center">
                                <div class=" d-flex">
                                    <div class="px-3 pt-3 pb-1">
                                        <h1 class="text-black display-4">
                                            <?php
                                            echo $cresultrow['type'];
                                            ?>
                                        </h1>
                                        <p class="text-mute">
                                            Starting From <?php
                                            echo $cresultrow['price'];
                                            ?>
                                        </p>
                                        <p class="text-info">
                                            <?php
                                            echo $cresultrow['description'];
                                            ?>
                                        </p>
                                        <div class="row row-cols-5 row-cols-md-3 text-center icons">
                                            <div class="col-lg-2">
                                                <img src="images/icons/tv.png" alt=""/>
                                                <br>
                                                Smart TV
                                            </div>
                                            <div class="col-lg-3">
                                                <img src="images/icons/wifi.png" alt=""/>
                                                <br>
                                                High Wi-fi
                                            </div>
                                            <div class="col-lg-2">
                                                <img src="images/icons/AC.png" alt=""/>
                                                <br>
                                                AC
                                            </div>
                                            <div class="col-lg-2">
                                                <img src="images/icons/park.png" alt=""/>
                                                <br>
                                                Parking
                                            </div>
                                            <div class="col-lg-2">
                                                <img src="images/icons/swim.png" alt=""/>
                                                <br>
                                                Pool
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-outline-success btn-lg"><a href="reservation.php" class="text-reset">Make a Reservation</a></button>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
        <?php
        include './common/footer.php';
        ?>


        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 

        <script>

        </script>

    </body>
</html>
