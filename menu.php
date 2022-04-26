<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      /* body{margin-top: 50px; margin-bottom: 100px;} */

/* equal card height */
.row-equal > div[class*='col-'] {
    display: flex;
    flex: 1 0 auto;
}

.row-equal .card {
   width: 100%;
}

/* ensure equal card height inside carousel */
.carousel-inner>.row-equal.active, 
.carousel-inner>.row-equal.next, 
.carousel-inner>.row-equal.prev {
    display: flex;
}

/* prevent flicker during transition */
.carousel-inner>.row-equal.active.left, 
.carousel-inner>.row-equal.active.right {
    opacity: 0.5;
    display: flex;
}


/* control image height */
.card-img-top-250 {
    max-height: 250px;
    overflow:hidden;
}


.card-header{color:dodgerblue}
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="font-size: 20px;">
        <a class="navbar-brand" href="#"><span style="color: yellow">Cheese</span> <span style="color: red">Bur</span><span style="color: orange">st</span></a>
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
                    <a class="nav-link" href="#"><i class="fa fa-fw fa-search"></i> Search</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about.php"><i class="fa fa-fw fa-address-card"></i>About</a>
                </li>
                    
                <li class="nav-item">
                    <a class="nav-link" href="contact.php"><i class="fa fa-fw fa-envelope"></i> Contact Us</a>
                </li> 

                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-fw fa-user"></i> Login</a>
                </li>


            </ul>
        </div>  
    </nav>
    <!-- <div>
        <ul>
            <li>Mains</li>
            <li>Mains</li>
            <li>Mains</li>
            <li>Mains</li>
        </ul>
    </div> -->

<!-- MAINS -->

    <div style="font-size: 30px;padding-left: 20px;color: black;background-color: white;">MAINS</div>
    <section class="carousel slide" data-ride="carousel" id="postsCarousel" style="background-color: black;">
    <h1>Pizza</h1>
    <div class="container">
        <div class="row">
            <div class="col-12 text-right mb-4">
                <a class="btn btn-outline-secondary prev" href="" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
                <a class="btn btn-outline-secondary next" href="" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
    <div class="container p-t-0 m-t-2 carousel-inner">
        <div class="row row-equal carousel-item active m-t-0">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/29223655865_4b8b01989e.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/35515203036_f8006072b8.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower2</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/3d75927b210409af8582828c4049fcd0.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row row-equal carousel-item m-t-0">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/45590771a1ee18248a49bd399ef99bf1--posts.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
           <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/917d7b69ebd58d0ef0e561cdcb016303--red-rose-bouquet-red-rose-flower.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
           <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/29223655865_4b8b01989e.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="carousel slide" data-ride="carousel" id="postsCarousel" style="background-color: black;">
    <h1>Burger</h1>
    <div class="container">
        <div class="row">
            <div class="col-12 text-right mb-4">
                <a class="btn btn-outline-secondary prev" href="" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
                <a class="btn btn-outline-secondary next" href="" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
    <div class="container p-t-0 m-t-2 carousel-inner">
        <div class="row row-equal carousel-item active m-t-0">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/29223655865_4b8b01989e.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/35515203036_f8006072b8.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower2</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/3d75927b210409af8582828c4049fcd0.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row row-equal carousel-item m-t-0">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/45590771a1ee18248a49bd399ef99bf1--posts.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
           <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/917d7b69ebd58d0ef0e561cdcb016303--red-rose-bouquet-red-rose-flower.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
           <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/29223655865_4b8b01989e.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="carousel slide" data-ride="carousel" id="postsCarousel" style="background-color: black;">
    <h1>Pasta</h1>
    <div class="container">
        <div class="row">
            <div class="col-12 text-right mb-4">
                <a class="btn btn-outline-secondary prev" href="" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
                <a class="btn btn-outline-secondary next" href="" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
    <div class="container p-t-0 m-t-2 carousel-inner">
        <div class="row row-equal carousel-item active m-t-0">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/29223655865_4b8b01989e.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/35515203036_f8006072b8.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower2</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/3d75927b210409af8582828c4049fcd0.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row row-equal carousel-item m-t-0">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/45590771a1ee18248a49bd399ef99bf1--posts.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
           <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/917d7b69ebd58d0ef0e561cdcb016303--red-rose-bouquet-red-rose-flower.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
           <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/29223655865_4b8b01989e.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="carousel slide" data-ride="carousel" id="postsCarousel" style="background-color: black;">
    <h1>Salads</h1>
    <div class="container">
        <div class="row">
            <div class="col-12 text-right mb-4">
                <a class="btn btn-outline-secondary prev" href="" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
                <a class="btn btn-outline-secondary next" href="" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
    <div class="container p-t-0 m-t-2 carousel-inner">
        <div class="row row-equal carousel-item active m-t-0">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/29223655865_4b8b01989e.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/35515203036_f8006072b8.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower2</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/3d75927b210409af8582828c4049fcd0.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row row-equal carousel-item m-t-0">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/45590771a1ee18248a49bd399ef99bf1--posts.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
           <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/917d7b69ebd58d0ef0e561cdcb016303--red-rose-bouquet-red-rose-flower.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
           <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/29223655865_4b8b01989e.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SIDES -->

