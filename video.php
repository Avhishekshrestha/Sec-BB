<!doctype html>
<html lang="en">
  <head>
    <title>Welcome to Avhishek shrestha </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Avhishek shrestha| Real Estate Business | Buy property | Sell property | Hire Mediator">
    <meta name="description" content="Real Estate Business in Nepal to buy and sell properties, to hire mediator">
    <meta name="author" content="Rupak Chaudhary">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/mystyle.css">
    <link rel="shortcut icon" href="assets/images/favicon.PNG" type="image/x-icon"> 
  </head>
  <body>
      <!-- header start -->
      <?php 
      include 'header.php'; 
      ?>
      <!-- header end -->
      <!-- title start -->
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">video</h1>
            <hr class="my-2">
        </div>
      </div>
      <!-- title end -->
     <!-- main body start -->
     <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                <?php
                  $dir=glob('assets/video/{*.jpg, *.jpeg, *.png}',GLOB_BRACE);
                  foreach($dir as $value){

                    ?>
                    <a href="<?php echo $value; ?>">
                    <video src="<?php echo $value; ?>" alt="avhishekstha" width="300px" align="left" style="margin:5px">
                    </a>
                    <?php
                  }
                  ?>
                <div class="col-md-4">
                    <?php
                    include 'rightbar.php';
                    ?>
            </div>
        </div>
     </div>
     <!-- main body end -->
      <!-- footer start -->
      <?php 
      include 'footer.php';
      ?>
      <!-- footer end -->
      
   
  </body>
</html>