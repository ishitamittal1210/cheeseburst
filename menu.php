<!DOCType html>
<html>

<head>
<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Ewert' rel='stylesheet'>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Menu</title>
<style>
   <?php require 'style.css' ?>
    @media (max-width: 768px) {
    .carousel-inner .carousel-item > div {
        display: none;
    }
    .carousel-inner .carousel-item > div:first-child {
        display: block;
    }
}

.carousel-inner .carousel-item.active,
.carousel-inner .carousel-item-next,
.carousel-inner .carousel-item-prev {
    display: flex;
}

/* display 3 */
@media (min-width: 768px) {
    
    .carousel-inner .carousel-item-right.active,
    .carousel-inner .carousel-item-next {
      transform: translateX(33.333%);
    }
    
    .carousel-inner .carousel-item-left.active, 
    .carousel-inner .carousel-item-prev {
      transform: translateX(-33.333%);
    }
}

.carousel-inner .carousel-item-right,
.carousel-inner .carousel-item-left{ 
  transform: translateX(0);
}
.card,.card-body,.card-title{
    border-radius: 10px;
    background-color: Orange;
    color: red;
}
.card-title,h5{
    font-size: 30px;
}
h2{color: white;}
.carousel-inner img {
    width: 100%;
    height: 100%;
    margin:auto;
  }
  /* .demo{
      margin-top: 80px;
  } */

</style>
</head>
    <body style="background-color: black;" class='w-100'>
    <!-- Navbar -->
    
   
    <nav class="navbar navbar-expand-md bg-dark navbar-dark" 
    style="
