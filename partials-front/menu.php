<?php include('config/constants.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>
    <link href='https://fonts.googleapis.com/css?family=Ewert' rel='stylesheet'>

    
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">



    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- font awesome cdn link -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"> -->
    <!-- https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css -->
    
    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">



    <style>
        *{
            margin: 0;
        }
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 50%;
            height: 50%;
            
        }
        .order-img{
            margin-top: 5px;
            width: 50px;
        }
    
  </style>
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <nav class="navbar navbar-expand-sm navbar-dark sticky-top" 
style="
font-size: 20px;
box-shadow: 0 0 5px black, 0 0 10px black, 0 0 15px black;
background-image: linear-gradient(to bottom right, #5e0000, #ff8243, #f3f3f5);
">
        <a class="navbar-brand" style='
        font-size: 20px;
        ' href="#">
          <span style="color: yellow">Cheese</span>
          <span style="color: #5e0000">Bur</span><span style="color: orange">st</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto">
            
            <li class="nav-item">
              <a class="nav-link" href="<?php echo SITEURL; ?>"><i class="fa  fa-home"></i> Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo SITEURL; ?>categories.php"><i class="fa  fa-list-alt"></i> Category</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo SITEURL; ?>foods.php"><i class="fa  fa-bars"></i> Menu</a>
            </li>
            
            <!-- <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa  fa-search"></i> Search</a>
            </li> -->

            <li class="nav-item">
              <a class="nav-link" href="<?php echo SITEURL; ?>about.php"><i class="fa  fa-address-card"></i> About</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="contact.php"><i class="fa  fa-envelope"></i> Contact Us</a>
            </li> 

            <!-- <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa  fa-user"></i> Login</a>
            </li> -->


          </ul>
        </div>  
      </nav>

      </body>








      <script src="js/script.js"></script>

      <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>




      <?php require './back2top.php' ?> 