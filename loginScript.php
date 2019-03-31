<?php
error_reporting(E_ERROR);
$email = $_POST['email'];
$password = $_POST['password'];

  if ($email != "" && $password != "") {
    echo "Entro <br><br>";
    echo "Email: ".$email;
    echo "<br> Password: ".$password;
    header('location:index.php');
  }else {
    header('location:login.php');
    // echo "<script>history.back();</script>";
  }

 ?>
