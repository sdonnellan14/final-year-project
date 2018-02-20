
  <!-- php login setup aided by following tutorials: http://www.softaox.info/how-to-create-a-simple-login-form-in-php-mysqli-tutorial/, http://kelvline.nivlec.com/php-mysqli-login-registration-tutorial/ , http://www.allphptricks.com/simple-user-registration-login-script-in-php-and-mysqli/ -->
<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
 
 