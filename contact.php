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
    <title>CheeseBurst</title>

    <style>
        <?php include 'style.css'; ?>
    </style>
    
</head>
<body>
    <?php require 'navbar.php' ?>
    <div>
        <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y2FmZXxlbnwwfHwwfHw%3D&w=1000&q=80" alt="cafe" style="width: 100%;height: 500px;">
    </div>
    <div style="background-color: black;">

        <div class="menu-top-bg">
            <img src="../images/menu-top-bg.png" alt="meu-bg" style="width:100%;height: 50px;">
        </div>

         <h1 style="font-size: 150px;margin-top: 20px;position: relative;color: #3b3b3b;text-align: center;">CONTACT</h1>
         <h2 style="position: relative;margin-top: -124px;font-size: 50px; color: rgb(238, 191, 2);text-align: center;">GET IN TOUCH</h2>

         <br>
         <br>


        <div class="menu-bottom-bg">
            <img src="../images/menu-bottom-bg.png" alt="menu-bg" style="width:100%;height: 50px;">
        </div> 

       <div class='container'>
           <div class='row text-light'>

                <div class='form-group col-md-4'>

                    <div class='row'>
                        <div class='col-md-12'>
                            <h1>DON'T BE SHY</h1>
                            <p class='touch-text'>Feel free to get in touch with me. I am always open to discussing new projects, creative ideas or opportunities to be part of your visions.</p>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='col-md-12'>
                            <h1><i class="fa fa-envelope touch-envelope" aria-hidden="true"></i></h1>
                            <p class='touch-text'>Mail me info@mail.com</p>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='col-md-12'>
                            <h1><i class="fa fa-phone" aria-hidden="true"></i></h1>
                            <p class='touch-text'>Call me +1 333 454 55 44</p>
                        </div>
                    </div>
                    
                </div>
                

                <div class='form-group col-md-8'>

                    <div class='row p-3'>
                        <div class='col-md-12'>
                            <input type='text' 
                            class=' touch-input'
                            placeholder='Enter your Name'
                            >
                        </div>
                    </div>

                    <div class='row p-3'>
                        <div class='col-md-12'>
                        <input type='text' 
                            class=' touch-input'
                            placeholder='Enter a valid email address'
                            >
                        </div>
                    </div>

                    <div class='row p-3'>
                        <div class='col-md-12'>
                            <textarea
                            class='touch-input'
                            rows='6'
                            placeholder='Enter your message'
                            ></textarea>

                            <br>
                            <br>

                            <label class='touch-accept'>
                                <input type='checkbox' >&nbsp;&nbsp;I accept the <a href='#'>Terms of Service</a>
                            </label>

                            <br>
                            <br>

                            <button class='contact-btn'>Submit</button>
                        </div>
                    </div>                    

                </div>

           </div>
       </div>
        
    </div> 
    <?php require 'footer.php' ?>
</body>
</html>