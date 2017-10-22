<?php include("productDatabase.php"); ?>
<?php 
  session_start();
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
    <script type="text/javascript" > 
      function hideBilling()
      {
        if(document.getElementById('infoCheck').checked)
          document.getElementById("billing").style.display="none";
        else
          document.getElementById("billing").style.display="block";
      }
       
      }
    </script>
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
        <div class="col-6 col-sm-1 my-auto text-right"><a href="cart.php">
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
    <h4>Shipping Information</h4>
    <form name="shipping" id="shipping" action="payment.php" method="post">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputFirstName" class="col-form-label">First Name</label>
          <input name="inputFirstName" type="text" class="form-control" id="inputFirstName" placeholder="Joe">
        </div>
        <div class="form-group col-md-6">
          <label for="inputLastName" class="col-form-label">Last Name</label>
          <input name="inputLastName" type="tex" class="form-control" id="inputLastName" placeholder="Schmoe">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4" class="col-form-label">Email</label>
          <input name="inputEmail4" type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4" class="col-form-label">Password</label>
          <input name="inputPassword4" type="password" class="form-control" id="inputPassword4" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress" class="col-form-label">Address</label>
        <input name="inputAddress" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
      </div>
      <div class="form-group">
        <label for="inputAddress2" class="col-form-label">Address 2</label>
        <input name="inputAddress2" type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity" class="col-form-label">City</label>
          <input name="inputCity" type="text" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-4">
          <label for="inputState" class="col-form-label">State</label>
          <input name="inputState" id="inputState" class="form-control"></input>
        </div>
        <div class="form-group col-md-2">
          <label for="inputZip" class="col-form-label">Zip</label>
          <input name="inputZip" type="text" class="form-control" id="inputZip">
        </div>
      </div>
      <div class="form-group">
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" id="infoCheck" name="infoCheck" onclick="hideBilling()" type="checkbox"> Billing Info Same As Shipping Info
          </label>
        </div>
      </div>
      
      <div id="billing">
      
      <h4>Billing Information</h4>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="billingInputFirstName" class="col-form-label">First Name</label>
          <input name="billingInputFirstName" type="text" class="form-control" id="billingInputFirstName" placeholder="Joe">
        </div>
        <div class="form-group col-md-6">
          <label for="billingInputLastName" class="col-form-label">Last Name</label>
          <input name="billingInputLastName" type="tex" class="form-control" id="billingInputLastName" placeholder="Schmoe">
        </div>
      </div>

      <div class="form-group">
        <label for="billingInputAddress" class="col-form-label">Address</label>
        <input name="billingInputAddress" type="text" class="form-control" id="billingInputAddress" placeholder="1234 Main St">
      </div>

      <div class="form-group">
        <label for="billingInputAddress2" class="col-form-label">Address 2</label>
        <input name="billingInputAddress2" type="text" class="form-control" id="billingInputAddress2" placeholder="Apartment, studio, or floor">
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="billingInputCity" class="col-form-label">City</label>
          <input name="billingInputCity" type="text" class="form-control" id="billingInputCity">
        </div>
        <div class="form-group col-md-4">
          <label for="billingInputState" class="col-form-label">State</label>
          <input name="billingInputState" id="billingInputState" class="form-control"></input>
        </div>
        <div class="form-group col-md-2">
          <label for="billingInputZip" class="col-form-label">Zip</label>
          <input name="billingInputZip" type="text" class="form-control" id="billingInputZip">
        </div>
      </div>
      </div>
      <button id="submitbtn" type="submit" class="btn btn-primary">Let's Pay</button>
    </form>
    
</div>
  </body>
</html>