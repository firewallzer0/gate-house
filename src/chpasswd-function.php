<?php
  //Escape special characters
  $oldpassword = mysqli_real_escape_string($con, $_POST['oldpassword']);
  $password1 = mysqli_real_escape_string($con, $_POST['password1']);
  $password2 = mysqli_real_escape_string($con, $_POST['password2']);

  if ($password1 == $password2){
    //Update Password in Database
    $userid = strtoupper($user);
    $password1 = strtoupper($password1);
    $srp = $user, ":", $password1;
    $passhash = sha1($srp)
    $update = "UPDATE account SET sha_pass_hash='$passhash' WHERE username='$user' AND sha_pass_hash='$passhash';"
    $conn = new mysqli();
    mysql
    //Update V and S using SRP6 Challenge

  } else {
    //Passwords don't match try again.

  }

?>
