<?php
    require './includes/common.php';

    if(!isset($_SESSION['email'])){
        header('location: index.php');
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
			require './includes/check-if-added.php';
    ?>

    <div class="container-fluid" id="content1">
        <div class="row">
            <div class="col-sm-4 animated slideInUp wow">
                <div class="panel panel-default animated slideInUp wow">
                    <div class="panel-heading">
                        #1
                    </div>
                    <div class="panel-body text-center card hoverable">
                        <img src="image/img1.jpg" alt="Mobile" class="img-padding">
                        <p>OnePlus 9 5G (Winter Mist, 12GB RAM, 256GB Storage) I Additional upto INR7000 off on Exchange</p>
                        <p>Price: Rs. 79,999</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                              <?php   } else {
                                       if (check_if_added_to_cart(1)) { 
                                          echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                       } else {  ?>
                              <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php
                                  }
                             }
                        ?>                    
                    </div>
                </div>
            </div>
            <div class="col-sm-4 animated slideInUp wow">
                <div class="panel panel-default animated slideInUp wow">
                    <div class="panel-heading">
                        #2
                    </div>
                    <div class="panel-body text-center card hoverable">
                        <img src="image/img2.jpg" alt="Mobile" class="img-padding">
                        <p>OnePlus Nord 2 5G (Blue Haze, 12GB RAM, 256GB Storage)</p>
                        <p>Price: Rs. 59,202</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                              <?php   } else {
                                       if (check_if_added_to_cart(2)) { 
                                          echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                       } else {  ?>
                              <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php
                                  }
                             }
                        ?> 
                    </div>
                </div>
            </div>
            <div class="col-sm-4 animated slideInUp wow">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        #3
                    </div>
                    <div class="panel-body text-center card hoverable">
                        <img src="image/img3.jpg" alt="Mobile" class="img-padding">
                        <p>OnePlus Nord CE 5G (Charcoal Ink, 8GB RAM, 128GB Storage)</p>
                        <p>Price: Rs. 56,990</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                              <?php   } else {
                                       if (check_if_added_to_cart(3)) { 
                                          echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                       } else {  ?>
                              <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php
                                  }
                             }
                        ?> 
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 animated slideInUp wow">
                <div class="panel panel-default animated slideInUp wow">
                    <div class="panel-heading">
                        #4
                    </div>
                    <div class="panel-body text-center card hoverable">
                        <img src="image/img4.jpg" alt="Mobile" class="img-padding">
                        <p>Samsung Galaxy M31s (Mirage Blue, 8GB RAM, 128GB Storage)</p>
                        <p>Price: Rs. 18,900</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                              <?php   } else {
                                       if (check_if_added_to_cart(4)) { 
                                          echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                       } else {  ?>
                              <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php
                                  }
                             }
                        ?> 
                    </div>
                </div>
            </div>
            <div class="col-sm-4 animated slideInUp wow">
                <div class="panel panel-default animated slideInUp wow">
                    <div class="panel-heading">
                        #5
                    </div>
                    <div class="panel-body text-center card hoverable">
                        <img src="image/img5.jpg" alt="Mobile" class="img-padding">
                        <p>Samsung Galaxy Z Fold3 5G (Phantom Green, 12GB RAM, 256GB Storage)</p>
                        <p>Price: Rs. 10,499</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                              <?php   } else {
                                       if (check_if_added_to_cart(5)) { 
                                          echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                       } else {  ?>
                              <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php
                                  }
                             }
                        ?> 
                    </div>
                </div>
            </div>
            <div class="col-sm-4 animated slideInUp wow">
                <div class="panel panel-default animated slideInUp wow">
                    <div class="panel-heading">
                        #6
                    </div>
                    <div class="panel-body text-center card hoverable">
                        <img src="image/img6.jpg" alt="Mobile" class="img-padding">
                        <p>Vivo V19 (Mystic Silver, 8GB RAM, 128GB Storage)</p>
                        <p>Price: Rs. 19,999</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                              <?php   } else {
                                       if (check_if_added_to_cart(6)) { 
                                          echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                       } else {  ?>
                                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php
                                  }
                             }
                        ?> 
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