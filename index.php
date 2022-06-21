    <?php include('partials-front/menu.php'); ?>



    

<!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="<?php echo SITEURL; ?>food-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>


<!-- fOOD sEARCH Section Ends Here  -->










        <!-- Order section start here -->

        <!-- <div class="order-top" style="background-color: black;"><img src="images/order-top.png" alt="layer"></div>
    <section class="order-section ptb">
            <div class="container"> 
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 servose-box text-center padding-lf">
                        <img src="http://themes.templatescoder.com/pizzon/html/demo/1-0/images/order-1.svg" alt="order" class="order-img">
                        <h2 class="order-title text-uppercase">order your Food</h2> -->
                        <!-- <p class="order-des">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-</p> -->
                    <!-- </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 servose-box text-center padding-lf">
                        <img src="http://themes.templatescoder.com/pizzon/html/demo/1-0/images/order-2.svg" alt="delivery" class="order-img">
                        <h2 class="order-title text-uppercase">delivery or pick up</h2> -->
                        <!-- <p class="order-des">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-</p> -->
                    <!-- </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 servose-box text-center padding-lf">
                        <img src="http://themes.templatescoder.com/pizzon/html/demo/1-0/images/order-3.svg" alt="delicious" class="order-img">
                        <h2 class="order-title text-uppercase">delicious recipe</h2> -->
                        <!-- <p class="order-des">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-</p> -->
                    <!-- </div>
                    
                </div>
            </div>
    </section>
    <div class="order-bottom"><img src="images/fused.png" alt="layer" style="width: 100%;"></div> -->

    <!-- Order section ends here -->




    <?php 
        if(isset($_SESSION['order']))
        {
            echo $_SESSION['order'];
            unset($_SESSION['order']);
        }
    ?>

    








<br>
<br>
<br>


<!-- CAtegories Section Starts Here -->

    <section class="categories">
        <div class="container">
            <!-- <h2 class="text-center">Explore Foods</h2> -->
            
        <div class="sec-title text-center mb-5">
             <p class="sec-sub-title mb-3" style="text-transform: uppercase; display: inline-block; background: #f3f3f5; box-shadow: 9px 9px 12px #e4e4e4, -9px -9px 12px #ffffff; padding: 3px 20px; border-radius: 60px; color: #ff8243; font-size: 25px;">Explore Foods</p>
        </div>   

            <?php 
                //Create SQL Query to Display CAtegories from Database
                $sql = "SELECT * FROM tbl_category WHERE active='Yes' AND featured='Yes' LIMIT 3";
                //Execute the Query
                $res = mysqli_query($conn, $sql);
                //Count rows to check whether the category is available or not
                $count = mysqli_num_rows($res);

                if($count>0)
                {
                    //CAtegories Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the Values like id, title, image_name
                        $id = $row['id'];
                        $title = $row['title'];
                        $image_name = $row['image_name'];
                        ?>
                        
                        <a href="<?php echo SITEURL; ?>category-foods.php?category_id=<?php echo $id; ?>">
                            <div class="box-3 float-container">
                                <?php 
                                    //Check whether Image is available or not
                                    if($image_name=="")
                                    {
                                        //Display MEssage
                                        echo "<div class='error'>Image not Available</div>";
                                    }
                                    else
                                    {
                                        //Image Available
                                        ?>
                                        <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" alt="Pizza" class="img-responsive img-curve">
                                        <?php
                                    }
                                ?>
                                

                                <h3 class="float-text" style="color: orange;font-size: 25px;"><?php echo $title; ?></h3>
                            </div>
                        </a>

                        <?php
                    }
                }
                else
                {
                    //Categories not Available
                    echo "<div class='error'>Category not Added.</div>";
                }
            ?>


            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->








    <!-- fOOD MEnu Section Starts Here -->

    <section class="food-menu">
        <div class="container">
            <!-- <h2 class="text-center">Food Menu</h2> -->
            <div class="sec-title text-center mb-5">
             <p class="sec-sub-title mb-3" style="text-transform: uppercase; display: inline-block; background: #f3f3f5; box-shadow: 9px 9px 12px #e4e4e4, -9px -9px 12px #ffffff; padding: 3px 20px; border-radius: 60px; color: #ff8243; font-size: 25px;">Food Menu</p>
            </div>  

            <?php 
            
            //Getting Foods from Database that are active and featured
            //SQL Query
            $sql2 = "SELECT * FROM tbl_food WHERE active='Yes' AND featured='Yes' LIMIT 6";

            //Execute the Query
            $res2 = mysqli_query($conn, $sql2);

            //Count Rows
            $count2 = mysqli_num_rows($res2);

            //CHeck whether food available or not
            if($count2>0)
            {
                //Food Available
                while($row=mysqli_fetch_assoc($res2))
                {
                    //Get all the values
                    $id = $row['id'];
                    $title = $row['title'];
                    $price = $row['price'];
                    $description = $row['description'];
                    $image_name = $row['image_name'];
                    ?>

                    <div class="food-menu-box">
                        <div class="food-menu-img">
                            <?php 
                                //Check whether image available or not
                                if($image_name=="")
                                {
                                    //Image not Available
                                    echo "<div class='error'>Image not available.</div>";
                                }
                                else
                                {
                                    //Image Available
                                    ?>
                                    <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                                    <?php
                                }
                            ?>
                            
                        </div>

                        <div class="food-menu-desc">
                            <h4><?php echo $title; ?></h4>
                            <p class="food-price">$<?php echo $price; ?></p>
                            <p class="food-detail">
                                <?php echo $description; ?>
                            </p>
                            <br>

                            <a href="<?php echo SITEURL; ?>order.php?food_id=<?php echo $id; ?>" class="btn btn-primary"> Order Now </a>
                        </div>
                    </div>

                    <?php
                }
            }
            else
            {
                //Food Not Available 
                echo "<div class='text-danger'>Food not available.</div>";
            }
            
            ?>

            

 

            <div class="clearfix"></div>

            

        </div>

        <p class="text-center">
            <a href="<?php echo SITEURL; ?>foods.php">See All Foods</a>
        </p>
    </section>


