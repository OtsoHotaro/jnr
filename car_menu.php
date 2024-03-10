<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUTO LOAN EXPRESS</title>

    <link rel="stylesheet" href="css/car_menus.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>

<body class="container-fluid d-flex p-0">

    <?php
    // Sineset sa dafault yung logo saka logoname
    $brandLogo = "images/carbrand-logo/ford.png";

    // Chinecheck kung pinindot ba yung mga logo brand
    if (isset($_GET['brand'])) {
        $selectedBrand = $_GET['brand'];
        switch ($selectedBrand) {
            case 'honda':
                $brandLogo = "images/carbrand-logo/honda.png";
                break;
            case 'mitsubishi':
                $brandLogo = "images/carbrand-logo/mitsubishi.jpg";
                break;
            case 'geely':
                $brandLogo = "images/carbrand-logo/geely.png";
                break;
            case 'toyota':
                $brandLogo = "images/carbrand-logo/toyota.png";
                break;
            case 'nissan':
                $brandLogo = "images/carbrand-logo/nissan.jpg";
                break;
            default:
                $brandLogo = "images/carbrand-logo/ford.png";
        }
    }
    ?>
    <div class="sidebar p-3 d-flex align-items-center">
        <div class="container rounded-5 shadow-lg py-2">
            <div
                class="selected-brand border-bottom border-dark d-flex align-items-center justify-content-center rounded-4 p-2 my-4">
                <div class="container p-0"><img src="<?php echo $brandLogo; ?>" class="img-fluid" alt="Bootstrap"></div>
            </div>

            <div class="all-brands d-flex flex-column">
                <div class="allbrand-container d-flex flex-column gap-5 justify-content-center align-items-center py-2">
                    <a href="?brand=ford">
                        <div class="brand-card">
                            <img src="images/carbrand-logo/ford.png" class="img-fluid h-100" alt="...">
                        </div>
                    </a>
                    <a href="?brand=honda">
                        <div class="brand-card">
                            <img src="images/carbrand-logo/honda.png" class="img-fluid h-100" alt="...">
                        </div>
                    </a>
                    <a href="?brand=mitsubishi">
                        <div class="brand-card">
                            <img src="images/carbrand-logo/mitsubishi.jpg" class="img-fluid h-100" alt="...">
                        </div>
                    </a>
                    <a href="?brand=geely">
                        <div class="brand-card">
                            <img src="images/carbrand-logo/geely.png" class="img-fluid h-100" alt="...">
                        </div>
                    </a>
                    <a href="?brand=toyota">
                        <div class="brand-card">
                            <img src="images/carbrand-logo/toyota.png" class="img-fluid h-100" alt="...">
                        </div>
                    </a>
                    <a href="?brand=nissan">
                        <div class="brand-card">
                            <img src="images/carbrand-logo/nissan.jpg" class="img-fluid h-100" alt="...">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="left-main h-100">
        <div class="container d-flex justify-content-center">
            <div class="nav-container d-flex align-items-center p-4 shadow rounded-5 mt-2">
                <a class="navbar-brand" href="index.php">
                    <img src="images/left.png" alt="Bootstrap" width="100" height="60">
                    <img src="images/right.png" alt="Bootstrap" width="250" height="60">
                </a>
                <div class="container p-0 d-flex align-items-center">
                    <ul class="d-flex gap-2 ms-auto pt-3">
                        <li class="nav-item mx-lg-1 d-flex align-items-center">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item mx-lg-1 d-flex align-items-center">
                            <a class="nav-link text-black" href="car_menu.php">Car Menu</a>
                        </li>
                        <li class="nav-item mx-lg-1 d-flex align-items-center">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li>
                            <?php

                            include('database.php');
                            session_start();

                            if ($_SESSION['status'] == 'valid') {
                                include('btns/userbtn.php');
                            } else {
                                include('btns/loginbtn.php');
                            }
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

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

        <div class="container p-0">
            <div class="main-content overflow-auto p-3">
                <?php
                if (isset($_GET['brand'])) {
                    $selectedBrand = $_GET['brand'];
                    switch ($selectedBrand) {
                        case 'honda':
                            include 'car_menu/honda.php';
                            break;
                        case 'mitsubishi':
                            include 'car_menu/mitsubishi.php';
                            break;
                        case 'geely':
                            include 'car_menu/geely.php';
                            break;
                        case 'toyota':
                            include 'car_menu/toyota.php';
                            break;
                        case 'nissan':
                            include 'car_menu/nissan.php';
                            break;
                        default:
                            // eto yung default na lalabas
                            include 'car_menu/ford.php';
                    }
                } else {
                    // eto yung lalabas pag di nabasa yung link
                    include 'car_menu/ford.php';
                }
                ?>
            </div>
        </div>
    </div>

</body>

<script src="js/bootstrap.bundle.min.js"></script>

</html>