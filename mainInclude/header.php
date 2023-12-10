<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  
  <link rel="stylesheet" href="css/style.css">
  
  <title>Smart Master</title>
</head>
<body>
  
  
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #25274D; padding-left:0px;">
    <div class="container">
        <a class="navbar-brand">Smart Master</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav custom-nav ml-auto" style="padding-left:90px">
                <li class="nav-item custom-nav-item" style="padding-left:7px; padding-right:7px;"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item custom-nav-item" style="padding-left:7px; padding-right:7px;"><a class="nav-link" href="courses.php">Courses</a></li>
                <li class="nav-item custom-nav-item" style="padding-left:7px; padding-right:7px;"><a class="nav-link" href="payment.php">Payment Status</a></li>
                <?php
                    session_start();
                    if(isset($_SESSION['is_login'])){
                        echo '
                        <li class="nav-item custom-nav-item" style="padding-left:7px; padding-right:7px;"><a class="nav-link" href="#">My Profile</a></li>
                        <li class="nav-item custom-nav-item" style="padding-left:7px; padding-right:7px;"><a class="nav-link" href="logout.php">Logout</a></li>';
                    }
                    else{
                        echo'
                        <li class="nav-item custom-nav-item" style="padding-left:7px; padding-right:7px;"><a class="nav-link" data-bs-toggle="modal" data-bs-target="#stuLoginModalCenter" href="#">Login</a></li>
                        <li class="nav-item custom-nav-item" style="padding-left:7px; padding-right:7px;"><a class="nav-link" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter" href="#">Signup</a></li>';
                    }
                ?>
                <li class="nav-item custom-nav-item" style="padding-left:7px; padding-right:7px;"><a class="nav-link" href="#">Feedback</a></li>
                <li class="nav-item custom-nav-item" style="padding-left:7px; padding-right:7px;"><a class="nav-link" href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
