<?php
include 'database.php';
session_start();

if ($_SESSION['status'] == 'invalid') {
    echo "<script>window.location.href='index.php'</script>";
}

$id = $_SESSION['id'];
$queryInquiries = "SELECT * FROM inquiries WHERE account_id = '$id'";
$sqlInquiries = mysqli_query($connection, $queryInquiries);
$result = mysqli_fetch_array($sqlInquiries);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUTO LOAN EXPRESS PH</title>

    <link rel="stylesheet" href="css/myaccount.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg fixed-top px-2 rounded-5 bg-white mx-5 border-bottom border-dark">
        <div class="container-fluid">
            <a class="navbar-brand me-auto" href="index.php">
                <img src="images/left.png" alt="Bootstrap" width="100" height="60">
                <img src="images/right.png" alt="Bootstrap" width="250" height="60">
            </a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
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
            <button class="navbar-toggler border-0 pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
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
        <div class="container d-flex flex-column align-items-center">
            <?php
            if (mysqli_num_rows($sqlInquiries) > 0) {
                if ($result['status'] == 'Pending') {
                    include 'inquiry/include/pending.php';
                } else if ($result['status'] == 'On Process') {
                    include 'inquiry/include/onProcess.php';
                } else if ($result['status'] == 'Office Submitted') {
                    include 'inquiry/include/officeSubmitted.php';
                } else if ($result['status'] == 'Bank Submitted') {
                    include 'inquiry/include/bankSubmitted.php';
                } else if ($result['status'] == 'Approved') {
                    include 'inquiry/include/approved.php';
                } else if ($result['status'] == 'Rejected') {
                    include 'inquiry/include/rejected.php';
                } else if ($result['status'] == 'Released') {
                    include 'inquiry/include/released.php';
                }
            } else {    
            }
            ?>
        </div>
        <div class="container h-100 w-75 bg-white p-0 shadow-lg">
            <?php
            if (mysqli_num_rows($sqlInquiries) > 0) {
                include 'inquiry/clientInquiry.php';
            } else {
                echo "No application information available.";
            }
            ?>
        </div>
    </div>

</body>
<script src="js/bootstrap.bundle.min.js"></script>

</html>