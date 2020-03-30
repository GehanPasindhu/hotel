<?php

if (isset($_POST['login'])) {
    $uemail = $_POST['exampleInputEmail1'];
    $upw = $_POST['exampleInputPassword1'];

    $searchcustomer = "select * from customer where email='$uemail' && password = '$upw'";
    $searchemployee = "select * from elog where email='$uemail' && password = '$upw'";
    $searchadmin = "select * from admin where email='$uemail' && password = '$upw'";

    $rsuser = mysqli_query($connection, $searchcustomer);
    $rsemp = mysqli_query($connection, $searchemployee);
    $rsadmin = mysqli_query($connection, $searchadmin);
//                                        $rowuser = mysqli_fetch_array($rsuser, MYSQLI_ASSOC);
    if ($rsuser) {
        while ($rowuser = mysqli_fetch_array($rsuser)) {
//                                    $_SESSION['customer'] = $rowuser['idcustomer'];
            header("location: ../index.php");
            die();
        }
    } else if ($rsemp) {
        while ($rowuser = mysqli_fetch_array($rsemp)) {
//                                    $_SESSION['customer'] = $rowuser['icustomer'];
            header("location: ../index.php");
            die();
        }
    } else if ($rsadmin) {
        while ($rowuser = mysqli_fetch_array($rsadmin)) {
//                                    $_SESSION['customer'] = $rowuser['icustomer'];
            header("location: ../admin/dashboard.php");
            die();
        }
    } else {
        echo "<br>";
        echo 'Account Invalid ';
    }
}
?>