<!-- fOOD Menu Section Ends Here -->


<!----------- images slideshow starts here  -->



<div class="row" id="gallery" style="padding-top: 120px">
                            <div class="col-lg-10 m-auto">
                                <div class="book-table-img-slider" id="icon">
                                    <div class="swiper-wrapper">
                                        <a href="assets/images/bt1.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(images/bt1.jpg); height: 70vh; min-height: 500px; border-radius: 80px; background-position: center; background-size: cover;"></a>
                                        <a href="assets/images/bt2.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(images/bt2.jpg); height: 70vh; min-height: 500px; border-radius: 80px; background-position: center; background-size: cover;"></a>
                                        <a href="assets/images/bt3.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(images/bt3.jpg); height: 70vh; min-height: 500px; border-radius: 80px; background-position: center; background-size: cover;"></a>
                                        <a href="assets/images/bt4.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(images/bt4.jpg); height: 70vh; min-height: 500px; border-radius: 80px; background-position: center; background-size: cover;"></a>
                                        <a href="assets/images/bt1.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(images/bt1.jpg); height: 70vh; min-height: 500px; border-radius: 80px; background-position: center; background-size: cover;"></a>
                                        <a href="assets/images/bt2.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(images/bt2.jpg); height: 70vh; min-height: 500px; border-radius: 80px; background-position: center; background-size: cover;"></a>
                                        <a href="assets/images/bt3.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(images/bt3.jpg); height: 70vh; min-height: 500px; border-radius: 80px; background-position: center; background-size: cover;"></a>
                                        <a href="assets/images/bt4.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(images/bt4.jpg); height: 70vh; min-height: 500px; border-radius: 80px; background-position: center; background-size: cover;"></a>
                                    </div>

                                    <div class="swiper-button-wp" style="position: relative; margin-top: 60px; display: flex; justify-content: space-between; height: 60px; align-items: center;">
                                        <div class="swiper-button-prev swiper-button" style="::after{display: none}; position: unset; width: 60px; height: 60px; display: inline-flex; font-size: 24px; border-radius: 50%; overflow: hidden: margin: 0; color: #0d0d25; background: #ffffff; box-shadow: -20px 20px 60px #d4d4d4, 20px -20px 60px #ffffff; padding-top: 1px; padding-right: 2px; transition: 0.3s;">
                                        <i class="fa fa-angle-left"></i>
                                        </div>
                                        <div class="swiper-button-next swiper-button" style="::after{display: none}; position: unset; width: 60px; height: 60px; display: inline-flex; font-size: 24px; border-radius: 50%; overflow: hidden: margin: 0; color: #0d0d25; background: #ffffff; box-shadow: -20px 20px 60px #d4d4d4, 20px -20px 60px #ffffff; padding-top: 1px; padding-right: 2px; transition: 0.3s;">
                                        <i class="fa fa-angle-right"></i>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination" style="padding: 10px 20px; display: inline-block; border-radius: 60px; background: linear-gradient(145deg, #ececec, #ffffff); box-shadow: 25px 28px 55px #d4d4d4,-28px -28px 55px #ffffff; max-width: fit-content; left: 50% !important; transform: translate(-50%, 0); bottom: 0 !important; color: #000;"></div>
                                </div>
                            </div>
                        </div>





<!-- images slideshow ends here -->



















<!---------------------------- team section starts ------------------------->
<br>
<br>
<br>
<br>
<br>
<section class="team-section sec-padding" id="team">

        <div class="sec-title text-center mb-5">
             <p class="sec-sub-title mb-3" style="text-transform: uppercase; display: inline-block; background: #f3f3f5; box-shadow: 9px 9px 12px #e4e4e4, -9px -9px 12px #ffffff; padding: 3px 20px; border-radius: 60px; color: #ff8243; font-size: 25px;">Our Team</p>
             <h2 class="h2-title" style="font-size: 46px; line-height: 56px; margin-bottom: 15px; text-transform: capitalize; position: relative;">Meet Our Chefs</h2>
             <div class="sec-title-shape mb-4">
                <img src="images/title-shape.svg" alt="">
             </div>
        </div>   


    <div class="container">
        <!-- <div class="row">
            <div class="section-title">
                <h2 data-title="team">Our Chefs</h2>
                <div class="sec-title text-center mb-5">
                 <p class="sec-sub-title mb-3" style="text-transform: uppercase; display: inline-block; background: #f3f3f5; box-shadow: 9px 9px 12px #e4e4e4, -9px -9px 12px #ffffff; padding: 3px 20px; border-radius: 60px; color: #ff8243; font-size: 25px;">Our Chefs</p>
               </div>  
            </div>
        </div> -->
        <br>
        
        <div class="row">
            <div class="team-item" style="position: relative; padding: 5px; border-radius: 30px; background: linear-gradient(145deg, #ececec, #ffffff); box-shadow: 28px 28px 45px #e6e6e6, -28px -28px 45px #ffffff; transition: 0.8s cubic-bezier(0.22, 0.78, 0.45, 1.02);">
                <img src="images/1.jpg" alt="team item" style=" width:100%; height: 480px; border-radius: 20px; margin-bottom: 20px; box-shadow: 9px 9px 18px rgb(194 194 194 /0.5), -9px -9px 18px rgb(255 255 255 / 0.5);  transition: transform 0.3s ease;">
                <div class="team-item-info">
                    <h4 style="font-size: 18px; margin: 0 0 10px;">Rani</h4>
                    <p>Head Chef</p>
                    <div class="icons" style="margin: 15px 0px 10px;">
                        <ul class="ul-list" style= "list-style-type: none;">
                            <li class="list" style="display: inline-block; margin: 0 6px; :last-child{margin-right:0}; :first-child{margin-left:0};">
                                <a href="#" style="width: 50px; height: 50px; display: inline-flex; justify-content: center; align-items: center; border-radius: 50%; background: linear-gradient(145deg, #e6e6e6, #ffffff); box-shadow: 4px 4px 8px #e6e6e6, -4px -4px 8px #ffffff; color: orange; font-size: 19px;">    
                                <!-- :hover{background: orange; color: #ffffff}; -->
                                    <i class="fa fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list" style="display: inline-block; margin: 0 6px; :last-child{margin-right:0}; :first-child{margin-left:0};">
                                <a href="#" style="width: 50px; height: 50px; display: inline-flex; justify-content: center; align-items: center; border-radius: 50%; background: linear-gradient(145deg, #e6e6e6, #ffffff); box-shadow: 4px 4px 8px #e6e6e6, -4px -4px 8px #ffffff; color: orange; font-size: 19px;">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li class="list" style="display: inline-block; margin: 0 6px; :last-child{margin-right:0}; :first-child{margin-left:0};">
                                <a href="#" style="width: 50px; height: 50px; display: inline-flex; justify-content: center; align-items: center; border-radius: 50%; background: linear-gradient(145deg, #e6e6e6, #ffffff); box-shadow: 4px 4px 8px #e6e6e6, -4px -4px 8px #ffffff; color: orange; font-size: 19px;">
                                <i class="fa fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="team-item" style="position: relative; padding: 5px; border-radius: 30px; background: linear-gradient(145deg, #ececec, #ffffff); box-shadow: 28px 28px 45px #e6e6e6, -28px -28px 45px #ffffff; transition: 0.8s cubic-bezier(0.22, 0.78, 0.45, 1.02);">
                <img src="images/2.jpg" alt="team item" style=" width:100%; height: 480px; border-radius: 20px; margin-bottom: 20px; box-shadow: 9px 9px 18px rgb(194 194 194 /0.5), -9px -9px 18px rgb(255 255 255 / 0.5);  transition: transform 0.3s ease;">
                <div class="team-item-info">
                    <h4 style="font-size: 18px; margin: 0 0 10px;">Raj</h4>
                    <p>Pastry Chef</p>
                    <div class="icons" style="margin: 15px 0px 10px;">
                        <ul class="ul-list" style= "list-style-type: none;">
                            <li class="list" style="display: inline-block; margin: 0 6px; :last-child{margin-right:0}; :first-child{margin-left:0};">
                                <a href="#" style="width: 50px; height: 50px; display: inline-flex; justify-content: center; align-items: center; border-radius: 50%; background: linear-gradient(145deg, #e6e6e6, #ffffff); box-shadow: 4px 4px 8px #e6e6e6, -4px -4px 8px #ffffff; color: orange; font-size: 19px;">
                                    <i class="fa fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list" style="display: inline-block; margin: 0 6px; :last-child{margin-right:0}; :first-child{margin-left:0};">
                                <a href="#" style="width: 50px; height: 50px; display: inline-flex; justify-content: center; align-items: center; border-radius: 50%; background: linear-gradient(145deg, #e6e6e6, #ffffff); box-shadow: 4px 4px 8px #e6e6e6, -4px -4px 8px #ffffff; color: orange; font-size: 19px;">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li class="list" style="display: inline-block; margin: 0 6px; :last-child{margin-right:0}; :first-child{margin-left:0};">
                                <a href="#" style="width: 50px; height: 50px; display: inline-flex; justify-content: center; align-items: center; border-radius: 50%; background: linear-gradient(145deg, #e6e6e6, #ffffff); box-shadow: 4px 4px 8px #e6e6e6, -4px -4px 8px #ffffff; color: orange; font-size: 19px;">
                                <i class="fa fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="team-item" style="position: relative; padding: 5px; border-radius: 30px; background: linear-gradient(145deg, #ececec, #ffffff); box-shadow: 28px 28px 45px #e6e6e6, -28px -28px 45px #ffffff; transition: 0.8s cubic-bezier(0.22, 0.78, 0.45, 1.02);">
                <img src="images/3.jpg" alt="team item" style=" width:100%; height: 480px; border-radius: 20px; margin-bottom: 20px; box-shadow: 9px 9px 18px rgb(194 194 194 /0.5), -9px -9px 18px rgb(255 255 255 / 0.5);  transition: transform 0.3s ease;">
                <div class="team-item-info">
                    <h4 style="font-size: 18px; margin: 0 0 10px;">Shweta</h4>
                    <p>Cuisine Chef</p>
                    <div class="icons" style="margin: 15px 0px 10px;">
                        <ul class="ul-list" style= "list-style-type: none;">
                            <li class="list" style="display: inline-block; margin: 0 6px; :last-child{margin-right:0}; :first-child{margin-left:0};">
                                <a href="#" style="width: 50px; height: 50px; display: inline-flex; justify-content: center; align-items: center; border-radius: 50%; background: linear-gradient(145deg, #e6e6e6, #ffffff); box-shadow: 4px 4px 8px #e6e6e6, -4px -4px 8px #ffffff; color: orange; font-size: 19px;">
                                    <i class="fa fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list" style="display: inline-block; margin: 0 6px; :last-child{margin-right:0}; :first-child{margin-left:0};">
                                <a href="#" style="width: 50px; height: 50px; display: inline-flex; justify-content: center; align-items: center; border-radius: 50%; background: linear-gradient(145deg, #e6e6e6, #ffffff); box-shadow: 4px 4px 8px #e6e6e6, -4px -4px 8px #ffffff; color: orange; font-size: 19px;">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li class="list" style="display: inline-block; margin: 0 6px; :last-child{margin-right:0}; :first-child{margin-left:0};">
                                <a href="#" style="width: 50px; height: 50px; display: inline-flex; justify-content: center; align-items: center; border-radius: 50%; background: linear-gradient(145deg, #e6e6e6, #ffffff); box-shadow: 4px 4px 8px #e6e6e6, -4px -4px 8px #ffffff; color: orange; font-size: 19px;">
                                <i class="fa fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
 
        </div> 
    </div>
</section>

























<!-- ------------service facilities------------ -->
      <!-- <br>
      <br>
      <br>
      <br>
      <br>

      <section class="service" id="service">
           <h3 class="text-center">Our Services</h3>
           <h2 class="text-center">We provide best quality food along with best services!!!</h2>
           <div class="service-content">
              <div class="inner-box">
                  <img src="images/s1.png" alt="" style="width: 100px;height: 100px;">
                  <h3>Free Delivery</h3>
                  <p>We provide delivery absolutely free.</p>
              </div>
              <div class="inner-box">
                  <img src="images/s2.png" style="width: 100px;height: 100px;">
                  <h3>Online Payment</h3>
                  <p>We accept all modes of payments including online payments as well.</p>
              </div>
              <div class="inner-box">
                  <img src="images/s3.png" style="width: 100px;height: 100px;">
                  <h3>Fresh Food</h3>
                  <p>We provide the best quality food to our customers.</p>
              </div>
            </div>
      </section> 
 -->

<!-- service facilities ends here -->







<!------------------------------ Our Special Offers and deals page ----------------------------->

<!-- <br>
<br>
<br>
<section class="big-deal" style="background: linear-gradient(rgba(35,43,56,0.9), rgba(35,43,56,0.9)), url(./images/food-table.jpg); background-size: cover; background-repeat: no-repeat; background-position: center; background-attachment: fixed">
    <div class="container">
        <br>
        <h3 class="text-center" style="color:white;">Big Deals of the Week</h3>
        <br>
        <br>

        <div class="timer" style=" display: flex; align-items:center; justify-content:center; margin-right:-2rem;">

            <div  class="css" style="margin-right:2rem; background: rgb(255, 219, 88); width: 150px; height: 150px; border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px; -ms-border-radius: 4px; -o-border-radius: 4px; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                <span class="span-css" style="font-family: Rateway-semibold; font-size: 2.5rem; color: white; margin-bottom: 0.05rem">02</span>
                <span class="span-css-style" style="font-family: Rateway-medium; color:white">Days</span>
            </div>
            <div class="css" style="margin-right:2rem; background: rgb(255, 219, 88); width: 150px; height: 150px; border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px; -ms-border-radius: 4px; -o-border-radius: 4px; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                <span class="span-css" style="font-family: Rateway-semibold; font-size: 2.5rem; color: white; margin-bottom: 0.05rem">24</span>
                <span class="span-css-style" style="font-family: Rateway-medium; color:white">Hours</span>
            </div>
            <div class="css" style="margin-right:2rem; background: rgb(255, 219, 88); width: 150px; height: 150px; border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px; -ms-border-radius: 4px; -o-border-radius: 4px; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                <span class="span-css" style="font-family: Rateway-semibold; font-size: 2.5rem; color: white; margin-bottom: 0.05rem">55</span>
                <span class="span-css-style" style="font-family: Rateway-medium; color:white">Minutes</span>
            </div>
            <div class="css" style="margin-right:2rem; background: rgb(255, 219, 88); width: 150px; height: 150px; border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px; -ms-border-radius: 4px; -o-border-radius: 4px; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                <span class="span-css" style="font-family: Rateway-semibold; font-size: 2.5rem; color: white; margin-bottom: 0.05rem">58</span>
                <span class="span-css-style" style="font-family: Rateway-medium; color:white">Seconds</span>
            </div>
        </div>
        <br>
        <br>
    </div>
</section> -->


<!-- our special offer ends here -->







<!-- book a table starts here -->

    <!-- <br>
    <br>

    <section class="online-booking ptb">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-6">
					<div class="max-w-390">
						<div class="headding-part">
							<p class="headding-sub">Fresh From CheeseBurst</p>
							<h2 class="headding-title text-uppercase font-weight-bold">BOOK ONLINE</h2>
						</div>
						<p class="online-des">Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur dapibus mauris sed leo cursus aliquetcras suscipit. Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur </p>
						<a href="#" class="online-call">+ 91 123 456 789 0</a>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 text-center">
					<h2 class="book-table text-uppercase">Book a table</h2>
					<form class="online-order-form">
						<div class="form-group">
							<input type="text" class="form-control" id="name" placeholder="Name" required="">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="email" placeholder="Email" required="">
						</div>
						<div class="form-group">
							<div class="custom-select-wrapper"><select name="sources" id="sources" class="custom-select sources form-control" data-placeholder="How many persons?" style="display: none;">
								   <option value="profile" selected="">Person 5</option>
								   <option value="word">Person 4</option>
								   <option value="hashtag">Person 3</option>
							</select><div class="custom-select sources form-control"><span class="custom-select-trigger">How many persons?</span><div class="custom-options"><span class="custom-option undefined" data-value="profile">Person 5</span><span class="custom-option undefined" data-value="word">Person 4</span><span class="custom-option undefined" data-value="hashtag">Person 3</span></div></div></div>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="date" placeholder="Date" required="">
						</div>
						<button type="submit" class="more-table-v">Book now</button>
					</form>
				</div>
			</div>
		</div>
	</section> -->



<!-- book a table ends here -->
















    <!-- <section class="chef ptb pt-120 pb-120" style="background-color: black;color: white">
    <div class="menu-top-bg"><img src="images/menu-top-bg.png" alt="meu-bg" ></div>
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12">
					<div class="headding-part pb-50 text-center">
						<p class="headding-sub">Meet our experts</p>
						<h2 class="headding-title text-uppercase font-weight-bold">Our Best Team</h2>
					</div>
				</div>
			</div>

			<div id="demo" class="carousel slide" data-ride="carousel">

                <ul class="carousel-indicators">
                  <li data-target="#demo1" data-slide-to="0" class="active"></li>
                  <li data-target="#demo1" data-slide-to="1"></li>
                  <li data-target="#demo1" data-slide-to="2"></li>
                  <li data-target="#demo1" data-slide-to="3"></li>
                  <li data-target="#demo1" data-slide-to="4"></li>
                </ul>

                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img src="https://i.pinimg.com/originals/84/d3/71/84d371a8dbd082127ced3925f51801af.png" alt="Los Angeles" class="rounded mx-auto d-block">
                        <div class="carousel-caption">
                        <h3>Gaurish</h3>
                        <p>Love Creative Art and drawings!!</p>
                        </div>  
                    </div>

                    <div class="carousel-item">
                        <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/d2943578-2865-46c9-b384-54cf5325f955/derltge-e3c20f64-2fa3-42cd-8c5e-f09acbb4e3c9.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2QyOTQzNTc4LTI4NjUtNDZjOS1iMzg0LTU0Y2Y1MzI1Zjk1NVwvZGVybHRnZS1lM2MyMGY2NC0yZmEzLTQyY2QtOGM1ZS1mMDlhY2JiNGUzYzkucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.6aqfjcjPREbubXYUVmhsmOTHY9_mgLz17uuAoD0UYw0" alt="Chicago" width="1100" height="500" class="rounded mx-auto d-block">
                        <div class="carousel-caption">
                        <h3>Nishit</h3>
                        <p>Acknowledge Me !! And Burn it Down</p>
                        </div>   
                    </div>

                    <div class="carousel-item">
                        <img src="https://i.pinimg.com/originals/cf/5d/f7/cf5df7e4e7804644a43be3f66a224b9d.jpg" alt="New York" width="1100" height="500" class="rounded mx-auto d-block">
                        <div class="carousel-caption">
                        <h3>Kashika</h3>
                        <p>UniversBeliever!</p>
                        </div>   
                    </div>

                    <div class="carousel-item">
                        <img src="http://iphonewallpaperworld.com/wp-content/uploads/2020/12/Jassi-Gill-Wallpaper-2021-1.jpg" alt="New York" width="1100" height="500" class="rounded mx-auto d-block">
                        <div class="carousel-caption">
                        <h3>Ishita</h3>
                        <p>Believe in creating a life that  I love to live in !</p>
                        </div>   
                    </div>

                    <div class="carousel-item">
                        <img src="https://www.itl.cat/pngfile/big/40-401241_similar-wallpaper-images-tom-et-jerry-disney.jpg" alt="New York" width="1100" height="500"class="rounded mx-auto d-block">
                        <div class="carousel-caption">
                        <h3>Aashrey</h3>
                        <p>I am crazy Normal is boooring For Mee!</p>
                        </div>   
                    </div>
                    
                </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
        </div>
      </div>

	<div class="menu-bottom-bg"><img src="images/menu-bottom-bg.png" alt="menu-bg"></div>
	</section>
    <section class="about-pizzon ptb">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-6">
					<div class="max-w-390">
						<div class="headding-part">
							<p class="headding-sub">Delicious Restaurant</p>
							<h2 class="headding-title text-uppercase font-weight-bold">about CheeseBurst</h2>
						</div>
						<p class="online-des">Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur dapibus mauris sed leo cursus aliquetcras suscipit. Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur dapibus mauris sed leo cursus aliquetcras suscipit. Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur </p>
						<a href="about.html" class="about-more-z com-btn">view more</a>
					</div>

				</div>
				<div class="col-xl-6 col-lg-6 col-md-6">
					<div class="about-pizzon-img">
						<img src="http://themes.templatescoder.com/pizzon/html/demo/1-0/images/about-pizzon.png" alt="about" class="pizzon-ab">
					</div>
				</div>
			</div>
		</div>
	</section> -->



    <br>
    <br>
    <br>
    <br>
    <br>


    <!-- --------------how it works------------- -->

    <!-- <div class:about-text> -->
         <div class="sec-title text-center mb-5">
             <p class="sec-sub-title mb-3" style="text-transform: uppercase; display: inline-block; background: #f3f3f5; box-shadow: 9px 9px 12px #e4e4e4, -9px -9px 12px #ffffff; padding: 3px 20px; border-radius: 60px; color: #ff8243; font-size: 25px;">How It Works</p>
        
     
      
       <section class="steps">
            <!-- <div class="about-text">
                <h2 class="text-center">How It <span>Works</span></h2>
            </div> -->
            <!-- <div class="work-container"> -->
                 <div class="box">
                     <img src="images/step-1.jpg">
                     <h3>Step 1:<br>Choose Your Favourite Food</h3>
                 </div>

                 <div class="box">
                     <img src="images/step-2.jpg">
                     <h3>Step 2:<br>Free And Fast Delivery</h3>
                 </div>

                <div class="box">
                     <img src="images/step-3.jpg">
                     <h3>Step 3:<br>Easy Payment Methods</h3>
                </div>

                <div class="box">
                     <img src="images/step-4.jpg">
                     <h3>Step 4:<br>Finally, Enjoy Your Meal</h3>
                </div>
            </div>
        </section>


<!-- how it works ends here -->








<!------------ loader -------------->

        <div class="loader">
            <img src="images/loader.gif" alt="" />
        </div>

<!-- 
        function loader(){
            document.querySelector('.loader').style.display= 'none';
        } -->

        <!-- notice 1000= 1 seconds -->
        <!-- so 2000= 2 seconds -->

        <!-- function fadeOut(){
            setInterval(loader, 2000);
        }

        window.onload= fadeOut(); -->






<script src="js/script.js"></script>
 

    
<?php include('partials-front/footer.php'); ?>




   