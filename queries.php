<?php
include("database.php");

$queryInquiryToday = "SELECT COUNT(*) AS inquiryToday FROM inquiries WHERE `date_of_inquiry` = CURDATE()";
$sqlInquiryToday = mysqli_query($connection, $queryInquiryToday);
$resultInquiryToday = mysqli_fetch_array($sqlInquiryToday);

$queryTotalNumberOfClient = "SELECT COUNT(*) AS totalAccount FROM client_account";
$sqlTotalNumberOfClient = mysqli_query($connection, $queryTotalNumberOfClient);
$resultTotalAccount = mysqli_fetch_array($sqlTotalNumberOfClient);

$queryReadClient = "SELECT * FROM client_account";
$sqlReadClient = mysqli_query($connection, $queryReadClient);

$queryPendingInquiries = "SELECT * FROM inquiries WHERE `status` = 'Pending'";
$sqlPendingInquiries = mysqli_query($connection, $queryPendingInquiries);

$queryProcessInquiries = "SELECT * FROM inquiries WHERE `status` = 'Process'";
$sqlProcessInquiries = mysqli_query($connection, $queryProcessInquiries);

$queryOfficeInquiries = "SELECT * FROM inquiries WHERE `status` = 'Office Submitted'";
$sqlOfficeInquiries = mysqli_query($connection, $queryOfficeInquiries);

$queryBankInquiries = "SELECT * FROM inquiries WHERE `status` = 'Bank Submitted'";
$sqlBankInquiries = mysqli_query($connection, $queryBankInquiries);

$queryApprovedInquiries = "SELECT * FROM inquiries WHERE `status` = 'Approved'";
$sqlApprovedInquiries = mysqli_query($connection, $queryApprovedInquiries);

$queryRejectedInquiries = "SELECT * FROM inquiries WHERE `status` ='Rejected'";
$sqlRejectedInquiries = mysqli_query($connection, $queryRejectedInquiries);

$queryReleasedInquiries = "SELECT * FROM inquiries WHERE `status` ='Released'";
$sqlReleasedInquiries = mysqli_query($connection, $queryReleasedInquiries);

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $updateUsername = $_POST['updateUsername'];
    $updateEmail = $_POST['updateEmail'];
    $updateName = $_POST['updateName'];
    $updateSurname = $_POST['updateSurname'];
    $updateBirthday = $_POST['updateBirthday'];
    $updateAge = $_POST['updateAge'];
    $updateAddress = $_POST['updateAddress'];
    $updateContact = $_POST['updateContact'];

    $queryUpdateClientInformation = "UPDATE `client_account` SET `username`='$updateUsername', `email`='$updateEmail',`name`='$updateName',`surname`='$updateSurname',`birthday`='$updateBirthday',`age`='$updateAge',`address`='$updateAddress',`contact`='$updateContact' WHERE `account_id`='$id'";
    $sqlUpdateClientInformation = mysqli_query($connection, $queryUpdateClientInformation);
    echo '<script>window.location.href="myaccount.php"</script>';
}

if (isset($_POST['submitInquiry'])) {
    $id = $_POST['id'];
    $inquiryName = $_POST["inquiryName"];
    $inquiryContact = $_POST["inquiryContact"];
    $inquiryEmail = $_POST["inquiryEmail"];
    $inquiryCity = $_POST["inquiryCity"];
    $inquiryUnit = $_POST["unitName"];
    $inquiryPrice = $_POST["price"];
    $inquiryBrand = $_POST["inquiryBrand"];
    $inquiryDownpayment = $_POST["dp"];
    $inquiryTermLength = $_POST["term"];
    $interestRate = $_POST["interestRate"];
    $unitName = $_POST["unitName"];
    $referral = $_POST["inquiryReferral"];
    $dealer = "N/A";
    $status = "Pending";

    $queryClientInquiry = "INSERT INTO `inquiries`(`inquiry_id`, `name`, `contact`, `email`, `location`, `car_brand`, `car_unit`, `unit_price`, `downpayment`, `interest_rate`, `term_length`, `dealer`, `referral`, `account_id`, `status`) VALUES ('','$inquiryName','$inquiryContact','$inquiryEmail','$inquiryCity','$inquiryBrand','$unitName', '$inquiryPrice', '$inquiryDownpayment','$interestRate','$inquiryTermLength', '$dealer', '$referral' ,'$id', '$status')";
    $sqlClientInquiry = mysqli_query($connection, $queryClientInquiry);
    echo '<script>alert("You have submitted your application successfuly!")</script>';
    echo '<script>window.location.href="index.php"</script>';
}

if (isset($_POST['clientCancelInquiry'])) {
    $id = $_POST['clientCancelId'];

    $queryClientCancelInquiry = "DELETE FROM inquiries WHERE `inquiry_id` = '$id'";
    $sqlClientCancelInquiry = mysqli_query($connection, $queryClientCancelInquiry);
    echo '<script>alert("You have cancelled your Inquiry!")</script>';
    echo '<script>window.location.href="inquiry.php"</script>';
}

if (isset($_POST['adminEditInquiry'])) {
    $id = $_POST['adminEditId'];
    $name = $_POST['adminEditName'];
    $contact = $_POST['adminEditContact'];
    $email = $_POST['adminEditEmail'];
    $location = $_POST['adminEditLocation'];
    $brand = $_POST['adminEditBrand'];
    $unit = $_POST['adminEditUnit'];
    $price = $_POST['adminEditPrice'];
    $downpayment = $_POST ['adminEditDownpayment'];
    $interest = $_POST['adminEditInterest'];
    $term = $_POST['adminEditTerm'];
    $referral = $_POST['adminEditReferral'];
    $dealer = $_POST['adminEditDealer'];
    $date = $_POST['adminEditDate'];
    $status = $_POST['adminEditStatus'];

    $queryAdminEditInquiry = "UPDATE `inquiries` SET `name`='$name',`contact`='$contact',`email`='$email',`location`='$location',`car_brand`='$brand',`car_unit`='$unit',`unit_price`='$price',`downpayment`='$downpayment',`interest_rate`='$interest',`term_length`='$term', `dealer`='$dealer', `referral`='$referral', `date_of_inquiry`='$date',`status`='$status' WHERE `inquiry_id` = '$id'";
    $sqlAdminEditInquiry = mysqli_query($connection, $queryAdminEditInquiry);
    
    echo '<script>alert("Changes Saved Successfully")</script>';
    echo '<script>window.location.href="admin.php?admin=inquiries"</script>';
}

if (isset($_POST['adminDeleteInquiry'])) {
    $id = $_POST['idDelete'];

    $queryAdminDeleteInquiry = "DELETE FROM inquiries WHERE `inquiry_id` = $id";
    $sqlAdminDeleteInquiry = mysqli_query($connection, $queryAdminDeleteInquiry);

    echo '<script>alert("Successfully Deleted")</script>';
    echo '<script>window.location.href="admin.php?admin=dashboard"</script>';
}

if (isset($_POST['adminDeleteClient'])) {
    $id = $_POST['idDelete'];

    $queryAdminDeleteClient = "DELETE FROM client_account WHERE `account_id` = $id";
    $sqlAdminDeleteClient = mysqli_query($connection, $queryAdminDeleteClient);

    echo '<script>alert("Successfully Deleted")</script>';
    echo '<script>window.location.href="admin.php?admin=client"</script>';
}
?>