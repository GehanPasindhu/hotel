<html>
    <head>
        <script src="https://use.fontawesome.com/e052114790.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
        <meta charset="UTF-8">
        <title>Hotel Elephant Bay</title>
        <style>
            body{
                font-family: montserrat alternates,sans-serif;
                -webkit-font-smoothing: antialiased;
            }
            #home{
                background:linear-gradient(0deg,rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url('images/logBack.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                padding-bottom: 50px;
            }
            #home h1{
                padding-top: 90px;
            }
            #home p{
                font-size: 25px;
            }
            .glowbox{
                background: rgba(255,255,255,0.3);
                border:1px solid black;
                opacity: 0.8;
                padding-bottom: 15px;
                padding-top: 10px;
            }
            .glowbox .card{
                border: none;
            }

            #intro #rooms{
                padding-bottom: 50px;
            }
            .glowboxpink{
                border:10px solid pink;
                border-radius: 4px;
                padding: 15px;
                display: grid;
                grid-template-columns: auto 1fr auto;
            }
            .glowboxpink h2{
                font-size: 50px;
                font-weight: bolder;
                color: black;
            }

            #rooms h1{
                font-size: 50px;
                font-weight: bolder;
            }

            #rooms #lux{
                background:linear-gradient(0deg,rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url('images/luxroom.jpg');    
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
            }

            #rooms #pool{
                background:linear-gradient(0deg,rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url('images/hotelPool.jpg');  
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
            }

            #rooms button{
                margin-top:20em;
                margin-bottom: 4em; 
                border: 3px solid white;
                color: white;
                padding: 10px;
            }

            #cuslove h1{
                font-size: 50px;
                font-weight: bolder;
            }
        </style>
    </head>
    <body>
        <?php
        include './common/nav.php';
        ?>
        <section class="pt-5 m-0" id="home"> 
            <div class="col-sm-12 col-md-6 col-lg-4 offset-sm-0 offset-md-3 offset-lg-4">
                <div class=" d-flex justify-content-center">
                    <div class="px-3 pt-3 pb-1">
                        <h1 class="text-white text-center display-4">
                            Hotel Elephant Bay
                        </h1>
                        <p class="text-white text-center">Enhancing Life around great food</p>
                    </div>
                </div>
            </div>
            <div class='container d-flex flex-column justify-content-around glowbox'>
                <h4 class="text-white display-5">Check Availability</h4>
                <form>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">From</h5>
                                    <input class="form-control" type="text" id="adultcnt" required="" placeholder="DD/MM/YYYY">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">To</h5>
                                    <input class="form-control" type="text" id="adultcnt" required="" placeholder="DD/MM/YYYY">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h5 class="card-title">Adult</h5>
                                            <input class="form-control" type="text" id="adultcnt" required="" placeholder="0">
                                        </div>
                                        <div class="col-lg-4">
                                            <h5 class="card-title">Child</h5>
                                            <input class="form-control" type="text" id="childcnt" required="" placeholder="0">
                                        </div>
                                        <div class="col-lg-4">
                                            <h5 class="card-title">Rooms</h5>
                                            <input class="form-control" type="text" id="roomcnt" required="" placeholder="0">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card" style="height: auto">
                                <div class="card-body">
                                    <h5 class="card-title">Check</h5>
                                    <input class="btn btn-outline-success" type="submit" id="searchAvail" name="searchAvail" value="search"> 
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <section class="pt-5 m-0" id="intro">
            <div class="container d-flex flex-column justify-content-around glowboxpink text-muted">
                <div class="col-lg-6">
                    <p>A MEMORABLE HOLIDAY</p>
                    <h2>A great stay in a lovely hotel.</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <p>
                            The Elephant Bay Hotel is located in Pinnawala,
                            opposite the famous elephant orphanage. 
                            It offers rooms with large private balconies and spectacular views of the Ma Oya River.
                            <br>
                            The rooms are spacious and bright, 
                            with simple decoration and furniture. 
                            They feature a flat-screen cable TV, 
                            tea / coffee maker and a private bathroom.
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p>
                            Elephant Bay Hotel is 70 minutes 
                            'drive from Bandaranaike International 
                            Airport and 2 hours' drive from Colombo. 
                            It is easy to drive to cities like Kandy and Nuwara Eliya.
                        </p>

                        <button class="btn btn-outline-success btn-lg"><a href="reservation.php" class="text-reset">Make a Reservation</a></button>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-5 m-0" id="rooms">
            <div class="container-fluid d-flex flex-column justify-content-around">
                <div class="row">
                    <div class="col-lg-6" id="lux">
                        <div class="container justify-content-center" style=" margin-top: 80px;">
                            <div class=" d-flex">
                                <div class="px-3 pt-3 pb-1">
                                    <h1 class="text-white text-center display-4">
                                        Luxury Suite Room
                                    </h1>
                                    <p class="text-white">FROM $399</p>
                                </div>
                            </div>

                            <button class="btn btn-outline-success btn-lg"><a href="reservation.php" class="text-reset">Make a Reservation</a></button>

                        </div>
                    </div>
                    <div class="col-lg-6" id="pool">
                        <div class="container justify-content-center" style=" margin-top: 80px;">
                            <div class=" d-flex ">
                                <div class="px-3 pt-3 pb-1">
                                    <h1 class="text-white text-center display-4">
                                        Infinity Pool
                                    </h1>
                                    <p class="text-white">FOR ALL OUR GUESTS</p>
                                </div>
                            </div>

                            <button class="btn btn-outline-success btn-lg"><a href="reservation.php" class="text-reset">Make a Reservation</a></button>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-5 m-0" id="cuslove">
            <div class="container d-flex flex-column justify-content-around">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <h1>“Customers love our facilities”</h1>
                        <p class="text-muted">
                            Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. 
                            Vivamus libero mauris, bibendum eget sapien ac, 
                            ultrices rhoncus ipsum. Donec nec sapien in urna 
                            fermentum ornare. Morbi vel ultrices leo. Sed eu 
                            turpis eu arcu vehicula fringilla ut vitae orci. 
                            Suspendisse maximus malesuada.
                        </p>
                         <button class="btn btn-outline-success btn-lg"><a href="reservation.php" class="text-reset">Make a Reservation</a></button>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <img class="img-flex" src="images/home-about-1.jpg">
                            </div>
                            <div class="col-lg-6 mb-4">
                                <img class="img-flex" src="images/home-about-2.jpg">
                            </div>
                            <div class="col-lg-6 mb-4">
                                <img class="img-flex" src="images/home-about-3.jpg">
                            </div>
                            <div class="col-lg-6 mb-4">
                                <img class="img-flex" src="images/home-about-4.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-5 m-0" id="cuslove">
            <?php
            include './common/footer.php';
            ?>
        </section>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 

        <script>

        </script>

    </body>
