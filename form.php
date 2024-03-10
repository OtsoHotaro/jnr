<?php
include('database.php');
include('queries.php');
session_start();

if (isset($_SESSION['status'])) {
    if ($_SESSION['status'] == 'valid') {
        $id = $_SESSION['id'];
        $queryCounterInquiries = "SELECT * FROM inquiries WHERE account_id = '$id'";
        $sqlCounterInquiries = mysqli_query($connection, $queryCounterInquiries);
        $result = mysqli_fetch_array($sqlCounterInquiries);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUTO LOAN EXPRESS</title>

    <link rel="stylesheet" href="css/forms.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>

<body>
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
                            <a class="nav-link active" href="car_menu.php">Car Menu</a>
                        </li>
                        <li class="nav-item mx-lg-1">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                    </ul>
                </div>
            </div>
            <?php
            // Check if $_SESSION['status'] is set before accessing it
            if (isset($_SESSION['status'])) {
                if ($_SESSION['status'] == 'valid') {
                    include('btns/userbtn.php');
                } else {
                    include('btns/loginbtn.php');
                }
            } else {
                // If $_SESSION['status'] is not set, set it to 'invalid'
                $_SESSION['status'] = 'invalid';
                include('btns/loginbtn.php');
            }
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

    <div class="main">
        <?php
        if (isset($_GET['form'])) {
            $selectedForm = $_GET['form'];
            switch ($selectedForm) {
                case 'Mustang':
                    include 'forms/formMustang.php';
                    break;
                case 'Explorer':
                    include 'forms/formExplorer.php';
                    break;
                case 'Territory':
                    include 'forms/formTerritory.php';
                    break;
                case 'Ranger':
                    include 'forms/formRanger.php';
                    break;
                case 'City':
                    include 'forms/formCity.php';
                    break;
                case 'Civic':
                    include 'forms/formCivic.php';
                    break;
                case 'Strada':
                    include 'forms/formStrada.php';
                    break;
                case 'Xpander':
                    include 'forms/formXpander.php';
                    break;
                case 'Montero':
                    include 'forms/formMontero.php';
                    break;
                case 'Azkarra':
                    include 'forms/formAzkarra.php';
                    break;
                case 'Gx3':
                    include 'forms/formGx3.php';
                    break;
                case 'Coolray':
                    include 'forms/formCoolray.php';
                    break;
                case 'Emgrand':
                    include 'forms/formEmgrand.php';
                    break;
                case 'Okavango':
                    include 'forms/formOkavango.php';
                    break;
                case 'Navara':
                    include 'forms/formNavara.php';
                    break;
                case 'Livina':
                    include 'forms/formLivina.php';
                    break;
                case 'Raize':
                    include 'forms/formRaize.php';
                    break;
                case 'Rush':
                    include 'forms/formRush.php';
                    break;
                case 'Avanza':
                    include 'forms/formAvanza.php';
                    break;
                case 'Innova':
                    include 'forms/formInnova.php';
                    break;
                case 'Fortuner':
                    include 'forms/formFortuner.php';
                    break;
                case 'Prado':
                    include 'forms/formPrado.php';
                    break;
                case '300':
                    include 'forms/form300.php';
                    break;
                case 'Hiace':
                    include 'forms/formHiace.php';
                    break;
                case 'Hilux':
                    include 'forms/formHilux.php';
                    break;
                case 'Zenix':
                    include 'forms/formZenix.php';
                    break;
                case 'Veloz':
                    include 'forms/formVeloz.php';
                    break;

                default:
                    // eto yung default na lalabas
                    include 'forms/formEverest.php';
            }
        } else {
            // eto yung lalabas pag di nabasa yung link
            include 'forms/formEverest.php';
        }
        ?>
    </div>

</body>
<script src="js/bootstrap.bundle.min.js"></script>
<script>
    function updateUnitName() {
        var selectElement = document.getElementById('unitPrice');
        var unitNameElement = document.getElementById('unitName');
        var priceElement = document.getElementById('price');

        var selectedOption = selectElement.options[selectElement.selectedIndex];
        var unitName = selectedOption.getAttribute('data-unit-name');
        var price = selectedOption.value;

        unitNameElement.value = unitName;
        priceElement.value = price;
    }

    function updateInterestRate(radio) {
        var interestRate = 0;
        if (radio.value === "24") {
            interestRate = 0.2736;
        } else if (radio.value === "36") {
            interestRate = 0.3456;
        } else if (radio.value === "48") {
            interestRate = 0.4267;
        } else if (radio.value === "60") {
            interestRate = 0.5175;
        }
        document.getElementById("interestRate").value = interestRate;
    }

    function result() {
        var unitPrice = document.getElementById('unitPrice').value;
        var downpayment = document.querySelector('input[name="dp"]:checked').value;
        var term = document.querySelector('input[name="term"]:checked').value;
        var interest = document.getElementById("interestRate").value;
        var est = 'EST';

        var unitPrices = Math.floor(unitPrice);
        var remainingHundred = 1 - downpayment;
        var amount = unitPrice * remainingHundred;
        var interestAmount = Math.floor(amount * interest);
        var downpaymentAmount = unitPrice * downpayment;
        var loanAmount = interestAmount + amount;
        var result = Math.floor(loanAmount / term);

        document.getElementById('displayunitPrice').innerHTML = 'Unit Price : Php ' + unitPrices.toLocaleString();
        document.getElementById('term').innerHTML = 'Terms of Year : ' + term + ' (Months)';
        document.getElementById('downpayment').innerHTML = 'Downpayment : ' + (downpayment * 100) + '%';
        document.getElementById('result').innerHTML = 'Monthly Payment : Php ' + result.toLocaleString() + ' EST.';
        document.getElementById('est').innerHTML = 'Monthly Payment : Php ' + result.toLocaleString() + ' EST.';

    }
</script>

</html>