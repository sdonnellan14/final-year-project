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
              <a class="nav-link" href="#">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Login</a>
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

$result = mysqli_query($con,"SELECT * FROM DISPOSAL");

echo "<table class='table'>
<caption>Registered Disposal Companies</caption>
<tr>
<th>ID</th>
<th>Name</th>
<th>Province</th>
<th>County</th>
<th>Address</th>
<th>Contact</th>
<th>Email</th>
<th>ZeroThreeMonths</th>
<th>ThreeSixMonths</th>
<th>SixTwelveMonths</th>
<th>TwelveTwentyFourMonths</th>
<th>TwentyFourFortyEightMonths</th>
<th>FortyEightMonths</th>
<th>Sheep</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['DisposalId'] . "</td>";
echo "<td>" . $row['DisposalName'] . "</td>";
echo "<td>" . $row['DisposalProvince'] . "</td>";
echo "<td>" . $row['DisposalCounty'] . "</td>";
echo "<td>" . $row['DisposalAddress'] . "</td>";
echo "<td>" . $row['DisposalContact'] . "</td>";
echo "<td>" . $row['DisposalEmail'] . "</td>";
echo "<td>" . $row['ZeroThreeMonths'] . "</td>";
echo "<td>" . $row['ThreeSixMonths'] . "</td>";
echo "<td>" . $row['SixTwelveMonths'] . "</td>";
echo "<td>" . $row['TwelveTwentyFourMonths'] . "</td>";
echo "<td>" . $row['TwentyFourFortyEightMonths'] . "</td>";
echo "<td>" . $row['FortyEightMonths'] . "</td>";
echo "<td>" . $row['Sheep'] . "</td>";

echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
    </body>
    
</html>