<?php 
		require './includes/common.php';
		include('app_logic.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Password Reset PHP</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body style="background-color:aquamarine">

	<form class="login-form" action="login.php" method="post" style="text-align: center; background-color:beige">
		<p>
			We sent an email to  <b><?php echo $_GET['email'] ?></b> to help you recover your account. 
		</p>
	    <p>Please login into your email account and click on the link we sent to reset your password</p>
	</form>
		
</body>
</html>