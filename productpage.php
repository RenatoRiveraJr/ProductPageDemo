<?php include("productDatabase.php"); ?>
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
          <a class="nav-item nav-link active text-center" href="#">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link text-center" href="#">About</a>
          <a class="nav-item nav-link text-center" href="#">Products</a>
          <a class="nav-item nav-link text-center" href="#">Gallery</a>
        </div>
      </div>
    </nav>


    <div class="container">
      <?php 
      for ($x = 0; $x <= 25; $x++) {?>
        <?php
          if ($x % 3 == 0) {
              echo '<div class="row">';
          }
        ?>
      
          <div class="col-sm-12 col-lg-4">
            <div class="card mx-auto" style="width: 20rem;">
              <img class="card-img-top" height="300px" src="images/product<?php echo $products[$x]->getProductID();?>.jpg" alt="Card image cap">
              <div class="card-body">
                <a href="product<?php echo $products[$x]->getProductID();?>.html"><h4 class="card-title"><?php echo $products[$x]->getProductName();?></h4></a>
                <p class="card-text">$<?php echo $products[$x]->getProductCost();?></p>
                <a href="cart.php?id=<?php echo $products[$x]->getProductID();?>" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </div>
      <?php
          if ($x % 3 == 2) {
              echo '</div>';
          }
        ?>
      <?php
      }
      ?>
    </div>
  </body>
</html>