<?php
include '../common/database.php';

$dataPoints = array(
    array("x" => 946665000000, "y" => 3289000),
    array("x" => 978287400000, "y" => 3830000),
    array("x" => 1009823400000, "y" => 2009000),
    array("x" => 1041359400000, "y" => 2840000),
    array("x" => 1072895400000, "y" => 2396000),
    array("x" => 1104517800000, "y" => 1613000),
    array("x" => 1136053800000, "y" => 1821000),
    array("x" => 1167589800000, "y" => 2000000),
    array("x" => 1199125800000, "y" => 1397000),
    array("x" => 1230748200000, "y" => 2506000),
    array("x" => 1262284200000, "y" => 6704000),
    array("x" => 1293820200000, "y" => 5704000),
    array("x" => 1325356200000, "y" => 4009000),
    array("x" => 1356978600000, "y" => 3026000),
    array("x" => 1388514600000, "y" => 2394000),
    array("x" => 1420050600000, "y" => 1872000),
    array("x" => 1451586600000, "y" => 2140000)
);
?>

<html>
    <head>
        <script src="https://use.fontawesome.com/e052114790.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
        <meta charset="UTF-8">
        <title></title>
        <script>
            window.onload = function () {

                var chart = new CanvasJS.Chart("chartContainer", {
                    animationEnabled: true,
                    title: {
                        text: "Company Revenue by Year"
                    },
                    axisY: {
                        title: "Revenue in USD",
                        valueFormatString: "#0,,.",
                        suffix: "mn",
                        prefix: "$"
                    },
                    data: [{
                            type: "spline",
                            markerSize: 5,
                            xValueFormatString: "YYYY",
                            yValueFormatString: "$#,##0.##",
                            xValueType: "dateTime",
                            dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                        }]
                });

                chart.render();
                $('#roomtype').show();
                $('#addroom').hide();
                $('#allroomtype').hide();
                $('#allrooms').hide();
            }
        </script>

        <style>
            body{
                background-color: #F8F9F9 ;
            }
            .stats-icon.stats-icon-lg{
                font-size: 50px;
            }
            .stats-icon{
                font-size: 40px;
                text-align:left;
                line-height: 20px;
            }
            .stats-title {
                position: relative;
                line-height: 1.1;
                font-size: 15px;
                margin: 2px 0 7px;
            }
            .stats-number {
                font-size: 25px;
                font-weight: 300;
                margin-bottom: 10px;
            }
            .fa-fw {
                width: 1.28571429em;
                text-align: left;
            }
            .fa {
                display: inline-block;
                font: normal normal normal 14px/1 FontAwesome;
                font-size: 14px;
                font-size: inherit;
                text-rendering: auto;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
                transform: translate(0, 0);
            }

            .row{
                padding-top: 10px;
                margin-bottom: 10px;
            }

            hr{
                border: 1px solid blue;
                width: 100%;
            }
            .myImage{
                margin-bottom: 10px;
            }
            .upload-btn-wrapper {
                position: relative;
                overflow: hidden;
                display: inline-block;
            }

            .upload-btn-wrapper input[type=file] {
                font-size: 100px;
                position: absolute;
                left: 0;
                top: 0;
                opacity: 0;
            }
        </style>
    </head>
    <body>
        <?php
        include './adminNav.php';
        ?>

        <div class="container" style="padding-top: 30px;" id="main">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Room Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Contact Messages</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="col col-lg-12" style="padding-top: 20px;">
                        <div class="row row-cols-2 row-cols-md-3">
                            <div class="col-lg-3 mb-3">
                                <div class="card" >
                                    <div class="card-body" style="background-color: #D6EAF8 ">
                                        <div class="card-text">
                                            <div class="row">
                                                <div class="col-lg-3 stats-icon stats-icon-lg">
                                                    <i class="fa fa-key fa-fw"></i>
                                                </div>
                                                <div class="col-lg-9 text-right">
                                                    <div class="stats-number ">
                                                        <?php
                                                        $countroomtype = "select * from rtype";
                                                        $rrtype = mysqli_query($connection, $countroomtype);

                                                        $countrtype = mysqli_num_rows($rrtype);
                                                        echo $countrtype;
                                                        ?>
                                                    </div>
                                                    <div class="stats-title">
                                                        Room Types
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-transparent text-info">
                                        Add New
                                    </div>
                                </div> 
                            </div>

                            <div class="col-lg-3 mb-3">
                                <div class="card" >
                                    <div class="card-body" style="background-color: #D4EFDF ">
                                        <div class="card-text">
                                            <div class="row">
                                                <div class="col-lg-3 stats-icon stats-icon-lg">
                                                    <i class="fa fa-list fa-fw"></i>
                                                </div>
                                                <div class="col-lg-9 text-right">
                                                    <div class="stats-number ">
                                                        11
                                                    </div>
                                                    <div class="stats-title">
                                                        New Bookings
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-transparent text-success">
                                        View Details
                                    </div>
                                </div> 
                            </div>

                            <div class="col-lg-3 mb-3">
                                <div class="card" >
                                    <div class="card-body" style="background-color: #FAD7A0 ">
                                        <div class="card-text">
                                            <div class="row">
                                                <div class="col-lg-3 stats-icon stats-icon-lg">
                                                    <i class="fa fa-thumbs-up fa-fw"></i>
                                                </div>
                                                <div class="col-lg-9 text-right">
                                                    <div class="stats-number ">
                                                        0
                                                    </div>
                                                    <div class="stats-title" style="font-size: 15px;">
                                                        Confirmed Bookings
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-transparent text-warning">
                                        View Details
                                    </div>
                                </div> 
                            </div>

                            <div class="col-lg-3 mb-3">
                                <div class="card" >
                                    <div class="card-body" style="background-color: #F5B7B1  ">
                                        <div class="card-text">
                                            <div class="row">
                                                <div class="col-lg-3 stats-icon stats-icon-lg">
                                                    <i class="fa fa-list-alt fa-fw"></i>
                                                </div>
                                                <div class="col-lg-9 text-right">
                                                    <div class="stats-number ">
                                                        21
                                                    </div>
                                                    <div class="stats-title">
                                                        Meal Menu
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-transparent text-danger">
                                        Add New
                                    </div>
                                </div> 
                            </div>
                        </div>

                        <div class="row">
                            <div class="text-success">
                                <h3> Latest Bookings </h3> 
                                <hr>
                            </div>
                            <div class="table-responsive-sm">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">Code</th>
                                            <th scope="col">Room</th>
                                            <th scope="col">Check In</th>
                                            <th scope="col">Check Out</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Customer Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Contact Number</th>
                                            <th scope="col">Remark</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">view</th>
                                            <td>1</td>
                                            <td>B2</td>
                                            <td>2020-01-01</td>
                                            <td>2020-01-10</td>
                                            <td>$1500</td>
                                            <td>John Cane</td>
                                            <td>john@gmail.com</td>
                                            <td>+97 123 456 789</td>
                                            <td>Good Service</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-lg-8">
                                <h3> Company Revenue </h3>
                                <hr>
                                <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                            </div>
                            <div class="col-lg-4">
                                <h3> Special Offers </h3> 
                                <hr>
                                <ul class="list-group">
                                    <li class="list-group-item">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Morbi leo risus</li>
                                    <li class="list-group-item">Porta ac consectetur ac</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>

                                <input class="btn btn-outline-info btn-lg" type="button" value="View All Offers" style="margin-top: 5px; width: 100%">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    Display all the contact us messages or emails
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                    <div class="col-lg-12 mb-3" style="margin-top: 30px;">
                        <div class="row">
                            <div class="col-lg-2 mb-2">
                                <div class="mb-3" onclick="$('#roomtype').show();
                                        $('#addroom').hide();
                                        $('#allroomtype').hide();
                                        $('#allrooms').hide();">
                                    Add Room Type
                                </div>
                                <div class="mb-3" onclick="$('#roomtype').hide();
                                        $('#addroom').show();
                                        $('#allroomtype').hide();
                                        $('#allrooms').hide();">
                                    Add Room
                                </div>
                                <div class="mb-3" onclick="$('#roomtype').hide();
                                        $('#addroom').hide();
                                        $('#allroomtype').show();
                                        $('#allrooms').hide();">
                                    All Room Types
                                </div>
                                <div class="mb-3" onclick="$('#roomtype').hide();
                                        $('#addroom').hide();
                                        $('#allroomtype').hide();
                                        $('#allrooms').show();">
                                    All Rooms Details
                                </div>
                            </div>
                            <div class="col-lg-10 mb-2" style="padding-left: 2px;">
                                <div id="roomtype" class="mb-2">
                                    <div class="display-4 caption h5">
                                        Add Room Type
                                    </div>
                                    <form method="post" action=""  enctype="multipart/form-data">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="roomtype">Room Type</label>
                                                <input type="text" class="form-control" id="roomtype" name="roomtype" placeholder="Dulex Rooms">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="price">Price</label>
                                                <input type="text" class="form-control" id="price" name="price" nkeypress="return isNumber(event)" placeholder="1000">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-lg-6">
                                                <label for="description">Description</label>
                                                <textarea class="form-control" name="description" id="description" placeholder="Description About Book" rows="10"></textarea>
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label for="imageUpload">Product Image</label>
                                                <div class="file-field" id="imageUpload">
                                                    <div class="myImage">
                                                        <img id="previe" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg" class="img-fluid" alt="image">
                                                    </div>
                                                    <div class="upload-btn-wrapper">
                                                        <button class="btn btn btn-outline-primary btn-block" ><i class="fas fa-cloud-upload-alt"></i><span>   Choose Image</span></button>
                                                        <input type="file" class="form-control-file" name="image" id="image" onchange="imageUpdate()"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-outline-success" id="typecreatebtn" name="typecreatebtn" value="Create Room Type">
                                    </form>
                                    <?php
                                    if (isset($_POST['typecreatebtn'])) {
                                        $typename = $_POST['roomtype'];
                                        $price = $_POST['price'];
                                        $description = $_POST['description'];
                                        $target = "../images/rooms/" . basename($_FILES['image']['name']);
                                        $image = $_FILES['image']['name'];

                                        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                                            $sqroomtypes = "insert into rtype (type,description,image,price)"
                                                    . "values ('$typename','$description','$image','$price')";
                                            $qstate = mysqli_query($connection, $sqroomtypes);
                                            if ($qstate) {
                                                echo "<script type='text/javascript'>alert('New Room Type Saved');</script>";
                                            } else {
                                                $message = 'Error' . mysqli_error($connection);
                                                echo "<script type='text/javascript'>alert('$message');</script>";
                                            }
                                        } else {
                                            $echo = "There was a problem uploading image";
                                            echo "<script type='text/javascript'>alert('$echo');</script>";
                                        }
                                    }
                                    ?>
                                </div>

                                <div id="addroom" class="mb-2">
                                    <div class="col-lg-4 caption h4">
                                        Add Room
                                    </div>
                                </div>

                                <div id="allroomtype" class="mb-2">
                                    <div class="col-lg-4 caption h4">
                                        All Room Types
                                    </div>
                                    <table class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Image</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                              while ($cresultrow = mysqli_fetch_array($rrtype)) {
                                            ?>
                                            <tr>
                                                <th scope="row">
                                                <?php
                                                    echo  $cresultrow['idrtype'];
                                                    ?>
                                                </th>
                                                <th>
                                                    <?php
                                                    echo  $cresultrow['type'];
                                                    ?>
                                                </th>
                                                <td>
                                                    <?php
                                                    echo  $cresultrow['description'];
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    echo  $cresultrow['price'];
                                                    ?>
                                                </td>
                                                <td>
                                                    <img src="../images/rooms/<?php echo  $cresultrow['image'];?>" class="rounded img-thumbnail" style="height:100px; width: 150px; border-radius: 4px;" alt="Responsive image" title="Click For More Information">
                                                   
                                                </td>
                                            </tr>
                                            <?php
                                              }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>

                                <div id="allrooms" class="mb-2">
                                    <div class="col-lg-4 caption h4">
                                        All Room Details
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 

        <script>
                                                            function isNumber(event) {
                                                                var keyCode = event.keyCode;
                                                                if (keyCode >= 48 && keyCode <= 57) {
                                                                    return true;
                                                                }
                                                                return false;
                                                            }

                                                            function imageUpdate() {
                                                                var file = document.getElementById("image").files[0];
                                                                var reader = new FileReader();
                                                                reader.readAsDataURL(file);
                                                                reader.onload = function (content) {
                                                                    document.getElementById("previe").src = content.target.result;
                                                                };
                                                            }
        </script>
    </body>
</html>
