<?php 
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

    <!-- Top Navigation Bar with buttons - Taken from default bootstrap theme  -->
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
              <a class="nav-link" href="/startbootstrap-sb-admin-2-gh-pages/pages/index.html">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><?php echo $_SESSION["martEmail"] ?></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <!-- php connection and insert statements syntax developed using a number of different online tutorials: https://stackoverflow.com/questions/16835753/inserting-data-to-table-mysqli-insert,https://stackoverflow.com/questions/34329852/how-to-insert-date-values-into-table,https://community.c9.io/t/connecting-php-to-mysql/1606    -->
    
    <?php
$con=mysqli_connect("127.0.0.1","sdonnellan","","AGRI1",3306);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT SALEREPORT.ReportId, SALEREPORT.MartId, SALEREPORT.ReportDate, SALEREPORT.SaleDetails FROM SALEREPORT, MART WHERE MART.MartEmail = '$_SESSION[martEmail]' ");


echo "<table class='table'>
<caption>Report Overview</caption>
<tr>
<th>Report ID</th>
<th>Mart ID</th>
<th>Report Date</th>
<th>Sale Details</th>

</tr>";

while($row = mysqli_fetch_array($result)) 

{
echo "<tr>";
echo "<td>" . $row['ReportId'] . "</td>";
echo "<td>" . $row['MartId'] . "</td>";
echo "<td>" . $row['ReportDate'] . "</td>";
echo "<td>" . $row['SaleDetails'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
    </body>