<?php
include('database.php');
include('session.php');

$showAlert = false;

if (isset($_POST['login'])) {
    $username = addslashes(trim($_POST['username']));
    $password = addslashes(trim($_POST['userpass']));

    if (empty($username) || empty($password)) {
        echo "<script>window.location.href='login.php'</script>";
    } else {
        $queryValidate = "SELECT * FROM client_account WHERE username = '".$username."' AND userpass = '".$password."'";
        $sqlValidate = mysqli_query($connection, $queryValidate);
        $rowValidate = mysqli_fetch_array($sqlValidate);

        if (mysqli_num_rows($sqlValidate) > 0) {
            $_SESSION['status'] = 'valid';
            $_SESSION['username'] = $rowValidate['username'];
            $_SESSION['id'] = $rowValidate['account_id'];
            $_SESSION['name'] = $rowValidate['name'];
            echo "<script>window.location.href='index.php'</script>";
        } else {
            $_SESSION['status'] = 'invalid';
            $showAlert = true;
        }
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
    <div class="form-container d-flex flex-column justify-content-center align-items-center bg-light">
        <div class="container h-75 w-50 d-flex p-0 rounded-4 bg-danger shadow-lg">
            <div class="container h-100 w-50">

            </div>
            <div class="container h-100 w-50 px-5 bg-white">
                <div class="container h-25 my-4 p-0 d-flex align-items-center">
                    <?php if ($showAlert) { ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            Please Insert the correct username & password
                        </div>
                    <?php } ?>
                </div>
                <h5 class="text-center"><b>AUTO LOAN EXPRESS</b></h5>
                <form action="/jnr/login.php" method="post">
                    <input type="text" class="form-control my-3" name="username" placeholder="Username" required>
                    <input type="password" class="form-control mb-3" name="userpass" placeholder="Password" required>
                    <div class="container p-0 d-flex justify-content-between ps-3">
                        <a href="signup.php" class="signup-link d-flex align-items-center">Sign Up</a>
                        <input type="submit" name="login" value="Login" class="login-btn border-0">
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>
<script src="js/bootstrap.bundle.min.js"></script>

</html>