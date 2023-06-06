<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
   <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/2746d01d26.js" crossorigin="anonymous"></script>
</head>
<body>
    <section>
        <nav class="navbar navbar-expand-lg navbar-dark py-3 px-3 custom-nav">
            <div class="container-fluid">
            <a class="navbar-brand" href="">Dairy System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0 ml">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <?php 
                      if(isset($_SESSION['name'])) {
                        echo "<li class='nav-item'><a class='nav-link' href='milk-order.php'>Order Milk</a></li>";
                        echo "<li class='nav-item'><a class='nav-link' href='#'><i class='fa-solid fa-bell'></i></a></li>";
                      }
                    ?>
                    
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-user"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark pull-left" aria-labelledby="navbarDropdown">
                    <?php
                      if(isset($_SESSION['name'])) {
                        echo "<li><a class='dropdown-item' href='#'>Profile</a></li>";
                        echo "<li><a class='dropdown-item' href='includes/logout.inc.php'>Log Out</a></li>";
                        echo "<li>". $_SESSION['name'] ."</li>";
                      }
                      else {
                        echo "<li><a class='dropdown-item' href='register.php'>Sign Up</a></li>";
                        echo "<li><a class='dropdown-item' href='login.php'>Login</a></li>";
                      }
                    ?>
                  </ul>
                </li>
                    
                </ul>
               
                </div>
            </div>
        </nav>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
