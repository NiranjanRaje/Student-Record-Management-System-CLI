<?php
require './includes/common.php';
// check if logged in
if (!isset($_SESSION["email"])) {
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <!-- bootstrap minified css  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Custom CSS -->
    <link href="css/index.css" rel="stylesheet">
</head>

<body>

    <!-- Header -->
    <?php
    require './includes/header.php';
    $user_id = $_SESSION["id"];
    $query = "SELECT p.id, p.name, p.price FROM items p INNER JOIN users_items up ON up.item_id = p.id WHERE up.user_id = '$user_id' AND up.status = 'Added to cart'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    if (mysqli_num_rows($result) == 0) {
        if (isset($_GET["removed"])) {
            echo '
                                    <div id="content1">
                                        <div class="container">
                                            <div class="alert alert-success">
                                            ' . $_GET['removed'] . ' </b>
                                            </div>
                                        </div>
                                    </div>';
        } else {
            echo '<div id="content1">
                                            <div class="container"><div class="alert">
                                                    Add products to the cart first. Go to <a href="home.php">Products</a> page.</h4>
                                                </div>
                                            </div>
                                        </div>';
        }
    } else {
        $total = 0;
    ?>
        <div id="content1">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                            <?php while ($row = mysqli_fetch_array($result)) { ?>

                                <?php
                                $itmid = $row["id"];
                                $itmname = $row["name"];
                                ?>
                                <tr>
                                    <td><?php echo $row["id"] ?></td>
                                    <td><?php echo $row["name"] ?></td>
                                    <td><?php $total += $row["price"];
                                        echo $row["price"] ?></td>
                                    <td><a href="cart-remove.php?id=<?php echo $row["id"]; ?>">Remove</a></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Total: <i class="fa fa-rupee"></i> <?php echo $total; ?></td>

                                <td>
                                    <form action="" method="post">
                                        <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                                    </form>
                                </td>
                                <!-- <td><a href="temp.php" class="btn btn-primary">Confirm Order</a></td> -->
                                <!-- <td><a href="success.php" class="btn btn-primary">Confirm Order</a></td> -->
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!--Footer-->
    <?php
    }
    require './includes/footer.php';

    ?>


</body>

</html>

<?php


if (isset($_POST['submit'])) {
    
    $userName = "";
    $userEmail = "";
    $userMo = "";
    $userAddress = "";
    $userCity = "";
    $totprice = $total;

    $user_id = $_SESSION['id'];

    $userData = "SELECT * FROM `users` WHERE `id`='$user_id' ";
    $res = mysqli_query($con, $userData);

    while ($row = mysqli_fetch_assoc($res)) {
        $userName = $row['name'];
        $userEmail = $row['email'];
        $userMo = $row['contact'];
        $userAddress = $row['address'];
        $userCity = $row['city'];
    }
    // echo mysqli_query($con,$selectuser);
    $delete  = "DELETE * FROM `users` WHERE `id`='$user_id' ";
    $insertOrder = "INSERT INTO `orders`(`itmid`, `name`, `price`, `username`, `email`, `address`, `city`, `status`) 
    VALUES ('$itmid','$itmname','$totprice','$userName','$userEmail','$userAddress','$userCity','Placed')";

    // $insertOrder = "INSERT INTO `orders`(`itmid`, `name`, `price`, `username`) 
    // VALUES ('$itmid','$itmname','$totprice','jayesh')";




    $result=mysqli_query($con, $insertOrder);
    $query = "DELETE FROM users_items WHERE user_id = '$user_id'";
    mysqli_query($con, $query);
    header('location: success.php');
    require 'success.php';
    

   
}


?>