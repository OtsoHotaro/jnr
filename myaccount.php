<?php
include 'database.php';
include 'queries.php';
session_start();

if ($_SESSION['status'] == 'invalid') {
    echo "<script>window.location.href='index.php'</script>";
}

$id = $_SESSION['id'];

$queryClientAccount = "SELECT * FROM client_account WHERE account_id = '$id'";
$sqlClientAccount = mysqli_query($connection, $queryClientAccount);
$result = mysqli_fetch_array($sqlClientAccount);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Loan Express</title>

    <link rel="stylesheet" href="css/myaccount.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg fixed-top px-2 rounded-5 bg-white mx-5 border-bottom border-dark">
        <div class="container-fluid">
            <a class="navbar-brand me-auto" href="#">
                <img src="images/left.png" alt="Bootstrap" width="100" height="60">
                <img src="images/right.png" alt="Bootstrap" width="250" height="60">
            </a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item mx-lg-1">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item mx-lg-1">
                            <a class="nav-link" href="car_menu.php">Car Menu</a>
                        </li>
                        <li class="nav-item mx-lg-1">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                    </ul>
                </div>
            </div>
            <?php
            include('btns/userbtn.php');
            ?>
            <button class="navbar-toggler border-0 pe-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    Are you sure you want to log out?
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">No</button>
                    <a href="logout.php" class="btn btn-danger">Yes</a>
                </div>
            </div>
        </div>
    </div>

    <div class="persinfo-section">
        <div class="container">
            <h3 class="text-danger"><b>My Account</b></h3>
        </div>
        <div class="container h-75 bg-white mb-2 p-5 shadow-lg">
            <h2 class="mb-3"><b>Personal Information</b></h2>
            <form action="queries.php" method="post">
                <div class="container d-flex flex-column">
                    <div class="row my-4">

                        <label for="name" class="col-1 col-form-label"><b>Username</b></label>
                        <div class="col-5">
                            <input type="text" class="form-control text-start" value="<?php echo $result['username'] ?>"
                                name="updateUsername">
                            <input type="hidden" class="form-control text-start" value="<?php echo $id ?>" name="id">
                        </div>
                        <label for="name" class="col-1 col-form-label"><b>Email</b></label>
                        <div class="col-5">
                            <input type="text" class="form-control text-start" value="<?php echo $result['email'] ?>"
                                name="updateEmail">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="bday" class="col-1 col-form-label"><b>Name</b></label>
                        <div class="col-5">
                            <input type="text" class="form-control text-start" value="<?php echo $result['name'] ?>"
                                name="updateName">
                        </div>
                        <label for="bday" class="col-1 col-form-label"><b>Surname</b></label>
                        <div class="col-5">
                            <input type="text" class="form-control text-start" value="<?php echo $result['surname'] ?>"
                                name="updateSurname">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="age" class="col-1 col-form-label"><b>Birthday</b></label>
                        <div class="col-5">
                            <input type="date" class="form-control text-start" value="<?php echo $result['birthday'] ?>"
                                name="updateBirthday">
                        </div>
                        <label for="age" class="col-1 col-form-label"><b>Age</b></label>
                        <div class="col-5">
                            <input type="number" class="form-control text-start" value="<?php echo $result['age'] ?>"
                                name="updateAge">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="address" class="col-1 col-form-label"><b>Address</b></label>
                        <div class="col-5">
                            <input type="text" class="form-control text-start" value="<?php echo $result['address'] ?>"
                                name="updateAddress">
                        </div>
                        <label for="address" class="col-1 col-form-label"><b>Contact</b></label>
                        <div class="col-5">
                            <input type="text" class="form-control text-start" value="<?php echo $result['contact'] ?>"
                                name="updateContact">
                        </div>
                    </div>
                    <input type="submit" name="update" value="Update" class="login-btn border-0 ms-auto">
                </div>
            </form>
        </div>
    </div>
</body>
<script src="js/bootstrap.bundle.min.js"></script>

</html>