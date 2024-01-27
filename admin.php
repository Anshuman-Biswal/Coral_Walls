<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'config.php';?>
    <?php include 'database.php';?>
    <?php include 'functions.php';?>

    <?php
//     if(isset($_SESSION['id'])){
//         header('Location: dashboard.php');
//         die();
//     }
// ?>

    <?php 
    // var_dump($_POST);
    if(isset($_POST['email'])) {
    if($stm = $connect->prepare('SELECT* FROM users WHERE email = ? AND password = ? AND active = 1')){
        $hashed = SHA1($_POST['password']);
        $stm->bind_param('ss', $_POST['email'], $hashed);
        $stm->execute();


        $result = $stm->get_result();
        $user = $result->fetch_assoc();


        if ($user){
            $_SESSION['id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['username'] = $user['username'];

            set_message("you have successfully logged in"  .$_SESSION['username']);
            header('Location: dashboard.php');
            die();
        }
        $stm->close();
    }
else{
    echo'could not prepare statement!';
}

    }

?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center mb-4">Admin Panel</h2>
                <form method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">email:</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
