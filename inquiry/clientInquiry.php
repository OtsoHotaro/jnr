<div class="container bg-dark text-white pb-1 pt-2 px-0 d-flex justify-content-center align-items-center">
    <h2>Application Details</h2>
</div>

<div class="container p-0 py-1 my-3 d-flex justify-content-center align-items-center">
    <img src="images/left.png">
    <img src="images/right.png">
</div>

<div class="container bg-dark text-white">
    <h3 class="pt-1">Personal Information</h3>
</div>

<div class="container py-3">
    <div class="row">
        <div class="col-2">
            <h5>
                <p><b>Full Name</b></p>
            </h5>
        </div>
        <div class="col-4">
            <h5>
                <p><?php echo $result['name']; ?></p>
            </h5>
        </div>
        <div class="col-2">
            <h5>
                <p><b>Inquiry ID</b></p>
            </h5>
        </div>
        <div class="col-3">
            <h5>
                <p><?php echo $result['inquiry_id']; ?></p>
            </h5>
        </div>
    </div>
    <div class="row">
        <div class="col-2">
            <h5>
                <p><b>Email</b></p>
            </h5>
        </div>
        <div class="col-4">
            <h5>
                <p><?php echo $result['email']; ?></p>
            </h5>
        </div>
        <div class="col-2">
            <h5>
                <p><b>Contact</b></p>
            </h5>
        </div>
        <div class="col-3">
            <h5>
                <p><?php echo $result['contact']; ?></p>
            </h5>
        </div>
    </div>
    <div class="row">
        <div class="col-2">
            <h5>
                <p><b>Address</b></p>
            </h5>
        </div>
        <div class="col-4">
            <h5>
                <p><?php echo $result['location']; ?></p>
            </h5>
        </div>
        <div class="col-2">
            <h5>
                <p><b>Date of Inquiry</b></p>
            </h5>
        </div>
        <div class="col-3">
            <h5>
                <p><?php echo $result['date_of_inquiry']; ?></p>
            </h5>
        </div>
    </div>
</div>

<div class="container bg-dark text-white">
    <h3 class="pt-1">Car Loan Details</h3>
</div>

<div class="container py-3">
    <div class="row">
        <div class="col-2">
            <h5>
                <p><b>Car Unit</b></p>
            </h5>
        </div>
        <div class="col-4">
            <h5>
                <p><?php echo $result['car_unit']; ?></p>
            </h5>
        </div>
        <div class="col-2">
            <h5>
                <p><b>Car Brand</b></p>
            </h5>
        </div>
        <div class="col-3">
            <h5>
                <p><?php echo $result['car_brand']; ?></p>
            </h5>
        </div>
    </div>
    <div class="row">
        <div class="col-2">
            <h5>
                <p><b>Car Price</b></p>
            </h5>
        </div>
        <div class="col-4">
            <h5>
                <p>Php <?php echo $result['unit_price']; ?></p>
            </h5>
        </div>
        <div class="col-2">
            <h5>
                <p><b>DownPayment</b></p>
            </h5>
        </div>
        <div class="col-4">
            <h5>
                <p>Php <?php echo $result['downpayment'] * $result['unit_price']; ?> ( <?php echo $result['downpayment'] * 100 ?>% ) </p>
            </h5>
        </div>
    </div>
    <div class="row">
        <div class="col-2">
            <h5>
                <p><b>Term Length</b></p>
            </h5>
        </div>
        <div class="col-4">
            <h5>
                <p><?php echo $result['term_length']; ?> Months</p>
            </h5>
        </div>
        <div class="col-2">
            <h5>
                <p><b>Dealer</b></p>
            </h5>
        </div>
        <div class="col-3">
            <h5>
                <p><?php echo $result['dealer'] ?></p>
            </h5>
        </div>
    </div>
    <div class="row">
        <div class="col-2">
            <h5>
                <p><b>Reffered By</b></p>
            </h5>
        </div>
        <div class="col-4">
            <h5>
                <p><?php echo $result['referral']; ?></p>
            </h5>
        </div>
        <div class="col-2">
            <h5>
                <p><b>Inquiry Status</b></p>
            </h5>
        </div>
        <div class="col-3">
            <h5>
                <p><?php echo $result['status'] ?></p>
            </h5>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 d-flex flex-column align-items-end justify-content-end px-5">
        <input type="button" class="login-btn border-0" value="Cancel Inquiry" data-bs-toggle="modal" data-bs-target="#cancelModal">

        <div class="modal fade" id="cancelModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="queries.php" method="post">
                        <div class="modal-body">
                            Are you sure you want to cancel your inquiry??
                        </div>
                        <div class="modal-footer border-0">
                            <button type="button" class="btn btn-success" data-bs-dismiss="modal">No</button>
                            <input type="hidden" name="clientCancelId" value="<?php echo $result['inquiry_id']; ?>">
                            <input type="submit" class="btn btn-danger" value="Yes" name="clientCancelInquiry">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <p><b>Note for Inquiry Status</b></p>
    <p>Pending = bla bla bla</p>
    <p>On Process = bla bla bla</p>
    <p>Office Submitted = bla bla bla</p>
    <p>Bank Submitted = bla bla bla</p>
    <p>Approved = bla bla bla</p>
    <p>Rejected / Declined = bla bla bla</p>
</div>
</div>