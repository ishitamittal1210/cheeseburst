<?php
    include('../config/constants.php'); 
    include('partials/login-check.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href='https://fonts.googleapis.com/css?family=Ewert' rel='stylesheet'> -->
    <title>Dashboard</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style-type: none;
            text-decoration: none;
         }

        h1,h2,h3,h4,h5,h6{
            font-family: 'Raleway', sans-serif;
        }

        p,a{
            font-family: 'Roboto', sans-serif;
        }

        .img-responsive{
            display: block;
            max-width: 100%;
            height: auto;
        }

        .container{
            max-width: 1330px;
            margin: 0 auto;
            padding-left: 15px;
            padding-right: 15px;
        }

        .clear{
            clear: both;
        }

        .active{
            width: 40% !important;
            z-index: 20 !important;
        }

        .menu-hide{
            display: inline-block !important;
        }

         /* Sidebar css */
         section#sidebar{
             width: 20%;
             /*background-color: red;*/
             background-image: 
             linear-gradient(rgba(155, 60, 183, 0.9),rgba(255, 57, 111, 0.9)),
             url("img/a89546df3b5085b7bde157f37b5c02a4.jpg");
             position: fixed;
             top: 0;
             left; 0;
             color: #fff;
             height: 100%;
             transition: all 1s ease;
             z-index: 99;
         }

         .sidebar-brand{
             padding: 50px 40px;
         }

         .sidebar-menu ul li a{
             display: block;
             color: #fff;
             padding: 18px 40px;
         }

         .sidebar-menu{
             margin-top: 50px;
         }

        .sidebar-menu li{
            transition: all 0.5s ease;
        }

        .sidebar-menu li:hover{
            background-color: rgba(0,0,0,0.5);
        } 

        .sidebar-menu ul li span{
            padding-left: 10px;
        }

         /* Main css */
         section#main{
             width:80%;
             float:right;
             /*background-color: blue;*/
         }

         .main-header{
             position: fixed;
             background-color: #fff;
             box-shadow: 10px 10px 20px #bbb;
             width: 100%;
         }

         .header-left{
             float: left;
             width: 31%;
             padding: 20px;
         }
         /* .header-right{
             float: left;
             width: 35%;
             padding: 20px;
         } */

        .header-left img{
            width: 15vh;
            float: left;
            padding-right: 10px;
        } 

        .header-left h3{
            color: #bbb;
        }

        .card-box{
            float: left;
            width: 21%;
            margin-top: 120px;
            background: linear-gradient(45deg, #FF5252 0%, #f48fb1 100%);
            margin-left: 2%;
            margin-right: 2%;
            padding: 25px;
            color: #fff;
        }

        .cus-h,.cus-f,.cus-t,.cus-r{
            position: relative;
        }

        .cus-h:after{
            content: "\f022";
            font-family: "FONTAWESOME";
            position: absolute;
            right: 0;
        }

        .cus-f:after{
            content: "\f0f5";
            font-family: "FONTAWESOME";
            position: absolute;
            right: 0;
        }

        .cus-t:after{
            content: "\f07a";
            font-family: "FONTAWESOME";
            position: absolute;
            right: 0;
        }

        .cus-r:after{
            content: "\f0d6";
            font-family: "FONTAWESOME";
            position: absolute;
            right: 0;
        }

        @media screen and (max-width : 770px){
            .card-box{
                float: none;
                width: 100%;
                margin: 0px auto 20px auto;
                padding: 10px 20px;
            }
            .main-content-info{
                margin-top: 130px
            }

            .cus-num:after{
            top: 10px;
            }

            .message{
                display: none;
            }

            .header-left{
                float: left;
                width: 50%;
            }

            .header-left h2{
                font-size: 20px;
            }

            section#sidebar{
                width: 16%;
            }

            section#main{
                width: 84%;
            }

            .sidebar-menu ul li a{
                padding: 10px 22px;
            }

            .sidebar-menu ul li span{
                display: none;
            }

            .sidebar-brand span{
                display: none;
            }

            .sidebar-brand{
                padding: 20px 0 20px 20px;
            }
        }

    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".toggle-btn").click(function(){
                $("#sidebar").toggleClass('active');
                $(".sidebar-menu li span").toggleClass("menu-hide");
            });
        });
    </script>