font-size: 20px;
box-shadow: 0 0 5px black, 0 0 10px black, 0 0 15px black;
background-image: linear-gradient(#5e0000, #380101);
"
    >
    
        <a class="navbar-brand" style='font-size: 30px;' href="#"><span style="color: yellow;">Cheese</span> <span style="color: red">Bur</span><span style="color: orange">st</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
            
            <li class="nav-item">
                <a class="nav-link" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="menu.php"><i class="fa fa-fw fa-bars"></i> Menu</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="about.php"><i class="fa fa-fw fa-address-card"></i>About</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="contact.php"><i class="fa fa-fw fa-envelope"></i> Contact Us</a>
            </li>

            </ul>
        </div>  
    </nav>

    <?php require 'bookmark.php' ?>
      <!-- Navbar Ends -->
        <!-- <header style="margin-top: 60px;">
          <div>
            <center><img src="images/drinks.gif" alt="drinks" width="100%"></center>
          </div>
        </header> -->
        <?php require 'main-caraousel.php' ?>
        <!-- <header style="background-color: black;color: white;"> -->

        <!-- </header> -->
<!------------------------------------------ COURSE MEALS --------------------------------------->
        <?php require './back2top.php' ?> 
    

        <h1 class="w3-center text-center" 
        style="background-image: linear-gradient(#5e0000, #380101);
        color: white; 
        padding: 25px;"
         id='course-meals'
        >COURSE MEALS</h1>
        <!-- Pizza -->
        <div class="container text-center my-3">
            <h2 class="font-weight-light">PIZZAS</h2>
            <div class="row mx-auto my-auto">
                <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Course-Meals/Pizza/Margherita.webp">

                                    <h5 class="card-title" style="color:white;">Margherita Pizza</h5>
                <!-- <p class="card-text">Take your mojito cocktail to the next level with the warmth of complex spices. This jaljeera-inspired version explodes with a heady mix of cumin, coriander, and ginger.</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Course-Meals/Pizza/Fresh-tomato-pizza-.webp">

                                    <h5 class="card-title" style="color:white;">Tomato Pizza</h5>
                <!-- <p class="card-text">When I have ripe mangoes on hand, trust that I’ll make at least a pitcher of this mango mojito.</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Course-Meals/Pizza/Four_Cheese_Pizza.jpg">

                                    <h5 class="card-title" style="color:white;">Four Cheese Pizza</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Course-Meals/Pizza/Four_Vegetable_PIzza.gif">

                                    <h5 class="card-title" style="color:white;">Four Cheese Pizza</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Course-Meals/Pizza/Tandori_Pizza.jpg">

                                    <h5 class="card-title" style="color:white;">Tandori Pizza</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Course-Meals/Pizza/hawaiian-thin-crust-pizza-3.jpg">

                                    <h5 class="card-title" style="color:white;">Thin Crust Hawaiian pizza</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Course-Meals/Pizza/pepper-pizza-oh-1733614-x.jpg">

                                    <h5 class="card-title" style="color:white;">Three pepper pizza</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Course-Meals/Pizza/Golden_Corn_Pizza.webp">

                                    <h5 class="card-title" style="color:white;">Golden Corn Pizza</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!-- <h5 class="mt-2">Advances one slide at a time</h5> -->
        </div>
        <!-- Pizza Ends -->

        <!-- Manchurians -->
        <div class="container text-center my-3">
            <h2 class="font-weight-light">MANCHURIANS</h2>
            <div class="row mx-auto my-auto">
                <div id="recipeCarousel1" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Course-Meals/Manchurians/Veg-Manchurian-recipe_5.jpg">

                                    <h5 class="card-title" style="color:white;">Veg Manchuria</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Course-Meals/Manchurians/Gobi_Manchurian.jpeg">

                                    <h5 class="card-title" style="color:white;">Gobi Manchuria</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Course-Meals/Manchurians/mushroom-manchurian-recipe.webp">

                                    <h5 class="card-title" style="color:white;">Mushroom Manchuria</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Course-Meals/Manchurians/paneer-manchurian-recipe.jpg">

                                    <h5 class="card-title" style="color:white;">Panner Manchuria</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Course-Meals/Manchurians/baby-corn-manchurian.jpg">

                                    <h5 class="card-title" style="color:white;">Baby Corn Manchuria</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Course-Meals/Manchurians/idli-manchurian-recipe-1-500x500.jpg">

                                    <h5 class="card-title" style="color:white;">Idly Manchuria</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev w-auto" href="#recipeCarousel1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next w-auto" href="#recipeCarousel1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!-- <h5 class="mt-2">Advances one slide at a time</h5> -->
        </div>
        <!-- Manchurians ENDS -->

        <!-- Tikka & Chaap -->
        <div class="container text-center my-3">
            <h2 class="font-weight-light">TIKKAS & CHAAPS</h2>
            <div class="row mx-auto my-auto">
                <div id="recipeCarousel2" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Course-Meals/Tikka--Chaap/tikka.jpg">

                                    <h5 class="card-title" style="color:white;">Paneer Tikka</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Course-Meals/Tikka--Chaap/Mushroom-Tikka.jpg">

                                    <h5 class="card-title" style="color:white;">Mushroom Tikka</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Course-Meals/Tikka--Chaap/masala-chaap.jpg">

                                    <h5 class="card-title" style="color:white;">Masala Chaap</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Course-Meals/Tikka--Chaap/Afghani-Soya-Chaap-scaled.webp">

                                    <h5 class="card-title" style="color:white;">Afghani Soya Chaap</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Course-Meals/Tikka--Chaap/Malai-Chaap.jpeg">

                                    <h5 class="card-title" style="color:white;">Malai Chaap</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Course-Meals/Tikka--Chaap/Tandori-Chaap.jpg">

                                    <h5 class="card-title" style="color:white;">Tandori Chapp</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev w-auto" href="#recipeCarousel2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next w-auto" href="#recipeCarousel2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!-- <h5 class="mt-2">Advances one slide at a time</h5> -->
        </div>
        <!-- Tikka & Chaap ENDS -->

        <!-- Burger -->
        <div class="container text-center my-3">
            <h2 class="font-weight-light">BURGERS</h2>
            <div class="row mx-auto my-auto">
                <div id="recipeCarousel3" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Course-Meals/Burger/Copycat-In-N-Out-Vegan.jpeg">

                                    <h5 class="card-title" style="color:white;">Copycat In-N-Out Vegan</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Course-Meals/Burger/Cheesy-Portobello-Burgers .jpg">

                                    <h5 class="card-title" style="color:white;">Cheesy Portobello Burgers</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Course-Meals/Burger/Classic-Veggie-Burger.png">

                                    <h5 class="card-title" style="color:white;">Classic Veggie Burger</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Course-Meals/Burger/Falafel-Burgers.jpg">

                                    <h5 class="card-title" style="color:white;">Falafel Burgers</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Course-Meals/Burger/Portobello-Mushroom-Burger .webp">

                                    <h5 class="card-title" style="color:white;">Portobell Mushroom Burger </h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Course-Meals/Burger/ultimate-veggie-burger.webp">

                                    <h5 class="card-title" style="color:white;">Ultimate Veggie Burger</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Course-Meals/Burger/big-mac.jpg">

                                    <h5 class="card-title" style="color:white;">Big Mac</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev w-auto" href="#recipeCarousel3" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next w-auto" href="#recipeCarousel3" role="button" data-slide="next">
                        <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!-- <h5 class="mt-2">Advances one slide at a time</h5> -->
        </div>
        <!-- Burger ENDS -->

<!-------------------------------------------- DRINKS --------------------------------------------->

    <h1 class="w3-center text-center" 
    style="background-image: linear-gradient(#5e0000, #380101);;color: white;padding:25px;"
    id='drinks'
    >DRINKS</h1>
    <!-- Soft Drinks -->
        <div class="container text-center my-3">
            <h2 class="font-weight-light">SOFT DRINKS</h2>
            <div class="row mx-auto my-auto">
                <div id="recipeCarousel4" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-md-4">
                                <div class="card card-body" >
                                    <img class="img-fluid" src="images/Drinks/Soft Drinks/Coke.webp">

                                    <h5 class="card-title">Coke</h5> 
               <!-- <p class="card-text">Take your mojito cocktail to the next level with the warmth of complex spices. This jaljeera-inspired version explodes with a heady mix of cumin, coriander, and ginger.</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Soft Drinks/Pepsi.jpg">

                                    <h5 class="card-title" style="color:white;">Pepsi</h5> 
                <!-- <p class="card-text">When I have ripe mangoes on hand, trust that I’ll make at least a pitcher of this mango mojito.</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Soft Drinks/Sprite.jpg">

                                    <h5 class="card-title" style="color:white;">Sprite</h5> 
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Soft Drinks/Maaza-mango-drink.webp">

                                    <h5 class="card-title" style="color:white;">Maaza</h5> 
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Soft Drinks/Fanta.png">

                                    <h5 class="card-title" style="color:white;">Fanta</h5> 
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Soft Drinks/7UP.jpg">

                                    <h5 class="card-title" style="color:white;">7UP</h5> 
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Soft Drinks/Limca.jpeg">

                                    <h5 class="card-title" style="color:white;">Limca</h5> 
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Soft Drinks/Mountain_Dew.jpg">

                                    <h5 class="card-title" style="color:white;">Mountain Dew</h5> 
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Soft Drinks/Mirinda.jpg">

                                    <h5 class="card-title" style="color:white;">Mirinda</h5> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev w-auto" href="#recipeCarousel4" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next w-auto" href="#recipeCarousel4" role="button" data-slide="next">
                        <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!-- <h5 class="mt-2">Advances one slide at a time</h5> -->
        </div>
        <!-- Soft Drinks Ends -->

        <!-- Beer -->
        <div class="container text-center my-3">
            <h2 class="font-weight-light">BEERS</h2>
            <div class="row mx-auto my-auto">
                <div id="recipeCarousel5" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Beer/Kingfisher.jpeg">

                                    <h5 class="card-title" style="color:white;">Kingfisher</h5> 
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Beer/Carlsberg.jpg">

                                    <h5 class="card-title" style="color:white;">Carlsberg</h5> 
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Beer/Budweiser.webp">

                                    <h5 class="card-title" style="color:white;">Budweiser</h5> 
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Beer/Tuborg.jpg">

                                    <h5 class="card-title" style="color:white;">Tuborg</h5> 
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Beer/heineken.jpg">

                                    <h5 class="card-title" style="color:white;">Heineken</h5> 
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Beer/Foster's.jpg">

                                    <h5 class="card-title" style="color:white;">Foster's</h5> 
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Beer/Haywards_5000.jpg">

                                    <h5 class="card-title" style="color:white;">Haywards 5000</h5> 
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Beer/Godfather.jpg">

                                    <h5 class="card-title" style="color:white;">Godfather</h5> 
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Beer/hoegaarden.jpg">

                                    <h5 class="card-title" style="color:white;">Hoegaarden</h5> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev w-auto" href="#recipeCarousel5" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next w-auto" href="#recipeCarousel5" role="button" data-slide="next">
                        <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!-- <h5 class="mt-2">Advances one slide at a time</h5> -->
        </div>
        <!-- BEER ENDS -->

        <!-- WINE -->
        <div class="container text-center my-3">
            <h2 class="font-weight-light">WINES</h2>
            <div class="row mx-auto my-auto">
                <div id="recipeCarousel6" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Wine/Fratelli Sangiovese Bianco.jpg">

                                    <h5 class="card-title" style="color:white;">Fratelli Sangiovese Bianco</h5> 
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Wine/Krsma Sangiovese.jpg">

                                    <h5 class="card-title" style="color:white;">Krsma Sangiovese</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Wine/Charosa Selections Sauvignon Blanc.jpg">

                                    <h5 class="card-title" style="color:white;">Charosa Selections Sauvignon Blanc</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Wine/York Sparking Cuvee Brut.webp">

                                    <h5 class="card-title" style="color:white;">York Sparking Cuvee Brut</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Wine/Myra-Cabernet-Sauvignon.jpg">

                                    <h5 class="card-title" style="color:white;">Myra-Cabernet-Sauvignon</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Wine/Sula Dindori Reserve Shiraz.webp">

                                    <h5 class="card-title" style="color:white;">Sula Dindori Reserve Shiraz</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Wine/Four Seasons Blush.webp">

                                    <h5 class="card-title" style="color:white;">Four Seasons Blush</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Wine/Zampa Soiree Brut.webp">

                                    <h5 class="card-title" style="color:white;">Zampa Soiree Brut</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Wine/BIG-BANYAN-CABERNET-SAUVIGNON-750-ML.jpg">

                                    <h5 class="card-title" style="color:white;">BANYAN CABERNET SAUVIGNON</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev w-auto" href="#recipeCarousel6" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next w-auto" href="#recipeCarousel6" role="button" data-slide="next">
                        <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!-- <h5 class="mt-2">Advances one slide at a time</h5> -->
        </div>
        <!-- WINES ENDS -->

        <!-- Cocktails -->
        <div class="container text-center my-3">
            <h2 class="font-weight-light">COCKTAILS & MOCKTAILS</h2>
            <div class="row mx-auto my-auto">
                <div id="recipeCarousel7" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Cocktails/boozy.jpg">

                                    <h5 class="card-title" style="color:white;">Boozy Mango & Kaffir Lime Lassi</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Cocktails/Jaisalmer.jfif">

                                    <h5 class="card-title" style="color:white;">Jaisalmer Golden Fort Kin</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Cocktails/jaljeera.jpg">

                                    <h5 class="card-title" style="color:white;">Indian Jaljeera Mojito</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Cocktails/mango-mojito.jpg">

                                    <h5 class="card-title" style="color:white;">Mango Mojito </h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Cocktails/nimbu.jfif">

                                    <h5 class="card-title" style="color:white;">Nimbu Pani Mint Julep</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Cocktails/tamarind.jpg">

                                    <h5 class="card-title" style="color:white;">Tamarind Ginger Margarita</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev w-auto" href="#recipeCarousel7" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next w-auto" href="#recipeCarousel7" role="button" data-slide="next">
                        <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!-- <h5 class="mt-2">Advances one slide at a time</h5> -->
        </div>
        <!-- Cocktails ENDS -->

        <!-- Hot Drinks -->
        <div class="container text-center my-3">
            <h2 class="font-weight-light">HOT DRINKS</h2>
            <div class="row mx-auto my-auto">
                <div id="recipeCarousel8" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Hot Drinks/Chai.webp">

                                    <h5 class="card-title" style="color:white;">Chai</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Hot Drinks/Coffee.webp">

                                    <h5 class="card-title" style="color:white;">Coffee</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Hot Drinks/Freshmint.webp">

                                    <h5 class="card-title" style="color:white;">Freshmint</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Hot Drinks/Fruittea.webp">

                                    <h5 class="card-title" style="color:white;">Fruit Tea</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Hot Drinks/Ginger.webp">

                                    <h5 class="card-title" style="color:white;">Ginger Tea</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Hot Drinks/Greentea.webp">

                                    <h5 class="card-title" style="color:white;">Green Tea</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Hot Drinks/Hotchocolate.jpg">

                                    <h5 class="card-title" style="color:white;">Hot Chocolate</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Drinks/Hot Drinks/Lemon.webp">

                                    <h5 class="card-title" style="color:white;">Lemon Tea</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev w-auto" href="#recipeCarousel8" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next w-auto" href="#recipeCarousel8" role="button" data-slide="next">
                        <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!-- <h5 class="mt-2">Advances one slide at a time</h5> -->
        </div>
        <!-- HOT DRINKS ENDS -->

<!-------------------------------------------- DESSERTS --------------------------------------------->

        <h1 class="w3-center text-center" 
        style="background-image: linear-gradient(#5e0000, #380101); 
        color: white; 
        padding:25px;"
        id='desserts'
        >DESSERTS</h1>

        <!--Sweets -->
        <div class="container text-center my-3">
            <h2 class="font-weight-light">Sweets</h2>
            <div class="row mx-auto my-auto">
                <div id="recipeCarousel9" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-md-4">
                                <div class="card card-body" >
                                    <img class="img-fluid" src="images/Desearts/Sweets/Seviyan.webp">

                                    <h5 class="card-title">Seviyan</h5> 
               <!-- <p class="card-text">Take your mojito cocktail to the next level with the warmth of complex spices. This jaljeera-inspired version explodes with a heady mix of cumin, coriander, and ginger.</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Desearts/Sweets/Gajrela.jpg">

                                    <h5 class="card-title" style="color:white;">Gajrela</h5> 
                <!-- <p class="card-text">When I have ripe mangoes on hand, trust that I’ll make at least a pitcher of this mango mojito.</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Desearts/Sweets/Jalebi.png">

                                    <h5 class="card-title" style="color:white;">Jalebi</h5> 
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Desearts/Sweets/Rasmalai.jpg">

                                    <h5 class="card-title" style="color:white;">Rasmalai</h5> 
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Desearts/Sweets/Badam-Kheer.jpg">

                                    <h5 class="card-title" style="color:white;">Badam Kheer</h5> 
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Desearts/Sweets/Rasgulla.webp">

                                    <h5 class="card-title" style="color:white;">Rasgulla</h5> 
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Desearts/Sweets/Gulab Jamun.jpg">

                                    <h5 class="card-title" style="color:white;">Gulab Jamun</h5> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev w-auto" href="#recipeCarousel9" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next w-auto" href="#recipeCarousel9" role="button" data-slide="next">
                        <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!-- <h5 class="mt-2">Advances one slide at a time</h5> -->
        </div>
        <!-- Sweets Ends -->

        <!-- Cakes -->
        <div class="container text-center my-3">
            <h2 class="font-weight-light">CAKES</h2>
            <div class="row mx-auto my-auto">
                <div id="recipeCarousel10" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Desearts/Cakes/Black-Forest-cake.webp">

                                    <h5 class="card-title" style="color:white;">Black Forest</h5> 
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Desearts/Cakes/Cherry-Pineapple-Cake.webp">

                                    <h5 class="card-title" style="color:white;">Pineapple</h5> 
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Desearts/Cakes/Mouth-Watering-Crunchy-Butterscotch.webp">

                                    <h5 class="card-title" style="color:white;">Butterscotch</h5> 
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Desearts/Cakes/Red-velvet-cake.jpg">

                                    <h5 class="card-title" style="color:white;">Red Velvet</h5> 
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Desearts/Cakes/Fruit-cake.jpg">

                                    <h5 class="card-title" style="color:white;">Fruit Cake</h5> 
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Desearts/Cakes/Strawberry-Cake.avif">

                                    <h5 class="card-title" style="color:white;">Strawberry Cake</h5> 
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Desearts/Cakes/Blue-Berry.jpeg">

                                    <h5 class="card-title" style="color:white;">BlueBerry</h5> 
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Desearts/Cakes/Mango-cake.jpeg">

                                    <h5 class="card-title" style="color:white;">Mango Cake</h5> 
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Desearts/Cakes/fresh-vanilla-cake.webp">

                                    <h5 class="card-title" style="color:white;">Vanilla Cake</h5> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev w-auto" href="#recipeCarousel10" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next w-auto" href="#recipeCarousel10" role="button" data-slide="next">
                        <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!-- <h5 class="mt-2">Advances one slide at a time</h5> -->
        </div>
        <!-- Cakes ENDS -->

        <!-- Shakes -->
        <div class="container text-center my-3">
            <h2 class="font-weight-light">SHAKES</h2>
            <div class="row mx-auto my-auto">
                <div id="recipeCarousel11" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Desearts/Shakes/Caramel-corn-milkshake.jpg">

                                    <h5 class="card-title" style="color:white;">Caramel Corn</h5> 
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Desearts/Shakes/Delicious-Healthy-Strawberry-Shake.jpg">

                                    <h5 class="card-title" style="color:white;">Strawberry Shake</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Desearts/Shakes/Kit-kat-Milkshakes.png">

                                    <h5 class="card-title" style="color:white;">Kit Kat</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Desearts/Shakes/StrawberryOreoMilkshake.jpg">

                                    <h5 class="card-title" style="color:white;">Strawberry Oreo</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Desearts/Shakes/Vanilla-Milkshake.jpg">

                                    <h5 class="card-title" style="color:white;">Vanilla</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Desearts/Shakes/ButterScotch.png">

                                    <h5 class="card-title" style="color:white;">ButterScotch</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Desearts/Shakes/mango-shake.webp">

                                    <h5 class="card-title" style="color:white;">Mango</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Desearts/Shakes/BlueBerry.webp">

                                    <h5 class="card-title" style="color:white;">BlueBerry</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Desearts/Shakes/Bourbon-vanilla-and-chocolate-milkshake.jpg">

                                    <h5 class="card-title" style="color:white;">Bourbon ChocoVanilla</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev w-auto" href="#recipeCarousel11" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next w-auto" href="#recipeCarousel11" role="button" data-slide="next">
                        <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!-- <h5 class="mt-2">Advances one slide at a time</h5> -->
        </div>
        <!-- WINES ENDS -->

        <!-- Ice Creams-->
        <div class="container text-center my-3">
            <h2 class="font-weight-light">ICE CREAMS</h2>
            <div class="row mx-auto my-auto">
                <div id="recipeCarousel12" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Desearts/Ice-Cream/butterscotch-ice-cream.jpg">

                                    <h5 class="card-title" style="color:white;">ButterScotch</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Desearts/Ice-Cream/Strawberry.webp">

                                    <h5 class="card-title" style="color:white;">Strawberry</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Desearts/Ice-Cream/vanilla custard ice cream.JPG">

                                    <h5 class="card-title" style="color:white;">Vanilla</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Desearts/Ice-Cream/Blueberry-Ice-Cream.jpg">

                                    <h5 class="card-title" style="color:white;">BlueBerry</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Desearts/Ice-Cream/Pista-Badam.jpg">

                                    <h5 class="card-title" style="color:white;">Pista Badam</h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="images/Desearts/Ice-Cream/pan-masala-ice-cream.jpg">

                                    <h5 class="card-title" style="color:white;">Paan</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev w-auto" href="#recipeCarousel12" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next w-auto" href="#recipeCarousel12" role="button" data-slide="next">
                        <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!-- <h5 class="mt-2">Advances one slide at a time</h5> -->
        </div>
        <!-- Ice Creams ENDS -->

        <script>
//             $('#recipeCarousel, #recipeCarousel1, #recipeCarousel2').carousel({
//   interval: 10000
// })

$('.carousel .carousel-item').each(function(){
    var minPerSlide = 3;
    var next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    
    for (var i=0;i<minPerSlide;i++) {
        next=next.next();
        if (!next.length) {
        	next = $(this).siblings(':first');
      	}
        
        next.children(':first-child').clone().appendTo($(this));
      }
});

        </script>
        <?php require 'footer.php' ?>
    </body>
</html>