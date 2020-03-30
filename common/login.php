<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include './database.php';
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hotel Elephant Bay</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
        <style>
            body{
                background:url('../images/logBack.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                padding-bottom: 50px;
                color: white;
            }
            form{
                border: 1px solid #005cbf;
                padding: 20px 20px 20px 20px;
                border-radius: 4px;
            }
            .container{
                background: linear-gradient(0deg,rgba(0,0,0,0.6),rgba(0,0,0,0.6));
                margin-top: 50px;
                padding: 20px;
                border-radius: 4px;
            }
            h3{
                color: whitesmoke;
            }
        </style>

    </head>
    <body>
        <div class="container d-flex">
            <div class="col-lg-12">
                <div class=" d-flex justify-content-center">
                    <div class="px-3 pt-3 pb-1">
                        <h1 class="text-white text-center display-4">
                            Hotel Elephant Bay
                        </h1>
                        <p class="text-white text-center">Enhancing Life around great food</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-3 mb-3">
                        <form method="post" action="">
                            <h3 class="text-center">
                                Create Account
                            </h3>
                            <div class="form-group">
                                <label for="inputname">Name</label>
                                <input type="text" class="form-control" id="inputname" name="inputname">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4" name="inputEmail4">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Password</label>
                                    <input type="password" class="form-control" id="inputPassword4" name="inputPassword4">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Check me out
                                    </label>
                                </div>
                            </div>
                            <button type="submit" name="reg" id="reg" class="btn btn-primary">
                                Create Account
                            </button>
                        </form>
                        <?php
                        if (isset($_POST['reg'])) {
                            $name = $_POST['inputname'];
                            $email = $_POST['inputEmail4'];
                            $pw = $_POST['inputPassword4'];

                            $newuseradd = "insert into customer(name,email,password) values('$name','$email','$pw')";
                            $con = mysqli_query($connection, $newuseradd);
                            if ($con) {
                                echo "<script type='text/javascript'>alert('Welcome To My Hotel. Login To site for more advantages');</script>";
                                ?>
                                <script>
                                    location.replace("login.php#exampleInputEmail1");
                                </script>
                                <?php
                            }
                        }
                        ?>
                    </div>

                    <div class="col-lg-6 col-md-3 mb-3">
                        <form method="post" action="">
                            <h3 class="text-center">
                                Login
                            </h3>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" aria-describedby="emailHelp" required="">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="exampleInputPassword1" required="">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" name="login" id="login" class="btn btn-primary">
                                Login
                            </button>
                        </form>

                        <?php
                        if (isset($_POST['login'])) {
                            $uemail = $_POST['exampleInputEmail1'];
                            $upw = $_POST['exampleInputPassword1'];

                            $searchuser = "select * from customer where email='$uemail' && password = '$upw'";
                            $rcustomer = mysqli_query($connection, $searchuser);
                            $rowuser = mysqli_fetch_array($rcustomer, MYSQLI_ASSOC);
                            $count = mysqli_num_rows($rcustomer);
                            if ($count == 1) {
                                $_SESSION['customer'] = $uemail;
                                $cu_check = $_SESSION['customer'];
                                $s = mysqli_query($connection, "select name from customer where email='$cu_check'");
                                $rowc = mysqli_fetch_array($s, MYSQLI_ASSOC);
                                $login_session = $rowc['name'];
                                $_SESSION['customer'] = $login_session;
                                echo "<script type='text/javascript'>alert('Welcome $login_session');</script>";
                                ?>
                                <script>
                                    location.replace("../index.php");
                                </script>
                                <?php
                            } else {
                                $searchadmin = "select * from admin where email='$uemail' && password = '$upw'";
                                $radmin = mysqli_query($connection, $searchadmin);
                                $rowadmin = mysqli_fetch_array($radmin, MYSQLI_ASSOC);
                                $countadmin = mysqli_num_rows($radmin);
                                if ($countadmin == 1) {
                                    $_SESSION['admin'] = $uemail;
                                    $cu_check = $_SESSION['admin'];
                                    $s = mysqli_query($connection, "select name from admin where email='$cu_check'");
                                    $rowc = mysqli_fetch_array($s, MYSQLI_ASSOC);
                                    $login_session = $rowc['name'];
                                    $_SESSION['admin'] = $login_session;
                                    echo "<script type='text/javascript'>alert('Welcome $login_session');</script>";
                                    ?>
                                    <script>
                                        location.replace("../admin/dashboard.php");
                                    </script>
                                    <?php
                                } else {
                                    echo "<script type='text/javascript'>alert('Your Login Name or Password Incorrect');</script>";
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
    </body>
</html>
