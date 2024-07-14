<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>PHP Script to send mail</h1>
    <?php
        $To = "asp310768@gmail.com";
        $Sub = "PHP Mail Sending Session";
        $Msg = "Hey Niranjan, I am sending this mail through php script.";
        $Header = "From:nraje000@gmail.com";
        if(mail($To,$Sub,$Msg,$Header)){
            echo "<h2>Email is sent successfully to ".$To."</h2>";
        }
        else{
            echo "<h2>Email is not sent.<h2>";
        }
    ?>
</body>
</html>
