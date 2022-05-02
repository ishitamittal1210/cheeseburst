<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://fonts.googleapis.com/css?family=Ewert' rel='stylesheet'>
  <title>Document</title>
  <style>
.overlayText {
    position:absolute;
     top:50%;
     left:20%;
     z-index:1;
   }
   
   #topText {
     color: white;
     font-size: 20px;
     align-self: center;
     font-size: 50px;
     font-family: Ewert;
     color: black;
   }
   @media only screen and (max-width: 600px) {
    #topText {
     display: none;
   }
   }

  </style>
</head>
<body>
<header style="background-color: black;color: white;">
        <!-- <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="carousel-caption">
                    <h2 class="banner-headding">Quality F<span>oo</span>ds</h2>
                    <p class="banner-sub-hed">Healthy Food for healthy body</p>
                </div>
                <img src="http://themes.templatescoder.com/pizzon/html/demo/1-0/images/pizza-banner-1.png" alt="Los Angeles" class="rounded mx-auto d-block">
                   
              </div>
              <div class="carousel-item"> -->
                <!-- <img src="http://themes.templatescoder.com/pizzon/html/demo/1-0/images/banner-bg-1.png" alt="Chicago" width="1100" height="500"> -->
                <!-- <img src="./images/pizza.gif" alt="" width="1100" height="500" class="rounded mx-auto d-block">
                <div class="carousel-caption">
                  <h1>Food Made With Love</h1> -->
                  <!-- <p>We love the Big Apple!</p> -->
                <!-- </div>    -->

                <!-- <div class="carousel-caption"> -->
                  <!-- <h3>Chicago</h3> -->
                  <!-- <p>Thank you, Chicago!</p> -->
                <!-- </div>   
              </div>
              <div class="carousel-item">
                <img src="./images/drinks.gif" alt="" width="1100" height="1000" class="rounded mx-auto d-block">
                <div class="carousel-caption"> -->
                  <!-- <h3>New York</h3> -->
                  <!-- <p>We love the Big Apple!</p> -->
                <!-- </div>   
              </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div> -->
          <div class="hero__background" >
            <video playsinline="" autoplay="" muted="" loop="" style="width: 100%;"> 
              <source src="images/HORNO.mp4" type="video/mp4"></video>
              <div class="overlayText">
                <h1 id="topText">Food Bursting with Flavour</h1>
              </div>
          </div>
    </header>
</body>
</html>