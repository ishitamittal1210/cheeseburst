<?php 

    include('../config/constants.php'); 
    include('login-check.php');

?>


<html>
    <head>
        <title>CheeseBurst - Home Page</title>
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
        <link rel="stylesheet" href="../css/admin.css">
    </head>
    
    <body>
        <!-- Menu Section Starts -->
        <div class="menu text-center">
            <div class="wrapper">
                <ul>
                    <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                    <li><a href="manage-admin.php"><i class="fa fa-user"></i>Admin</a></li>
                    <li><a href="manage-category.php"><i class="fa fa-list-alt"></i>Category</a></li>
                    <li><a href="manage-food.php"><i class="fa fa-cutlery"></i>Food</a></li>
                    <li><a href="manage-order.php"><i class="fa fa-shopping-cart"></i>Order</a></li>
                    <li><a href="logout.php"><i class="fa fa-power-off"></i>Logout</a></li>
                </ul>
            </div>
        </div>
        <!-- Menu Section Ends -->