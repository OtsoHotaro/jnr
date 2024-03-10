<?php
include 'database.php';
include 'adminsession.php';

$showAlert = false;

if (isset($_POST['login'])) {
    $username = addslashes(trim($_POST['adminname']));
    $password = addslashes(trim($_POST['adminpass']));

    if (empty($username) || empty($password)) {
        echo "<script>window.location.href='adminlogin.php'</script>";
    } else {
        $queryValidate = "SELECT * FROM admin_account WHERE adminname = '" . $username . "' AND adminpass = '" . $password . "'";
        $sqlValidate = mysqli_query($connection, $queryValidate);
        $rowValidate = mysqli_fetch_array($sqlValidate);

        if (mysqli_num_rows($sqlValidate) > 0) {
            $_SESSION['userlvl'] = 'admin';
            $_SESSION['status'] = 'adminLogIn';
            $_SESSION['adminname'] = $rowValidate['adminname'];
            $_SESSION['id'] = $rowValidate['admin_id'];
            echo "<script>window.location.href='admin.php'</script>";
        } else {
            $_SESSION['status'] = 'adminLogOut';
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
                <form action="/jnr/adminlogin.php" method="post">
                    <input type="text" class="form-control my-3" name="adminname" placeholder="Username" required>
                    <input type="password" class="form-control mb-3" name="adminpass" placeholder="Password" required>
                    <input type="submit" name="login" value="Login" class="login-btn border-0">
                </form>
            </div>
        </div>
    </div>


</body>
<script src="js/bootstrap.bundle.min.js"></script>

</html>