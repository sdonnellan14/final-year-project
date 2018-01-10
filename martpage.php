<?php 

//Session variables created with the assistance of:
// - https://stackoverflow.com/questions/22486793/warning-mysqli-fetch-array-expects-parameter-1-to-be-mysqli-result-boolean-g
// - https://stackoverflow.com/questions/9023470/using-a-session-variable-in-a-sql-where-statement
// - https://stackoverflow.com/questions/10097887/using-sessions-session-variables-in-a-php-login-script
// - https://www.w3schools.com/php/php_sessions.asp

  session_start();
  ?>
<!DOCTYPE html>
<html lang="en">

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
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/startbootstrap-sb-admin-2-gh-pages/pages/index.html">Admin Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> <?php echo $_SESSION["martEmail"] ?> </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <a href="viewmarts.php" class="btn btn-primary btn-block" role="button">View Marts</a>
    <a href="addmart.php" class="btn btn-primary btn-block" role="button">Add Mart</a>
    <a href="viewmartreports.php" class="btn btn-primary btn-block" role="button">View Mart Reports</a>
    <a href="addmartreport.php" class="btn btn-primary btn-block" role="button">Add Mart Report</a>


</body>
    
 </html>   
    