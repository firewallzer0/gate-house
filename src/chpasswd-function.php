<?php
  //Escape special characters
  $oldpassword = mysqli_real_escape_string($con, $_POST['oldpassword']);
  $password1 = mysqli_real_escape_string($con, $_POST['password1']);
  $password2 = mysqli_real_escape_string($con, $_POST['password2']);

  if ($password1 == $password2){
    //Update Password in Database
    //Update V and S using SRP6 Challenge

  } else {
    //Passwords don't match try again.

  }

?>
