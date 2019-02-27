<?php
   include("config.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);
      $mypassword = strtoupper($mypassword);
      $myusername = strtoupper($myusername);
      $mypassword = $myusername . ':' . $mypassword;
      $mypassword = strtoupper(sha1($mypassword));



      $sql = "SELECT id FROM account WHERE username = '$myusername' and sha_pass_hash = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      /*$active = $row['active'];

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   } */
?>
<form action="" method="post">
    <input type="text" name="username" placeholder="Enter your username" required>
    <input type="password" name="password" placeholder="Enter your password" required>
    <input type="submit" value="Submit">
</form>
