<?php 
    include 'config.php';
     include 'database.php';
     include 'functions.php';
     ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Coral_Walls</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <style>
    @media (max-width: 767px){
.navbar-nav .navbar-right {
    float: none !important;
    margin: 0;
    display: flex;
    flex-direction: row;
    justify-content: center;
}
.nav>li {
    padding-bottom: 10px;
}
.navbar-nav {
    margin: 0;
    float: none;
    display: flex;
    margin-left: 0 !important;
    flex-direction: column;
    align-items: center;
}
}
    </style>
</head>
<body>



    <!-- Navigation Bar -->
    <nav class="navbar navbar-inverse navbar-fixed-top"  style="background-color:#ffe5e5" >
        <div class="container-fluid">

            <!-- Logo and Hamburger Menu -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a style="margin-left: 178px;" class="navbar-brand brand" href="index.php"><img src="logo.png" alt="Logo" height="100"></a>
            </div>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="myNavbar"  style="background-color:#ffe5e5" >
                <ul style="margin-top: 39px; margin-left: 20px;
                margin-right: 0px; " class="nav navbar-nav nav1">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT US</a></li>
                    <li><a href="project.php">PROJECTS</a></li>
                    <li><a href="contact.php">CONTACT US</a></li>
                    <li><a href="#">BLOG</a></li>
                </ul>

                <!-- Social Media Icons -->
                <ul class="nav navbar-nav navbar-right social-icons">
                    <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>







       <!-- Image Gallery -->

    <div class="container gallery-container">
        
        <div class="tz-gallery">
    
            <div class="row">
    
                <div class="col-sm-12 col-md-4">
                    <a class="lightbox" href="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/bridge.jpg">
                        <img src="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/bridge.jpg" alt="Bridge">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/park.jpg">
                        <img src="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/park.jpg" alt="Park">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/tunnel.jpg">
                        <img src="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/tunnel.jpg" alt="Tunnel">
                    </a>
                </div>
                <div class="col-sm-12 col-md-8">
                    <a class="lightbox" href="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/traffic.jpg">
                        <img src="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/traffic.jpg" alt="Traffic">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/rails.jpg">
                        <img src="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/rails.jpg" alt="Coast">
                    </a>
                </div> 
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/coast.jpg">
                        <img src="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/coast.jpg" alt="Rails">
                    </a>
                </div>
    
            </div>
    
        </div>
    
    </div>


<div class="footer">
    <div class="container" style="display: flex;
      justify-content: center;" >
      <p class="copyright" style="margin: 9px !important;" >&copy; 2024 Coral_Walls. All rights reserved.</p>
    </div>
  </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.tz-gallery');
    </script>
    
   
    <!-- Include Bootstrap and jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
