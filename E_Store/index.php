<?php
    // including common.php 
    require './includes/common.php';

    if (isset($_SESSION['email'])) {
        header('location: home.php');
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- bootstrap minified css  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Custom CSS -->
    <link href="css/index.css" rel="stylesheet">
    <script src="js/js/wow.min.js"></script>
    <link rel="stylesheet" href="css/animate.css-master/animate.min.css">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

</head>

<body>

    <!-- Header -->
    <?php
    require './includes/header.php';
    ?>
    <div class="container-fluid " id="content">
        <div class="row">
            <div class="col-sm-4 animated slideInUp wow">
                <div class="panel panel-default animated slideInUp wow">
                    <div class="panel-heading">
                        Mobile 1
                    </div>
                    <div class="panel-body text-center card hoverable">
                        <img src="image/img1.jpg" alt="firstMobile" class="img-padding">
                        <p>OnePlus 9 5G (Winter Mist, 12GB RAM, 256GB Storage)</p>
                        <p>Price: Rs. 79,999</p>
                        <p><a href="" data-toggle="modal"
                        data-target="#exampleModal" role="button" class="btn btn-warning btn-block">Order Now!</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 animated slideInUp wow">
                <div class="panel panel-default animated slideInUp wow">
                    <div class="panel-heading">
                        Mobile 2
                    </div>
                    <div class="panel-body text-center card hoverable">
                        <img src="image/img2.jpg" alt="firstMobile" class="img-padding">
                        <p>OnePlus Nord 2 5G (Blue Haze, 12GB RAM, 256GB Storage)</p>
                        <p>Price: Rs. 59,202</p>
                        <p><a href="" data-toggle="modal"
                        data-target="#exampleModal" role="button" class="btn btn-warning btn-block">Order Now!</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 animated slideInUp wow">
                <div class="panel panel-default animated slideInUp wow">
                    <div class="panel-heading">
                        Mobile 3
                    </div>
                    <div class="panel-body text-center card hoverable ">
                        <img src="image/img3.jpg" alt="firstMobile" class="img-padding">
                        <p>OnePlus Nord CE 5G (Charcoal Ink, 8GB RAM, 128GB Storage)</p>
                        <p>Price: Rs. 56,990</p>
                        <p><a href="" data-toggle="modal"
                        data-target="#exampleModal" role="button" class="btn btn-warning btn-block">Order Now!</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4 animated slideInUp wow">
                <div class="panel panel-default animated slideInUp wow">
                    <div class="panel-heading">
                        Mobile 4
                    </div>
                    <div class="panel-body text-center card hoverable ">
                        <img src="image/img4.jpg" alt="firstMobile" class="img-padding">
                        <p>Samsung Galaxy M31s (Mirage Blue, 8GB RAM, 128GB Storage)</p>
                        <p>Price: Rs. 18,900</p>
                        <p><a href="" data-toggle="modal"
                        data-target="#exampleModal" role="button" class="btn btn-warning btn-block">Order Now!</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 animated slideInUp wow">
                <div class="panel panel-default animated slideInUp wow">
                    <div class="panel-heading">
                        Mobile 5
                    </div>
                    <div class="panel-body text-center card hoverable ">
                        <img src="image/img5.jpg" alt="firstMobile" class="img-padding">
                        <p>Samsung Galaxy Z Fold3 5G (Phantom Green, 12GB RAM, 256GB Storage)</p>
                        <p>Price: Rs. 10,499</p>
                        <p><a href="" data-toggle="modal"
                        data-target="#exampleModal" role="button" class="btn btn-warning btn-block">Order Now!</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 animated slideInUp wow">
                <div class="panel panel-default animated slideInUp wow">
                    <div class="panel-heading">
                        Mobile 6
                    </div>
                    <div class="panel-body text-center card hoverable">
                        <img src="image/img6.jpg" alt="firstMobile" class="img-padding">
                        <p>Vivo V19 (Mystic Silver, 8GB RAM, 128GB Storage)</p>
                        <p>Price: Rs. 19,999</p>
                        <p><a href="" data-toggle="modal"
                        data-target="#exampleModal" role="button" class="btn btn-warning btn-block">Order Now!</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer-->
    <?php
    require './includes/footer.php';
    ?>
</body>

</html>