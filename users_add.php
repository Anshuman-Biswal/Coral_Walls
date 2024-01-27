<?php include 'config.php';?>
    <?php include 'database.php';?>
    <?php include 'functions.php';?>
<?php 
secure();
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
    <title>Responsive Image Gallery</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="style.css">
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
                <a style="margin-left: 200px;" class="navbar-brand" href="index.php"><img src="logo.png" alt="Logo" height="100"></a>
            </div>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="myNavbar"  style="background-color:#ffe5e5" >
                <ul style="margin-top: 39px; margin-left: 20px;
                margin-right: 0px; " class="nav navbar-nav nav1">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT US</a></li>
                    <li><a href="project.php">PROJECTS</a></li>
                    <li><a href="contact.php">CONTACT US</a></li>
                    <li><a href="logout.php">Logout</a></li>
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


<?php 
if(isset($_POST['username'])){
    
    if($stm = $connect->prepare('INSERT INTO users(username,email, password,active) VALUES (?,?,?,?)')){
        $hashed = SHA1($_POST['password']);
        $stm->bind_param('ssss', $_POST['username'], $_POST['email'], $hashed, $_POST['active']);
        $stm->execute();

        set_message("A new User"  .$_SESSION['username'] . "has been added");
        header('Location: users.php');

        $stm->close();
        die();
        
    }
else{
    echo'could not prepare statement!';
}
}
?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
        <h1 class="display-1">Add user</h1>

        <form method="post">
        <div class="mb-3">
                        <label for="username" class="form-label">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">email:</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <select name="active" class="form-select" id="active">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add User</button>
                </form>

        <a href="users.php">Add new user</a>
        </div>
    </div>
</div>




    
    <!-- Include Bootstrap and jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>