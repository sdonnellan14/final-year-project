<?php

//Session variables created with the assistance of:
// - https://stackoverflow.com/questions/22486793/warning-mysqli-fetch-array-expects-parameter-1-to-be-mysqli-result-boolean-g
// - https://stackoverflow.com/questions/9023470/using-a-session-variable-in-a-sql-where-statement
// - https://stackoverflow.com/questions/10097887/using-sessions-session-variables-in-a-php-login-script
// - https://www.w3schools.com/php/php_sessions.asp


include("loginserv.php"); // Include loginserv for checking username and password
?>
<!DOCTYPE html>
<html lang="en">

  <!-- php login setup aided by following tutorials: http://www.softaox.info/how-to-create-a-simple-login-form-in-php-mysqli-tutorial/, http://kelvline.nivlec.com/php-mysqli-login-registration-tutorial/ , http://www.allphptricks.com/simple-user-registration-login-script-in-php-and-mysqli/ -->

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Small Business - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/small-business.css" rel="stylesheet">
    
    <meta charset="UTF-8">
<title>Login</title>
<style>
.login{
width:360px;
margin:50px auto;
font:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
border-radius:10px;
border:2px solid #ccc;
padding:10px 40px 25px;
margin-top:70px; 
}
input[type=text], input[type=password]{
width:99%;
padding:10px;
margin-top:8px;
border:1px solid #ccc;
padding-left:5px;
font-size:16px;
font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif; 
}
input[type=submit]{
width:100%;
background-color:#009;
color:#fff;
border:2px solid #06F;
padding:10px;
font-size:20px;
cursor:pointer;
border-radius:5px;
margin-bottom:15px; 
}
</style>

  </head>
  
  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Agri-Compare</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logintype.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 
<div class="login">
<h1 align="center">Login</h1>
<form action="" method="post" style="text-align:center;">
<input type="text" placeholder="Email" id="MartEmail" name="MartEmail"><br/><br/>
<input type="password" placeholder="Password" id="MartPassword" name="MartPassword"><br/><br/>
<input type="submit" value="Login" name="submit">
<!-- Error Message -->
<span><?php echo $error; ?></span>

</body>
</html>