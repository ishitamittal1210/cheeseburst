<!DOCTYPE html>
<html lang="en">
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

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About US</title>
    <style>
        <?php include 'style.css'; ?>
    </style>
</head>
<body>
    <?php require 'navbar.php' ?>
    

    <div class='container-fluid p-5'
    style='
        background-image: url("https://media.istockphoto.com/photos/chaotic-black-low-poly-surface-abstract-3d-render-picture-id944880340?b=1&k=20&m=944880340&s=170667a&w=0&h=TEeHm7H-f1GBjv9c0Ai6iAx3mHqAPLX_UNtz0-tOUms=")
        '
    >
        <div class='row text-light'>

            <div class='form-group col-md-7'>

                <div class='row'>
                    <div class='col-md-12'>
                        <h1>About Us</h1>
                    </div>
                </div>

                <hr>

                <div class='row'>
                    <div class='col-md-12'>
                        <p style='font-size: x-large;'>
                            Lorem Ipsum is simply dummy text of the printing and 
                            typesetting industry. Lorem Ipsum has been the industry's 
                            standard dummy text ever since the 1500s, when an unknown 
                            printer took a galley of type and scrambled it to make a 
                            type specimen book. It has survived not only five centuries, 
                            but also the leap into electronic typesetting, remaining 
                            essentially unchanged. It was popularised in the 1960s with 
                            the release of Letraset sheets containing Lorem Ipsum 
                            passages, and more recently with desktop publishing software 
                            like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div>
                </div>

            </div>
            
            <div class='form-group col-md-5 p-5 text-center'>
                <img src="https://post.medicalnewstoday.com/wp-content/uploads/sites/3/2020/02/317122_1100-1100x628.jpg" 
                alt="dishes" 
                width= '100%'
                style='
                border-radius: 5px;
                '
                >
            </div>
            
        </div>

    </div>
    <?php require 'footer.php' ?>
</body>
</html>