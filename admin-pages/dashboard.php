<?php 
$querySunday = "SELECT COUNT(*) AS sunday FROM inquiries WHERE WEEKDAY(date_of_inquiry) = 6 AND WEEK(date_of_inquiry) = WEEK(CURDATE())";
$sqlSunday = mysqli_query($connection, $querySunday);
$resultSunday = mysqli_fetch_assoc($sqlSunday);

$queryMonday = "SELECT COUNT(*) AS monday FROM inquiries WHERE WEEKDAY(date_of_inquiry) = 0 AND WEEK(date_of_inquiry) = WEEK(CURDATE())";
$sqlMonday = mysqli_query($connection, $queryMonday);
$resultMonday = mysqli_fetch_assoc($sqlMonday);

$queryTuesday = "SELECT COUNT(*) AS tuesday FROM inquiries WHERE WEEKDAY(date_of_inquiry) = 1 AND WEEK(date_of_inquiry) = WEEK(CURDATE())";
$sqlTuesday = mysqli_query($connection, $queryTuesday);
$resultTuesday = mysqli_fetch_assoc($sqlTuesday);

$queryWednesday = "SELECT COUNT(*) AS wednesday FROM inquiries WHERE WEEKDAY(date_of_inquiry) = 2 AND WEEK(date_of_inquiry) = WEEK(CURDATE())";
$sqlWednesday = mysqli_query($connection, $queryWednesday);
$resultWednesday = mysqli_fetch_assoc($sqlWednesday);

$queryThursday = "SELECT COUNT(*) AS thursday FROM inquiries WHERE WEEKDAY(date_of_inquiry) = 3 AND WEEK(date_of_inquiry) = WEEK(CURDATE())";
$sqlThursday= mysqli_query($connection, $queryThursday);
$resultThursday = mysqli_fetch_assoc($sqlThursday);

$queryFriday = "SELECT COUNT(*) AS friday FROM inquiries WHERE WEEKDAY(date_of_inquiry) = 4 AND WEEK(date_of_inquiry) = WEEK(CURDATE())";
$sqlFriday= mysqli_query($connection, $queryFriday);
$resultFriday = mysqli_fetch_assoc($sqlFriday);

$querySaturday = "SELECT COUNT(*) AS saturday FROM inquiries WHERE WEEKDAY(date_of_inquiry) = 5 AND WEEK(date_of_inquiry) = WEEK(CURDATE())";
$sqlSaturday = mysqli_query($connection, $querySaturday);
$resultSaturday = mysqli_fetch_assoc($sqlSaturday);

$dataPoints = array(
    array("y" => $resultSunday['sunday'], "label" => "Sunday"),
    array("y" => $resultMonday['monday'], "label" => "Monday"),
    array("y" => $resultTuesday['tuesday'], "label" => "Tuesday"),
    array("y" => $resultWednesday['wednesday'], "label" => "Wednesday"),
    array("y" => $resultThursday['thursday'], "label" => "Thursday"),
    array("y" => $resultFriday['friday'], "label" => "Friday"),
    array("y" => $resultSaturday['saturday'], "label" => "Saturday")
);
?>

<div class="page-section mt-1 px-4 d-flex justify-content-start">
    <p class="h3 d-flex align-items-center justify-content-center h-100 w-25 shadow p-3 rounded-5">
        <b>Dashboard</b>
    </p>
</div>
<div class="main-content mt-3 h-75 mx-4 d-flex">
    <div class="container h-100 p-0">
        <div class="container d-flex justify-content-center align-items-center h-75">
            <div id="chartContainer" style="height: 370px; width: 100%;"></div>
        </div>
    </div>
    <div class="container h-100 d-flex flex-column">
        <div class="container p-0 h-25 d-flex justify-content-center gap-5 my-5">
            <div
                class="container text-white p-0 m-0 col-4 shadow bg-success bg-gradient rounded-4 d-flex flex-column align-items-center justify-content-center">
                <p class="h4">Total User</p>
                <p class="h1"><?php echo $resultTotalAccount['totalAccount'];?></p>
            </div>
            <div
                class="container text-white p-0 m-0 col-4 shadow bg-primary bg-gradient  rounded-4 d-flex flex-column align-items-center justify-content-center">
                <p class="h4">Today's Inquiries</p>
                <p class="h1"><?php echo $resultInquiryToday['inquiryToday'];?></p>
            </div>
        </div>
        <div class="container p-0 h-25 d-flex justify-content-center gap-5">
            <div
                class="container text-white p-0 m-0 col-4 shadow bg-secondary bg-gradient  rounded-4 d-flex flex-column align-items-center justify-content-center">
                <p class="h4">Monthly Release</p>
                <p class="h1">10</p>
            </div>
            <div
                class="container p-0 m-0 col-4 shadow bg-info bg-gradient  rounded-4 d-flex flex-column align-items-center justify-content-center">
                <p class="h6">Employee of the Month</p>
                <p class="h1">Lisle</p>
            </div>
        </div>
    </div>
</div>