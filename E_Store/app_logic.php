<?php
    require './includes/common.php';
    $errors = [];
if (isset($_POST['reset-password'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $query = "SELECT email FROM users WHERE email='$email'";
    $results = mysqli_query($con, $query);
  
    if (empty($email)) {
      array_push($errors, "Email is required!");
    }else if(mysqli_num_rows($results) <= 0) {
      array_push($errors, "Account doesn't exit with this email");
    }
      $token = bin2hex(random_bytes(50));
    $_SESSION['token'] = $token;
  
    if (count($errors) == 0) {
      $sql = "INSERT INTO password_resets(email, token) VALUES ('$email', '$token')";
      $results = mysqli_query($con, $sql);
        $to = $email;
      $subject = "Reset your password on E-store.com";
      $msg = "Hey, click on this <a href=\"http://localhost/FinalProject/new_pass.php?token=" . $token . "\">link</a> to reset your password on our site";
      $msg = wordwrap($msg,70);
      $headers = 'From: xyz@gmail.com';
      
      $send = mail($to, $subject, $msg, $headers);
      if($send){
      header('location: pending.php?email=' . $email);
      }
      else{
        echo "Email sending failed...";
      }
    }
  }
  
  if (isset($_POST['new_password'])) {
    $new_pass = mysqli_real_escape_string($con, $_POST['new_pass']);
    $new_pass_c = mysqli_real_escape_string($con, $_POST['new_pass_c']);
  
    $token = $_SESSION['token'];
    if (empty($new_pass) || empty($new_pass_c)) array_push($errors, "Password is required");
    if ($new_pass !== $new_pass_c) array_push($errors, "Password do not match");
    if (count($errors) == 0) {
      $sql = "SELECT email FROM password_resets WHERE token='$token' LIMIT 1";
      $results = mysqli_query($con, $sql);
      $email = mysqli_fetch_assoc($results)['email'];
  
      if ($email) {
        $new_pass = md5($new_pass);
        $sql = "UPDATE users SET password='$new_pass' WHERE email='$email'";
        $results = mysqli_query($con, $sql);
        header('location: index.php');
      }
    }
  }
