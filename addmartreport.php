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
              <a class="nav-link" href="#"><?php echo $_SESSION["martEmail"] ?></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    
    <!-- Input form with fields corresponding to SQLI DB Columns (Table = SALEREPORT) https://bootswatch.com/cyborg/#forms  -->
    <form class="form-horizontal" action="insertmartreport.php" method="post">
  <fieldset>
    <legend>Add Mart Report</legend>
    <div class="form-group">
      <label for="inputMartId" class="col-lg-2 control-label">Mart ID</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputMartId" name="MartId" value= "<?php echo $_SESSION["martEmail"]; ?>" >
      </div>
    </div>
    
    
      <div class="form-group">
      <label for="inputReportDate" class="col-lg-2 control-label">Report Date</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputReportDate" name="ReportDate" placeholder="Date">
      </div>
    </div>
    
    
    <div class="form-group">
      <label for="inputSaleDetails" class="col-lg-2 control-label">Sale Details</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-lg" id="inputSaleDetails" name="SaleDetails" placeholder="Details">
      </div>
    </div>
    
    
     <div class="form-group">
      <label for="inputBullockMaxPrice" class="col-lg-2 control-label">Bullock - Max Price</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputBullockMaxPrice" name="BullockMaxPrice" placeholder="Max Price">
      </div>
    </div>
     <div class="form-group">
      <label for="inputBullockMaxKG" class="col-lg-2 control-label">Bullock Weight</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputBullockMaxKG" name="BullockMaxKG" placeholder="Weight">
      </div>
    </div>
     <div class="form-group">
      <label for="inputBullockMinPrice" class="col-lg-2 control-label">Bullock - Min Price</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" name="BullockMinPrice" placeholder="Minimum Price">
      </div>
    </div>
     <div class="form-group">
      <label for="inputBullockMinKG" class="col-lg-2 control-label">Bullock Weight</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputBullockMinKG" name="BullockMinKG" placeholder="Weight">
      </div>
    </div>
    
    
    <div class="form-group">
      <label for="inputHeiferMaxPrice" class="col-lg-2 control-label">Heifer - Max Price</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputHeiferMaxPrice" name="HeiferMaxPrice" placeholder="Max Price">
      </div>
    </div>
     <div class="form-group">
      <label for="inputHeiferMaxKG" class="col-lg-2 control-label">Heifer Weight</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputHeiferMaxKG" name="HeiferMaxKG" placeholder="Weight">
      </div>
    </div>
     <div class="form-group">
      <label for="inputHeiferMinPrice" class="col-lg-2 control-label">Heifer - Min Price</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputHeiferMinPrice" name="HeiferMinPrice" placeholder="Minimum Price">
      </div>
    </div>
     <div class="form-group">
      <label for="inputHeiferMinKG" class="col-lg-2 control-label">Heifer Weight</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputHeiferMinKG" name="HeiferMinKG" placeholder="Weight">
      </div>
    </div>
    
    
        <div class="form-group">
      <label for="inputWHeiferMaxPrice" class="col-lg-2 control-label">Weanling Heifer - Max Price</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputWHeiferMaxPrice" name="WHeiferMaxPrice" placeholder="Max Price">
      </div>
    </div>
     <div class="form-group">
      <label for="inputWHeiferMaxKG" class="col-lg-2 control-label">Weanling Heifer Weight</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputWHeiferMaxKG" name="WHeiferMaxKG" placeholder="Weight">
      </div>
    </div>
     <div class="form-group">
      <label for="inputWHeiferMinPrice" class="col-lg-2 control-label">Weanling Heifer - Min Price</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputWHeiferMinPrice" name="WHeiferMinPrice" placeholder="Minimum Price">
      </div>
    </div>
     <div class="form-group">
      <label for="inputWHeiferMinKG" class="col-lg-2 control-label">Weanling Heifer Weight</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputWHeiferMinKG" name="WHeiferMinKG" placeholder="Weight">
      </div>
    </div>
    
     <div class="form-group">
      <label for="inputWBullMaxPrice" class="col-lg-2 control-label">Weanling Bull - Max Price</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputWBullMaxPrice" name="WBullMaxPrice" placeholder="Max Price">
      </div>
    </div>
     <div class="form-group">
      <label for="inputWBullMaxKG" class="col-lg-2 control-label">Weanling Bull Weight</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputWBullMaxKG" name="WBullMaxKG" placeholder="Weight">
      </div>
    </div>
     <div class="form-group">
      <label for="inputWBullMinPrice" class="col-lg-2 control-label">Weanling Bull - Min Price</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputWBullMinPrice" name="WBullMinPrice" placeholder="Minimum Price">
      </div>
    </div>
     <div class="form-group">
      <label for="inputWBullMinKG" class="col-lg-2 control-label">Weanling Bull Weight</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputWBullMinKG" name="WBullMinKG" placeholder="Weight">
      </div>
    </div>
    
    
         <div class="form-group">
      <label for="inputCowMaxPrice" class="col-lg-2 control-label">Cows - Max Price</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputCowMaxPrice" name="CowMaxPrice" placeholder="Max Price">
      </div>
    </div>
     <div class="form-group">
      <label for="inputCowMaxKG" class="col-lg-2 control-label">Cows Weight</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputCowMaxKG" name="CowMaxKG" placeholder="Weight">
      </div>
    </div>
     <div class="form-group">
      <label for="inputCowMinPrice" class="col-lg-2 control-label">Cows - Min Price</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputCowMinPrice" name="CowMinPrice" placeholder="Minimum Price">
      </div>
    </div>
     <div class="form-group">
      <label for="inputCowMinKG" class="col-lg-2 control-label">Cows Weight</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputCowMinKG" name="CowMinKG" placeholder="Weight">
      </div>
    </div>
    
    
         <div class="form-group">
      <label for="inputBullMaxPrice" class="col-lg-2 control-label">Bulls - Max Price</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputBullMaxPrice" name="BullMaxPrice" placeholder="Max Price">
      </div>
    </div>
     <div class="form-group">
      <label for="inputBullMaxKG" class="col-lg-2 control-label">Bulls Weight</label>   
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputBullMaxKG" name="BullMaxKG" placeholder="Weight">
      </div>
    </div>
     <div class="form-group">
      <label for="inputBullMinPrice" class="col-lg-2 control-label">Bulls - Min Price</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputBullMinPrice" name="BullMinPrice" placeholder="Minimum Price">
      </div>
    </div>
     <div class="form-group">
      <label for="inputBullMinKG" class="col-lg-2 control-label">Bulls Weight</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputBullMinKG" name="BullMinKG" placeholder="Weight">
      </div>
    </div>    
    
    
         <div class="form-group">
      <label for="inputDCowMaxPrice" class="col-lg-2 control-label">Dairy Cows - Max Price</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputDCowMaxPrice" name="DCowMaxPrice" placeholder="Max Price">
      </div>
    </div>
     <div class="form-group">
      <label for="inputDCowMaxKG" class="col-lg-2 control-label">Dairy Cows Weight</label>   
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputDCowMaxKG" name="DCowMaxKG" placeholder="Weight">
      </div>
    </div>
     <div class="form-group">
      <label for="inputDCowMinPrice" class="col-lg-2 control-label">Dairy Cows - Min Price</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputDCowMinPrice" name="DCowMinPrice" placeholder="Minimum Price">
      </div>
    </div>
     <div class="form-group">
      <label for="inputDCowMinKG" class="col-lg-2 control-label">Dairy Cows Weight</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputDCowMinKG" name="DCowMinKG" placeholder="Weight">
      </div>
    </div>        
    
    
         <div class="form-group">
      <label for="inputBCowMaxPrice" class="col-lg-2 control-label">Breeding Cows - Max Price</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputBCowMaxPrice" name="BCowMaxPrice" placeholder="Max Price">
      </div>
    </div>
     <div class="form-group">
      <label for="inputBCowMaxKG" class="col-lg-2 control-label">Breeding Cows Weight</label>   
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputBCowMaxKG" name="BCowMaxKG" placeholder="Weight">
      </div>
    </div>
     <div class="form-group">
      <label for="inputBCowMinPrice" class="col-lg-2 control-label">Breeding Cows - Min Price</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputBCowMinPrice" name="BCowMinPrice" placeholder="Minimum Price">
      </div>
    </div>
     <div class="form-group">
      <label for="inputBCowMinKG" class="col-lg-2 control-label">Breeding Cows Weight</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputBCowMinKG" name="BCowMinKG" placeholder="Weight">
      </div>
    </div>        
    
    
         <div class="form-group">
      <label for="inputCalfMaxPrice" class="col-lg-2 control-label">Calves - Max Price</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputCalfMaxPrice" name="CalfMaxPrice" placeholder="Max Price">
      </div>
    </div>
     <div class="form-group">
      <label for="inputCalfMaxKG" class="col-lg-2 control-label">Calves Weight</label>   
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputCalfMaxKG" name="CalfMaxKG" placeholder="Weight">
      </div>
    </div>
     <div class="form-group">
      <label for="inputCalfMinPrice" class="col-lg-2 control-label">Calves - Min Price</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputCalfMinPrice" name="CalfMinPrice" placeholder="Minimum Price">
      </div>
    </div>
     <div class="form-group">
      <label for="inputCalfMinKG" class="col-lg-2 control-label">Calves Weight</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputCalfMinKG" name="CalfMinKG" placeholder="Weight">
      </div>
    </div>        
    
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Add Report</button>
      </div>
    </div>
  </fieldset>
</form>
    
</body>