</head>
<body>
    <section id="sidebar">
        <img src="">
        <div class="sidebar-brand">
            <h2><i class="fa fa-desktop" style="color: orange;"></i> <span style="color: yellow;">Cheese</span><span style="color: red;">Burst</span></h2>
            <div class="sidebar-menu">
                <ul>
                    <li><a href="index.php"><i class="fa fa-home"></i> <span>Home</span></a></li>
                    <li><a href="manage-admin.php"><i class="fa fa-user"></i> <span>Admin</span></a></li>
                    <li><a href="manage-category.php"><i class="fa fa-list-alt"></i> <span>Category</span></a></li>
                    <li><a href="manage-food.php"><i class="fa fa-cutlery"></i> <span>Food</span></a></li>
                    <li><a href="manage-order.php"><i class="fa fa-shopping-cart"></i> <span>Order</span></a></li>
                    <li><a href="logout.php"><i class="fa fa-power-off"></i> <span>Logout</span></a></li>
                </ul>
            </div>
        </div>
    </section>

    <section id="main">
        <header class="main-header">
            <div class="header-left">
                <h2 class="toggle-btn"><i class="fa fa-bars"></i>Dashboard</h2>
            </div> 
            <div class="header-left message">
                <h2 style="color: green;">
                    <?php 
                        if(isset($_SESSION['login']))
                        {
                            echo $_SESSION['login'];
                            unset($_SESSION['login']);
                        }
                    ?>
                </h2> 
            </div> 
            <div class="header-left">
                <img src="img/741067-hd-profile-wallpaper-top-free-hd-profile-background.jpg" class="img-responsive" alt="img">
                
                <h3><?php echo $_SESSION["user"] ?></h3>
            </div> 
            <div class="clear"></div>       
        </header>
        <div class="clear"></div>

        <div class="main-content-info container">
            <div class="card-box">
                <?php 
                    //Sql Query 
                    $sql = "SELECT * FROM `tbl_category`";
                    //Execute Query
                    $res = mysqli_query($conn, $sql);
                    //Count Rows
                    $count = mysqli_num_rows($res);
                ?>
                <h2 class="cus-num cus-h"><?php echo $count; ?></h2>
                <p>Categories</p>
            </div>
            <div class="card-box">
                <?php 
                    //Sql Query 
                    $sql2 = "SELECT * FROM `tbl_food`";
                    //Execute Query
                    $res2 = mysqli_query($conn, $sql2);
                    //Count Rows
                    $count2 = mysqli_num_rows($res2);
                ?>
                <h2 class="cus-num cus-f"><?php echo $count2; ?></h2>
                <p>Foods</p>
            </div>
            <div class="card-box">
                <?php 
                    //Sql Query 
                    $sql3 = "SELECT * FROM tbl_order";
                    //Execute Query
                    $res3 = mysqli_query($conn, $sql3);
                    //Count Rows
                    $count3 = mysqli_num_rows($res3);
                ?>
                <h2 class="cus-num cus-t"><?php echo $count3; ?></h2>
                <p>Total Orders</p>
            </div>
            <div class="card-box">
                <?php 
                    //Creat SQL Query to Get Total Revenue Generated
                    //Aggregate Function in SQL
                    $sql4 = "SELECT SUM(total) AS Total FROM tbl_order WHERE status='Delivered'";

                    //Execute the Query
                    $res4 = mysqli_query($conn, $sql4);

                    //Get the VAlue
                    $row4 = mysqli_fetch_assoc($res4);
                        
                    //GEt the Total REvenue
                    $total_revenue = $row4['Total'];

                ?>
                <h2 class="cus-num cus-r">$<?php echo $total_revenue; ?></h2>
                <p>Revenue Generated</p>
            </div>
        </div>
    </section>
</body>
</html>