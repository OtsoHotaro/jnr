<div class="container h-100 d-flex justify-content-center p-0 gap-4">
    <div class="container w-75 m-0 shadow-lg rounded-4">
        <form action="queries.php" method="post">
            <div class="container d-flex flex-column p-4">
                <div class="row my-1">
                    <div class="col-8">
                        <label for="name" class="col-1 col-form-label"><b>Name</b></label>
                        <input type="text" class="form-control text-start" name="inquiryName"
                            placeholder="Input your Full Name" required>
                        <input type="hidden" class="form-control text-start" value="<?php echo $id ?>" name="id">
                    </div>
                    <div class="col-4">
                        <label for="name" class="col-4 col-form-label"><b>Contact No.</b></label>
                        <input type="number" class="form-control text-start" placeholder="Input your Contact Number"
                            name="inquiryContact" required>

                    </div>
                </div>
                <div class="row my-1">
                    <div class="col-8">
                        <label for="name" class="col-12 col-form-label"><b>Email</b></label>
                        <input type="email" class="form-control text-start" name="inquiryEmail"
                            placeholder="Input your Email Address" required>
                    </div>
                    <div class="col-4">
                        <label for="name" class="col-1 col-form-label"><b>Location</b></label>
                        <input type="text" class="form-control text-start" name="inquiryCity" placeholder="Input your Current City Location"
                            required>
                    </div>
                </div>
                <div class="row my-1">
                    <div class="col-8">
                        <label for="name" class="col-1 col-form-label"><b>Unit</b></label>
                        <div class="input-group mb-3">
                            <label class="input-group-text">Options</label>
                            <select class="form-select" id="unitPrice" name="inquiryUnit" onchange="updateUnitName()"
                                required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1523000" data-unit-name="Geely Okavango 1.5 AT Comfort 2024">Geely Okavango 1.5 AT Comfort 2024</option>
                                <option value="1633000" data-unit-name="Geely Okavango 1.5 AT Urban 2024">Geely Okavango 1.5 AT Urban 2024</option>
                                <option value="1765000" data-unit-name="Geely Okavango 1.5 AT Urban Plus 2024">Geely Okavango 1.5 AT Urban Plus 2024</option>
                            </select>
                        </div>
                        <input type="hidden" id="unitName" name="unitName" value="">
                        <input type="hidden" id="price" name="price" value="">
                    </div>
                    <div class="col-4">
                        <label for="name" class="col-1 col-form-label"><b>Brand</b></label>
                        <input type="text" class="form-control text-start" value="GEELY" disabled>
                        <input type="hidden" name="inquiryBrand" value="GEELY">
                    </div>
                </div>
                <div class="row my-1">
                    <div class="col-8">
                        <label for="name" class="col-7 col-form-label"><b>Preferred Car Loan Terms</b></label>
                        <div class="container mt-2 p-0">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="term" value="24" id="2"
                                    onclick="updateInterestRate(this)" required>
                                <label class="form-check-label" for="2">2 Years</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="term" value="36" id="3"
                                    onclick="updateInterestRate(this)">
                                <label class="form-check-label" for="3">3 Years</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="term" value="48" id="4"
                                    onclick="updateInterestRate(this)">
                                <label class="form-check-label" for="4">4 Years</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="term" value="60" id="5"
                                    onclick="updateInterestRate(this)">
                                <label class="form-check-label" for="5">5 Years</label>
                            </div>
                        </div>
                        <input type="hidden" id="interestRate" name="interestRate">
                    </div>
                    <div class="col-4">
                        <label for="name" class="col-12 col-form-label"><b>Referral Code</b></label>
                        <input type="text" class="form-control text-start" name="inquiryReferral"
                            placeholder="Input your Referral Code" required>
                    </div>
                </div>
                <div class="row my-1">
                    <div class="col-8">
                        <label for="name" class="col-7 col-form-label"><b>Downpayment</b></label>
                        <div class="container mt-2 p-0">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="dp" value=".2" onchange="result()" id="20"
                                    required>
                                <label class="form-check-label" for="20">20%</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="dp" value=".25" onchange="result()" id="25">
                                <label class="form-check-label" for="25">25%</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="dp" value=".3" onchange="result()" id="30">
                                <label class="form-check-label" for="30">30%</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="dp" value=".4" onchange="result()" id="40">
                                <label class="form-check-label" for="40">40%</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="dp" value=".5" onchange="result()" id="50">
                                <label class="form-check-label" for="50">50%</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value=""  id="invalidCheck" required>
                        <label class="form-check-label d-flex gap-2" for="invalidCheck">
                            I agree to these <a href="#" class="text-danger text-decoration-none" data-bs-toggle="modal" data-bs-target="#termsModal" >Terms and Condition</a>
                        </label>
                    </div>
                    <div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    Terms & Condition
                                </div>
                                <div class="modal-body">
                                    <p><b>Eligibility :</b></p>
                                    <p class="ms-3">
                                        • AutoLoan Express PH provides car financing services to individuals who meet the eligibility criteria set forth by our partnered financial institutions.
                                    </p>
                                    <p class="ms-3">
                                        • Applicants must be of legal age and possess the necessary documentation to apply for a car loan.
                                    </p>
                                    <p><b>Application Process :</b></p>
                                    <p class="ms-3">
                                        • All applications for car loans through AutoLoan Express PH are subject to review and approval by our partnered financial institutions.
                                    </p>
                                    <p class="ms-3">
                                        • Applicants are required to provide accurate and truthful information during the application process.
                                    </p>
                                    <p class="ms-3">
                                        • Submission of false or misleading information may result in the rejection of the application.
                                    </p>
                                    <p><b>Interest Rates and Fees : </b></p>
                                    <p class="ms-3">
                                        • Interest rates and fees associated with car loans are determined by our partnered financial institutions and are subject to change without prior notice.
                                    </p>
                                    <p class="ms-3">
                                        • Applicants will be informed of the applicable interest rates, fees, and charges associated with their loan before finalizing the agreement.
                                    </p>
                                    <p><b>Loan Approval and Disbursement :</b></p>
                                    <p class="ms-3">
                                        • Loan approval is at the discretion of our partnered financial institutions and is based on various factors including but not limited to creditworthiness, income, and debt-to-income ratio.
                                    </p>
                                    <p class="ms-3">
                                        • Upon loan approval, funds will be disbursed directly to the dealership or seller of the chosen vehicle.
                                    </p>
                                    <p><b>Vehicle Ownership and Insurance :</b></p>
                                    <p class="ms-3">
                                        • Ownership of the vehicle remains with the dealership or seller until the loan is fully paid off.
                                    </p>
                                    <p class="ms-3">
                                        • Applicants are required to obtain comprehensive insurance coverage for the vehicle for the duration of the loan term.
                                    </p>
                                    <p><b>Repayment Terms :</b></p>
                                    <p class="ms-3">
                                        • Loan repayment terms, including the duration of the loan and the frequency of payments, will be specified in the loan agreement.
                                    </p>
                                    <p class="ms-3">
                                        • Failure to make timely payments may result in late fees, penalties, and negative impacts on credit scores.
                                    </p>
                                    <p><b>Repayment Terms :</b></p>
                                    <p class="ms-3">
                                        • Loan repayment terms, including the duration of the loan and the frequency of payments, will be specified in the loan agreement.
                                    </p>
                                    <p class="ms-3">
                                        • Failure to make timely payments may result in late fees, penalties, and negative impacts on credit scores.
                                    </p>
                                    <p><b>Prepayment and Early Termination :</b></p>
                                    <p class="ms-3">
                                        • Applicants may have the option to make prepayments or settle the loan before the end of the term, subject to the terms and conditions outlined in the loan agreement.
                                    </p>
                                    <p class="ms-3">
                                        • Prepayment penalties, if applicable, will be specified in the loan agreement.
                                    </p>
                                    <p><b>Privacy and Data Protection :</b></p>
                                    <p class="ms-3">
                                        • AutoLoan Express PH respects the privacy of our clients and is committed to protecting their personal information in accordance with applicable laws and regulations.
                                    </p>
                                    <p class="ms-3">
                                        • Client information collected during the application process will be used solely for the purpose of processing the loan application.
                                    </p>
                                    <p><b>Governing Law :</b></p>
                                    <p class="ms-3">
                                        • These terms and conditions shall be governed by and construed in accordance with the laws of the jurisdiction in which AutoLoan Express PH operates.
                                    </p>
                                    <p><b>Amendment and Modification :</b></p>
                                    <p class="ms-3">
                                        • AutoLoan Express PH reserves the right to amend or modify these terms and conditions at any time without prior notice.
                                    </p>
                                    <p class="ms-3">
                                        • Any changes to the terms and conditions will be communicated to clients through our website or other appropriate channels.
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                // Check if $_SESSION['status'] is set before accessing it
                if (isset($_SESSION['status'])) {
                    if ($_SESSION['status'] == 'valid') {
                        if (mysqli_num_rows($sqlCounterInquiries) > 0) {
                            include 'btns/limitbtn.php';
                        } else {
                            include('btns/submitInquiry.php');
                        }
                    } else {
                        include('btns/loginInquiry.php');
                    }
                } else {
                    // If $_SESSION['status'] is not set, set it to 'invalid'
                    $_SESSION['status'] = 'invalid';
                    include('btns/loginInquiry.php');
                }
                ?>
            </div>
        </form>
    </div>
    <div class="container w-25 shadow-lg rounded-3">
        <div class="container">
            <img src="images/car-images/okavango.png" class="img-fluid h-100 w-100 rounded-3 my-4" alt="...">
            <p><b>Quick Payment Preview</b></p>
            <div class="container p-0">
                <p>Unit Name : GEELY OKAVANGO</p>
                <p id="displayunitPrice"></p>
                <p id="term"></p>
                <p id="downpayment"></p>
                <p id="result"></p>
            </div>
        </div>
    </div>
</div>