<?php include("productDatabase.php"); ?>
<?php 
  session_start();
  $_SESSION['userinfo'] = $_POST;
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway:200" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
  </head>
  <body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


    <div class="container">
      <div class="row h-100 justify-content-center">
        <div class="col-sm-1"></div>
        <div class="logo-main col-6 col-sm-10 my-3 text-center p-2"><a ref="#">
            <img src="images/cclogo.png" width="150px"  alt="CassieCreates">
          </a></div>
        <div class="col-6 col-sm-1 my-auto text-right"><a href="#">
          <img class="" src="images/cccart.png" width="50px"  alt="CART">
          </a></div>
      </div>
	  </div>

    <nav class="navbar navbar-expand-md navbar-light">
      <button class="navbar-toggler btn-sm" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse  justify-content-center" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active text-center" href="index.php">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link text-center" href="#">About</a>
          <a class="nav-item nav-link text-center" href="productpage.php">Products</a>
          <a class="nav-item nav-link text-center" href="#">Gallery</a>
        </div>
      </div>
    </nav>
    <div class="container">
    <form id="creditData" name="creditData" action="finalOrder.php" method="post">
      <div class="form-group">
        <label class="form-control-label" for="fullName">Full Name</label>
        <input name="fullName" type="text" class="form-control" id="fullName" placeholder="Johne Doe">
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="inlineRadioOption1" id="inlineRadio1" value="Visa"> Visa
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" id="inlineRadio2" value="Amex"> Amex
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input class="form-check-input" type="radio"  id="inlineRadio2" value="Mastercard"> Mastercard
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" id="inlineRadio3" value="Discover"> Discover 
        </label>
      </div>
      <div class="form-group">
        <label class="form-control-label" for="cardNumber">Card Number</label>
        <input name="cardNumber" type="text" class="form-control" id="cardNumber" placeholder="1234 5678 9012 3456">
      </div>
      <div class="form-group">
        <label class="form-control-label" for="expiration">Expiration Date</label>
        <input name="expiratoin" type="text" class="form-control" id="expiration" placeholder="xx/yyyy">
      </div>
      <button id="submitbtn" type="submit" class="btn btn-primary">Order Summary</button>
    </form>

  </div>
  </body>
</html>