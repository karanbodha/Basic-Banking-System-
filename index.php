<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="shortcut icon" href="./images/logo_small.png" type="image/png">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!--google fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- Compiled and minified JavaScript -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <link rel="stylesheet" href="./css/style.css">
  <title>Basic Banking System</title>
</head>

<body>
  <?php
    include './php/navbar.php';
  ?>

  <div class="center head mt-0">
    <h2><b>Welcome to TSF BANK</b> <span><img src="./images/logo_small.png" style="height:70px;width:60px" /></span></h2>
  </div>

  <!---3 col start-->
  <div class="row center sect">
      <div class="row mb-2">
        <div class="col-md-12 col-lg-4 col-sm-6">
          <div class="card">
            <div class="card-image">
              <img class="cust" src="./images/transaction.jpg">
            </div>
            <button onclick="location.href='./php/transfermoney.php'" class="btn btn-large"><b> Transact Money</b><i class="material-icons right">add_circle</i></button>
          </div>
        </div>
      </div>

    
      <div class="row mb-2">
        <div class="col-md-12 col-lg-4 col-sm-6">
          <div class="card">
            <div class="card-image">
              <img class="cust" src="./images/history.jpg">
            </div>
            <button type="button" onclick="location.href='./php/transactionhistory.php'" class="btn btn-large"><b> Transaction History</b><i class="material-icons right">send</i></button>
          </div>
        </div>
      </div>
    <!--end of card 1-->

  </div>
  <!--sectio-->


  <footer class="center footer">
    <h6 class="info"><b>2021 © Made by Karan Bodha</b></h6>
    The Sparks Foundation
  </footer>

  <script src="./js/main.js"></script>
  <!-- Optional JavaScript -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>