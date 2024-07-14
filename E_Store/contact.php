<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
    ?> 

    <div class="container text-style" id="content">
        <div class="row">
            <div class="col-sm-9">
                <h3> SUPPORT</h3>
                <h5> Technical Support</h5>
                <p>
                   How Can We Help?

Please select a topic below related to your inquiry. If you don’t find what you need, fill out our contact form.
                    We’re here to help and answer any question you might have. We look forward to hearing from you 🙂
                </p>
            </div>
            <div class="col-sm-3">
                <img class="img-responsive" src="image/cont.jpg" alt="contact image">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <h3 class="contact">CONTACT US</h3>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label><br>
                        <textarea class="form-control" name="message" id="message" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
            <div class="col-sm-4">
                <h3>Company Information :</h3>
                <p>E-Store , Karad, Maharashtra</p>
                <p>Pin- </p>
                <p>Karad</p>
                <p>Phone:(91) 9322219386</p>
                <p>Fax: (000) 000 00 00 0</p>
                <p>Email: mobilestore@mycompany.com</p>
                <p></p>
            </div>
        </div>
    </div>
    <?php 
$server = "localhost";
$username = "root";
$password = "";
$database = "e_store";

$conn = mysqli_connect($server, $username, $password, $database);


    if (isset($_POST["email"])) {
    
$email = $_POST["email"];
$name =  $_POST["name"];
$message =$_POST["message"];
    
    
    $message = "INSERT INTO contact(name, email, message) VALUES ('$name', '$email', '$message')";
    $result = mysqli_query($conn,$message);
}

?>

    <!--Footer-->
    <?php 
            require './includes/footer.php';
    ?>
</body>

</html>