<div style="font-size: 30px;padding-left: 20px;color: black;background-color: white;">SIDES</div>
    <section class="carousel slide" data-ride="carousel" id="postsCarousel" style="background-color: black;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-right mb-4">
                <a class="btn btn-outline-secondary prev" href="" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
                <a class="btn btn-outline-secondary next" href="" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
    <div class="container p-t-0 m-t-2 carousel-inner">
        <div class="row row-equal carousel-item active m-t-0">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/29223655865_4b8b01989e.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/35515203036_f8006072b8.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower2</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/3d75927b210409af8582828c4049fcd0.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row row-equal carousel-item m-t-0">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/45590771a1ee18248a49bd399ef99bf1--posts.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
           <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/917d7b69ebd58d0ef0e561cdcb016303--red-rose-bouquet-red-rose-flower.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
           <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/29223655865_4b8b01989e.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
<!-- Drinks -->

<div style="font-size: 30px;padding-left: 20px;color: black;background-color: white;">DRINKS</div>
    <section class="carousel slide" data-ride="carousel" id="postsCarousel" style="background-color: black;">
    <h1>Soft Drink</h1>
    <div class="container">
        <div class="row">
            <div class="col-12 text-right mb-4">
                <a class="btn btn-outline-secondary prev" href="" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
                <a class="btn btn-outline-secondary next" href="" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
    <div class="container p-t-0 m-t-2 carousel-inner">
        <div class="row row-equal carousel-item active m-t-0">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/29223655865_4b8b01989e.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/35515203036_f8006072b8.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower2</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/3d75927b210409af8582828c4049fcd0.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row row-equal carousel-item m-t-0">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/45590771a1ee18248a49bd399ef99bf1--posts.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
           <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/917d7b69ebd58d0ef0e561cdcb016303--red-rose-bouquet-red-rose-flower.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
           <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/29223655865_4b8b01989e.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="carousel slide" data-ride="carousel" id="postsCarousel" style="background-color: black;">
    <h1>Beer</h1>
    <div class="container">
        <div class="row">
            <div class="col-12 text-right mb-4">
                <a class="btn btn-outline-secondary prev" href="" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
                <a class="btn btn-outline-secondary next" href="" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
    <div class="container p-t-0 m-t-2 carousel-inner">
        <div class="row row-equal carousel-item active m-t-0">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/29223655865_4b8b01989e.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/35515203036_f8006072b8.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower2</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/3d75927b210409af8582828c4049fcd0.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row row-equal carousel-item m-t-0">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/45590771a1ee18248a49bd399ef99bf1--posts.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
           <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/917d7b69ebd58d0ef0e561cdcb016303--red-rose-bouquet-red-rose-flower.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
           <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/29223655865_4b8b01989e.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="carousel slide" data-ride="carousel" id="postsCarousel" style="background-color: black;">
    <h1>Wine</h1>
    <div class="container">
        <div class="row">
            <div class="col-12 text-right mb-4">
                <a class="btn btn-outline-secondary prev" href="" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
                <a class="btn btn-outline-secondary next" href="" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
    <div class="container p-t-0 m-t-2 carousel-inner">
        <div class="row row-equal carousel-item active m-t-0">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/29223655865_4b8b01989e.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/35515203036_f8006072b8.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower2</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/3d75927b210409af8582828c4049fcd0.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row row-equal carousel-item m-t-0">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/45590771a1ee18248a49bd399ef99bf1--posts.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
           <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/917d7b69ebd58d0ef0e561cdcb016303--red-rose-bouquet-red-rose-flower.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
           <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/29223655865_4b8b01989e.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="carousel slide" data-ride="carousel" id="postsCarousel" style="background-color: black;">
    <h1>Hot Drink</h1>
    <div class="container">
        <div class="row">
            <div class="col-12 text-right mb-4">
                <a class="btn btn-outline-secondary prev" href="" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
                <a class="btn btn-outline-secondary next" href="" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
    <div class="container p-t-0 m-t-2 carousel-inner">
        <div class="row row-equal carousel-item active m-t-0">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/29223655865_4b8b01989e.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/35515203036_f8006072b8.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower2</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/3d75927b210409af8582828c4049fcd0.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row row-equal carousel-item m-t-0">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/45590771a1ee18248a49bd399ef99bf1--posts.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
           <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/917d7b69ebd58d0ef0e561cdcb016303--red-rose-bouquet-red-rose-flower.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
           <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/29223655865_4b8b01989e.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="carousel slide" data-ride="carousel" id="postsCarousel" style="background-color: black;">
    <h1>Cocktails & Shakes</h1>
    <div class="container">
        <div class="row">
            <div class="col-12 text-right mb-4">
                <a class="btn btn-outline-secondary prev" href="" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
                <a class="btn btn-outline-secondary next" href="" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
    <div class="container p-t-0 m-t-2 carousel-inner">
        <div class="row row-equal carousel-item active m-t-0">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/29223655865_4b8b01989e.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/35515203036_f8006072b8.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower2</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/3d75927b210409af8582828c4049fcd0.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row row-equal carousel-item m-t-0">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/45590771a1ee18248a49bd399ef99bf1--posts.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
           <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/917d7b69ebd58d0ef0e561cdcb016303--red-rose-bouquet-red-rose-flower.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
           <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/29223655865_4b8b01989e.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- DESERTS -->

<div style="font-size: 30px;padding-left: 20px;color: black;background-color: white;">DESERTS</div>
    <section class="carousel slide" data-ride="carousel" id="postsCarousel" style="background-color: black;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-right mb-4">
                <a class="btn btn-outline-secondary prev" href="" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
                <a class="btn btn-outline-secondary next" href="" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
    <div class="container p-t-0 m-t-2 carousel-inner">
        <div class="row row-equal carousel-item active m-t-0">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/29223655865_4b8b01989e.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/35515203036_f8006072b8.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower2</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/3d75927b210409af8582828c4049fcd0.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row row-equal carousel-item m-t-0">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/45590771a1ee18248a49bd399ef99bf1--posts.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
           <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/917d7b69ebd58d0ef0e561cdcb016303--red-rose-bouquet-red-rose-flower.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
           <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/29223655865_4b8b01989e.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



    <?php require 'footer.php' ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script>
    (function($){
        "use strict";
        $('.next').click(function(){ $('.carousel').carousel('next');return false; });
        $('.prev').click(function(){ $('.carousel').carousel('prev');return false; });
    })	
    (jQuery);
    </script>
</body>
</html>