<?php
include 'database.php';
include 'queries.php';

session_start();
if ($_SESSION['status'] == 'valid' || $_SESSION['status'] == 'invalid') {
    echo "<script>window.location.href='index.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
</head>

<body class="d-flex">
    <div class="left-sidebar shadow-lg">
        <div class="container h-100 p-0">
            <div class="logo-section pt-3">
                <div class="container d-flex justify-content-center p-0">
                    <div class="container d-flex flex-column align-items-center pe-3">
                        <img src="images/left.png" alt="Bootstrap" width="120" height="60">
                        <img src="images/right.png" alt="Bootstrap" width="220" height="60">
                    </div>
                </div>
            </div>
            <div class="link-section mt-3 pt-2">
                <div class="row mb-3 mx-2">
                    <div class="col-4 text-end p-0">
                        <i><img src="images/icons/dashboard.png" height="16"></i>
                    </div>
                    <div class="col-7">
                        <a href="?admin=dashboard" class="nav-link pt-1"><b>Dashboard</b></a>
                    </div>
                </div>
                <p class="small mx-4 px-2 pt-2 mb-2 border-top border-dark">Tables :</p>
                <div class="row mb-3 mx-2">
                    <div class="col-4 text-end p-0 pe-1">
                        <i><img src="images/icons/user-solid.png" height="16"></i>
                    </div>
                    <div class="col-7">
                        <a href="?admin=client" class="nav-link pt-1"><b>Client Acc</b></a>
                    </div>
                </div>
                <p class="small mx-4 px-2 pt-2 mb-2 border-top border-dark">Inquiries :</p>
                <div class="row mb-3 mx-2">
                    <div class="col-4 text-end p-0">
                        <i class="pe-1"><img src="images/icons/folder-solid.png" height="16" width="18"></i>
                    </div>
                    <div class="col-7">
                        <a href="?admin=pending" class="nav-link pt-1"><b>Pending</b></a>
                    </div>
                </div>
                <div class="row mb-3 mx-2">
                    <div class="col-4 text-end p-0">
                        <i class="pe-1"><img src="images/icons/folder-solid.png" height="16" width="18"></i>
                    </div>
                    <div class="col-7">
                        <a href="?admin=process" class="nav-link pt-1"><b>On Process</b></a>
                    </div>
                </div>
                <div class="row mb-3 mx-2">
                    <div class="col-4 text-end p-0">
                        <i class="pe-1"><img src="images/icons/folder-solid.png" height="16" width="18"></i>
                    </div>
                    <div class="col-7">
                        <a href="?admin=office" class="nav-link pt-1"><b>Office</b></a>
                    </div>
                </div>
                <div class="row mb-3 mx-2">
                    <div class="col-4 text-end p-0">
                        <i class="pe-1"><img src="images/icons/folder-solid.png" height="16" width="18"></i>
                    </div>
                    <div class="col-7">
                        <a href="?admin=bank" class="nav-link pt-1"><b>Bank</b></a>
                    </div>
                </div>
                <div class="row mb-3 mx-2">
                    <div class="col-4 text-end p-0">
                        <i><img src="images/icons/user-check-solid.png" height="16"></i>
                    </div>
                    <div class="col-7">
                        <a href="?admin=approved" class="nav-link pt-1"><b>Approved</b></a>
                    </div>
                </div>
                <div class="row mb-3 mx-2">
                    <div class="col-4 text-end p-0">
                        <i><img src="images/icons/user-xmark-solid.png" height="16"></i>
                    </div>
                    <div class="col-7">
                        <a href="?admin=rejected" class="nav-link pt-1"><b>Declined</b></a>
                    </div>
                </div>
                <div class="row mb-3 mx-2">
                    <div class="col-4 text-end p-0">
                        <i class="pe-1"><img src="images/icons/folder-solid.png" height="16" width="18"></i>
                    </div>
                    <div class="col-7">
                        <a href="?admin=released" class="nav-link pt-1"><b>Released</b></a>
                    </div>
                </div>
                <p class="small mx-4 px-2 pt-2 mb-2 border-top border-dark">Graphs :</p>
                <div class="row mb-3 mx-2">
                    <div class="col-4 text-end p-0 pe-1">
                        <i><img src="images/icons/chart-simple-solid.png" height="16"></i>
                    </div>
                    <div class="col-7">
                        <a href="?admin=report" class="nav-link pt-1"><b>Report</b></a>
                    </div>
                </div>
                <a href="logout.php">
                    logout
                </a>
            </div>
        </div>
    </div>
    <div class="right-main">
        <div class="container h-100 p-0">
            <div class="nav-section w-100 d-flex justify-content-end px-4">
                <p class="d-flex align-items-center h-100">Welcome | Admin</p>
            </div>
            <?php
            if (isset($_GET['admin'])) {
                $selectedPage = $_GET['admin'];
                switch ($selectedPage) {
                    case 'client':
                        include 'admin-pages/client.php';
                        break;
                    case 'pending':
                        include 'admin-pages/pending.php';
                        break;
                    case 'process':
                        include 'admin-pages/process.php';
                        break;
                    case 'office':
                        include 'admin-pages/office.php';
                        break;
                    case 'bank':
                        include 'admin-pages/bank.php';
                        break;
                    case 'approved':
                        include 'admin-pages/approved.php';
                        break;
                    case 'rejected':
                        include 'admin-pages/rejected.php';
                        break;
                    case 'released':
                        include 'admin-pages/released.php';
                        break;
                    case 'report':
                        include 'admin-pages/report.php';
                        break;
                    default:
                        // eto yung default na lalabas
                        include 'admin-pages/dashboard.php';
                }
            } else {
                // eto yung lalabas pag di nabasa yung link
                include 'admin-pages/dashboard.php';
            }
            ?>
        </div>
    </div>
</body>
<script>
    window.onload = function() {

        var chart = new CanvasJS.Chart("chartContainer", {
            title: {
                text: "Total Inquiries Over a Week"
            },
            axisY: {
                title: "Number of Inquiries"
            },
            data: [{
                type: "line",
                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart.render();

    }
</script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>

</html>