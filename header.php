<?php
session_start();
include_once 'db.php';
 

?>
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>YOUR STYLE</title>
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">

    <style>
      img.imgleft {
        width: 100%;
      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
 
    <link href="sticky-footer-navbar.css" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">
    
<header> 
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href=".">YOUR STYLE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="products.php?category=men">Men</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="products.php?category=women">Women</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="products.php?category=accessories">Accessories</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li> 

          
        </ul>
        <form class="d-flex  me-2" action="products.php" method="get">
          <input class="form-control me-1" type="text" placeholder="Search" aria-label="Search" id="search" name="search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        
        <a href="cartlist.php" class="btn btn-outline-success">
          <i class="fas fa-shopping-cart"></i>
            <span class="badge badge-light">
                <?php
                if (isset($_SESSION['cart_data'])) {
                echo count($_SESSION['cart_data']);
                } else {
                echo 0;
                }
                ?>
        </a>
      </div>
    </div>
  </nav>
</header>
