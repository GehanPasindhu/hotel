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
        <div class="container-fluid d-flex flex-column justify-content-around">
            <div class="col-lg-12">
                <div class=" d-flex">
                    <div class="px-3 pt-3 pb-1">
                        <h1 class="text-black display-4">
                            Contact Us
                        </h1>
                        <p>Feel Free To Contact us. We get you back within 24hours.</p>
                    </div>
                </div>
                <div class="container" style="padding-bottom: 20px;">
                    <div class="row">
                        <div class="col-lg-8 mb-3">
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
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" class="form-control" id="subject">
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea class="form-control" id="message" rows="5"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <div class="card bg-light mb-3 text-center">
                                <div class="card-body ">
                                    <h5 class="card-title">Contact Us</h5>
                                    
                                    <hr style="border: 2px solid #20c997">
                                    
                                    <div class="card-text">
                                        <p>
                                            Kegalle-Rambukkana Road, Rambukkana 71100
                                        </p>
                                        <p>
                                            0352 266 731
                                        </p>
                                        <p>
                                            hotelelephantbay@gmail.com
                                        </p>
                                        <p>
                                            24 * 7 Open
                                        </p>
                                    </div>
                                    <a href="reservation.php" class="btn btn-outline-success">Make a Reservation</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3957.479043604624!2d80.384844!3d7.299952!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae315b600d91503%3A0x9726fadff0186906!2sHotel%20Elephant%20Bay!5e0!3m2!1sen!2slk!4v1582182230941!5m2!1sen!2slk" width="600" height="450" frameborder="0" style="border:0;width: 100%;" allowfullscreen=""></iframe>    
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
