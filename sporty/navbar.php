<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="navbar.css">

</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php"><img class="logo" src="assets/logo.png">SPOR<strong>TY</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarScroll">
      <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item ">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active" aria-current="page" href="aboutus.php">about us</a>
              </li>

            
              <li class="nav-item ">
                <a class="nav-link active " aria-current="page" href="products.php">Products</a>
              </li>
              
                                
                                      <?php
                                      if (isset($_SESSION["nomcomplete"])){?>
                                      <div class="dropdown">
                                              <button class="btn dropdown-toggle"
                                              type="button" id="dropdownMenuButton1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                    <?php echo $_SESSION["nomcomplete"] ?>
                                              </button>
                                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li class="loginlink"> 
                                                  <a href="logout.php" class="loginLink">Logout</a>
                                                </li>
                                            </ul>
                                      </div>
                              <?php }
                                    else {?>
                                      <button type="submit" name="login" class="login" id="login">
                                      <a href="login.php" class="bada" id="loginLink">Login</a>
                                      
                                <?php  }?>
        </ul>
                          </div>


    </div>
  </div>
</nav>
</header>