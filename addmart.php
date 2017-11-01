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

    <!-- Navigation bar  - smallbusiness.css theme specs -->
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
    
    
     <!-- Input form with fields corresponding to SQLI DB Columns (Table = MART  -->
    <form class="form-horizontal" action="insertmart.php" method="post">
  <fieldset>
    <legend>Register New Mart</legend>
    <div class="form-group">
      <label for="inputName" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputName" name="MartName" placeholder="Name">
      </div>
    </div>
      <div class="form-group">
      <label for="inputProvince" class="col-lg-2 control-label">Province</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputProvince" name="MartProvince" placeholder="Province">
      </div>
    </div>
    <div class="form-group">
      <label for="inputCounty" class="col-lg-2 control-label">County</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputCounty" name="MartCounty" placeholder="County">
      </div>
    </div>
     <div class="form-group">
      <label for="inputAddress" class="col-lg-2 control-label">Address</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputAddress" name="MartAddress" placeholder="Address">
      </div>
    </div>
     <div class="form-group">
      <label for="inputContact" class="col-lg-2 control-label">Contact Number</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputContact" name="MartContact" placeholder="Contact Details">
      </div>
    </div>
     <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email Address</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" name="MartEmail" placeholder="Email">
      </div>
    </div>
     <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" id="inputPassword" name="MartPassword" placeholder="Password">
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Add Mart</button>
      </div>
    </div>
  </fieldset>
</form>
    
</body>