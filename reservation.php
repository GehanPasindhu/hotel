<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <script src="https://use.fontawesome.com/e052114790.js"></script>
        <link src="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
        <meta charset="UTF-8">
        <title>Hotel Elephant Bay</title>
    </head>
    <body>
        <?php
        include './common/nav.php';
        ?> 
        <div class="container d-flex flex-column justify-content-around">
            <div class="col-lg-12">
                <div class=" d-flex">
                    <div class="px-3 pt-3 pb-1">
                        <h1 class="text-black display-4">
                            Reserve Your Room With Us
                        </h1>
                    </div>
                </div>
                <div class="container-fluid" style="padding-bottom: 30px;">
                    <div class="row">
                        <div class="col-lg-7 mb-3">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Your Name</label>
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Your Email</label>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="fromday">From</label>
                                        <input class="form-control" type="text" id="fromday" required="" placeholder="DD/MM/YYYY">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="today">TO</label>
                                        <input class="form-control" type="text" id="today" required="" placeholder="DD/MM/YYYY">   
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="adult">Adult Count</label>
                                        <input class="form-control" type="text" id="adult" required="" placeholder="0">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="child">Child Count</label>
                                        <input class="form-control" type="text" id="chiild" required="" placeholder="0">   
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="rooms">Room Count</label>
                                        <input class="form-control" type="text" id="rooms" required="" placeholder="0">   
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="roomtype">Room Type</label>
                                    <select id="roomtype" class="form-control">
                                        <option>Disabled select</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="note">Any Special Note</label>
                                    <textarea class="form-control" id="note" rows="5"></textarea>
                                </div>

                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="rulescheck">
                                    <label class="form-check-label" for="rulescheck">
                                        <a href="reservation.php#rules">
                                            I read and understand all your rules and regulations on my reservation
                                        </a>
                                    </label>
                                </div>

                                <button class="btn btn-outline-success btn-lg" type="submit" id="btnreserve" name="btnreserve">Request Reservation</button>

                            </form>
                        </div>
                        <div class="col-lg-5 mb-3" id="rules">
                            <div class="card bg-light mb-3">
                                <div class="card-body ">
                                    <h5 class="card-title text-center">
                                        Our Rules and Regulations On Your Reservation
                                    </h5>

                                    <hr style="border: 2px solid #20c997">

                                    <div class="card-text">
                                        <ul>
                                            <li>
                                                Rule 1
                                            </li>
                                            <li>
                                                Rule 2
                                            </li>
                                            <li>
                                                Rule 3
                                            </li>
                                            <li>
                                                Rule 4
                                            </li>
                                            <li>
                                                Rule 5
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
