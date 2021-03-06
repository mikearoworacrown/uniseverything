<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('/stylesheets/css/bootstrap.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('/stylesheets/css/public.css?version=8'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('/stylesheets/css/public_responsive.css?version=5'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('/stylesheets/fontawesome/css/all.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('/stylesheets/OwlCarousel/owl.carousel.css'); ?>" />
    <title>Uniseverything <?php if(isset($page_title)) { echo '- ' . h($page_title); } ?></title>
    <link rel="icon" href="images/logo/unis_icon.jpg" type = "image/x-icon">
    <style>
        
    </style>
</head>
<body>
<header id="header">
<nav class="navbar navbar-dark navbar-expand-lg header-nav" style="background-color: #fff">
  <div class="container-fluid">
    <div class="navbar-brand brand-logo-container">
        <a href="<?php echo url_for('/'); ?>" class="navbar-brand brand-logo"><img src="images/logo/unis_logo.png" width="47px" height="35px" alt="Uniseverything"></a>
    </div>
    
    <button class="navbar-toggler" type="button"
      data-toggle="collapse" data-target="#myTogglerNav"
      aria-controls="myTogglerNav"
      aria-expanded="false" aria-label="Toggle navigation" style="background-color: #cf2d42; !important">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="myTogglerNav">
      <div class="navbar-nav">

        <div class="dropdown">
          <a class="nav-item nav-link dropdown-toggle navbar-link" 
            data-toggle="dropdown" id="servicesDropdown"
            aria-haspopup="true" aria-expanded="false"
            href="#">Categories</a>

            <div class="dropdown-menu dropdown-list" style="width: 300px;" aria-labelledby="servicesDropdown">
              <?php
                $conn = $pdo->open();
                try{
                  $stmt = $conn->prepare("SELECT * FROM category");
                  $stmt->execute();
                  foreach($stmt as $row){
                    echo "
                      <a class='dropdown-item' href='category.php?category=".$row['cat_slug']."'>".$row['name']."</a></li>
                    ";                  
                  }
                }
                catch(PDOException $e){
                  echo "There is some problem in connection: " . $e->getMessage();
                }

                $pdo->close();
              ?>
            </div>
          
        </div>
      </div><!-- navbar-nav -->
      <form class="form-inline mx-auto navbar-form" action="#">
          <input class="form-control search-input" type="text" placeholder="Search for product.." style="border: 2px solid #cf2d42;">
          <button class="btn" type="submit" style="background-color:  #cf2d42; color:#010101;"><i class="fas fa-search"></i></button>
      </form>
      <?php 
        if(isset($_SESSION['user'])){
          $image = (!empty($user['photo'])) ? url_for('/images/users/') .$user['photo'] : url_for('/images/users/profile.jpg');
          
          echo'
              <ul class="navbar-nav navbar-list">
                <li class="nav-item">
                  <div class="dropdown">
                    <a class="nav-item nav-link dropdown-toggle navbar-link" 
                      data-toggle="dropdown" id="servicesDropdown"
                      aria-haspopup="true" aria-expanded="false"
                      href="#">
                        <span class="hidden-xs">' . $user['fullname'] .'</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-list" style="width: 300px;" aria-labelledby="servicesDropdown">
                      <ul>
                        <!-- User image -->
                        <li class="user-header">
                          <div class="text-center">
                            <img src="'.$image.'" class="img-circle" alt="User Image">
                          </div>
                          <div class="text-center">
                            <h4 class="username"> '. $user['fullname'] .'</h4>
                            <p>Member since '.date('M. Y', strtotime($user['created_on'])).'</p>
                          </div>
                        </li>
                        <li class="user-footer">
                          <div class="pull-left">
                            <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                          </div>
                          <div class="pull-right">
                            <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                          </div>
                          <p style="clear: both;"></p>
                        </li>
                      </ul> 
                    </div> 
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link navbar-link" href="'. url_for('cart_view.php') .'"><i class="fas fa-shopping-cart" style="font-size:24px"></i><span class="badge cart_count" style="background-color: #cf2d42; color: #0e0e0e; !important; position:relative; top:-14px;">0</span></a>
                </li>
              </ul>
          ';

        }else{
          echo'
              <ul class="navbar-nav navbar-list">
                <li class="nav-item">
                  <div class="dropdown">
                    <a class="nav-item nav-link dropdown-toggle navbar-link" 
                      data-toggle="dropdown" id="servicesDropdown"
                      aria-haspopup="true" aria-expanded="false"
                      href="#">Sign in/Sign up</a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-list" aria-labelledby="servicesDropdown">
                        <a class="dropdown-item sign-in" href="' . url_for('/login.php') . '">LOGIN</a>
                        <p class="" style="color:#cf2d42; text-align: center; margin-top: 10px;">OR</p>
                        <a class="dropdown-item sign-up" href="'. url_for('/signup.php') . '" style="">CREATE AN ACCOUNT</a>
                    </div> 
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link navbar-link" href="#"><i class="fas fa-shopping-cart" style="font-size:24px"></i><span class="badge" style="background-color: #cf2d42; color: #0e0e0e; !important; position:relative; top:-14px;">0</span></a>
                </li>
              </ul>
          ';
        }
      ?>

        

    </div><!-- collapse -->
  </div><!-- container -->
</nav><!-- nav -->


</header>