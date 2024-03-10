<?php
include('database.php');
include('session.php');

$showAlert = false;

if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $password = $_POST['userpass'];
    $email = $_POST['email'];
    $confirmPassword = $_POST["confirmpass"];
    $status = "Not Verified";

    if ($password != $confirmPassword) {
        $showAlert = true;
    } else {
        $querySignup = "INSERT INTO `client_account`(`account_id`, `username`, `userpass`, `email`, `status`) VALUES ('NULL','$username','$password', '$email', '$status')";
        $sqlSignup = mysqli_query($connection, $querySignup);
        echo '<script>window.location.href="signup.php"</script>';
    }


}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Loan Express</title>

    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>

<body>
    <div class="form-container d-flex flex-column justify-content-center bg-light">
        <div class="container h-75 w-50 d-flex p-0 rounded-4 bg-danger shadow-lg">
            <div class="container h-100 w-50 px-5 bg-white">
                <div class="container h-25 p-0 d-flex align-items-center">
                    <?php if ($showAlert) { ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            Your password does not match
                        </div>
                    <?php }?> 
                </div>
                <h5 class="text-center"><b>Create your Account</b></h5>
                <form action="/jnr/signup.php" method="post">
                    <input type="text" class="form-control my-3" name="username" placeholder="Username" required>
                    <input type="email" class="form-control my-3" name="email" placeholder="Email" required>
                    <input type="password" class="form-control mb-3" name="userpass" placeholder="Password" required>
                    <input type="password" class="form-control mb-3" name="confirmpass" placeholder="Confirm Password"
                        required>
                    <div class="container p-0 d-flex justify-content-between pe-3">
                        <input type="submit" name="signup" value="Signup" class="login-btn border-0">
                        <a href="login.php" class="signup-link d-flex align-items-center">Login</a>
                    </div>
                </form>
            </div>
            <div class="container h-100 w-50">

            </div>
        </div>
    </div>

</body>
<script src="js/bootstrap.bundle.min.js"></script>

</html>