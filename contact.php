<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Add your custom styles here */
        #contact-form {
            margin-top: 20px;
        }
        @media (min-width: 1200px){
    .container {
    padding-right: 85px !important;
    padding-left: 85px !important;
    }
        }
        @media(min-width:768px){
        body {
    padding-top: 100px !important;
}
}
 @media (max-width: 767px){
.navbar-nav.navbar-right {
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
.btn-primary{
        margin: 0 0 10px !important;
        }
        #google-map {
            height: 360px;
            width: 100%;
        }
        .con{
            display: flex;
            flex-direction: row;
            align-items: center;
        }
        .con h4{
            padding-left: 20px;
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
                <a style="margin-left: 178px;" class="navbar-brand" href="index.php"><img src="logo.png" alt="Logo" height="100"></a>
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



<div style="margin-top:70px" class="container">
    <div class="row">
        <!-- Contact Form -->
        <div style="background-color: #e4d6d9;" class="col-md-6">
            <h2>Contact Us</h2>
            <form id="contact-form" action="#" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" class="form-control" id="subject" name="subject" required>
                </div>
                <div class="form-group">
                    <label for="message">Your Message:</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="file">Upload Document:</label>
                    <input type="file" id="file" name="file">
                    <p class="help-block">Optional: You can upload a document.</p>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <!-- Google Map -->
        <div class="col-md-6">
            <h2>CORAL WALLS</h2>
        <div class="con">
            <i class="fa fa-map-marker"></i>
            <h4>Bharat Villa, Hanspal, Puri Canal Road, Bhubaneswar, 752101</h4></div>
        <div class="con">
            <i class="fa fa-phone"></i>
            <h4>+91-9778750100</h4></div>
        <div class="con">
            <i class="fa fa-envelope"></i>
            <h4>wallscoral@gmail.com</h4></div>
            <div id="google-map"></div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Google Maps API (replace YOUR_API_KEY with your actual API key) -->
<script>(g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})
        ({key: "AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg", v: "weekly"});</script>
<script>
    let map;

async function initMap() {
  const { Map } = await google.maps.importLibrary("maps");

  map = new Map(document.getElementById("map"), {
    center: { lat: -34.397, lng: 150.644 },
    zoom: 8,
  });
}

initMap();

</script>


<div class="footer">
    <div class="container" style="display: flex;
      justify-content: center;" >
      <p class="copyright" style="margin: 9px !important;" >&copy; 2024 Coral_Walls. All rights reserved.</p>
    </div>
  </div>

</body>
</html>
