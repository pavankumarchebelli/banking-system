<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Sparks Banking System</title>
    <style>
      body{
        background-image: url("img4blur.jpg");
        background-repeat: no-repeat, repeat;
        background-size: cover;
      }
  </style>
    </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
      <div class="container-fluid" >
            <h1>WELCOME TO SPARKS BANKING SYSTEM</h1><br><br><br><br><br>
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="add-user.png" class="img-fluid" width="150" >
                    <br>
                    <a href="listuser.php"><button>Customer Details</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="transfer.png" class="img-fluid" width="150">
                    <br>
                    <a href="transfer.php"><button>Money Transfer</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="2175537.png" class="img-fluid" width="150">
                    <br>
                    <a href="transactions.php"><button>Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer style="opacity: 0.7;">
        <p> Made by <b>CHEBELLI PAVAN KUMAR</b> <br> The Sparks Foundation </p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>