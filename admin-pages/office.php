<div class="page-section mt-1 px-4 d-flex justify-content-start">
    <p class="h5 d-flex align-items-center justify-content-center h-100 w-25 shadow p-3 rounded-5">
        <b>Office Submitted Inquiries</b>
    </p>
</div>
<div class="main-content mt-4 h-75 mx-4 overflow-auto">
    <table class="table table-striped table-hover shadow">
        <tr class="text-center">
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Location</th>
            <th>Date of Inquiry</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        <?php while ($result = mysqli_fetch_array($sqlOfficeInquiries)) { ?>
            <tr class="text-center">
                <td>
                    <?php echo $result['inquiry_id']; ?>
                </td>
                <td>
                    <?php echo $result['name']; ?>
                </td>
                <td>
                    <?php echo $result['email']; ?>
                </td>
                <td>
                    <?php echo $result['contact']; ?>
                </td>
                <td>
                    <?php echo $result['location']; ?>
                </td>
                <td>
                    <?php echo $result['date_of_inquiry']; ?>
                </td>
                <td>
                    <?php echo $result['status']; ?>
                </td>
                <td class="d-flex gap-2 justify-content-center">
                    <a href="" data-bs-toggle="modal" data-bs-target="#viewModal<?php echo $result['inquiry_id']; ?>"><img
                            src="images/icons/eye-solid.png" height="16" width="18"></a>
                    <a href="" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $result['inquiry_id']; ?>"><img
                            src="images/icons/pen-to-square-solid.png" height="16" width="18"></a>
                    <a href="" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $result['inquiry_id']; ?>"><img
                            src="images/icons/trash-solid.png" height="16" width="14"></a>
                            <a href="" data-bs-toggle="modal" data-bs-target="#emailModal<?php echo $result['inquiry_id']; ?>"><img
                            src="images/icons/envelope-solid.png" height="19" width="16"></a>
                </td>
            </tr>

            <!-- View Modal -->
            <div class="modal fade" id="viewModal<?php echo $result['inquiry_id']; ?>" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-dark bg-gradient">
                            <h1 class="modal-title fs-5 px-2 text-white" id="exampleModalLabel">Inquiry Details</h1>
                            <button type="button" class="btn-close bg-light" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container d-flex px-2">
                                <div class="col-6 mb-1">
                                    <label for="name" class="col-12 col-form-label"><b>Full Name</b></label>
                                    <input type="text" class=" col-12 form-control text-start bg-white border-0 p-0"
                                        value="<?php echo $result['name']; ?>" disabled>
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="name" class="col-12 col-form-label"><b>Email</b></label>
                                    <input type="text" class=" col-12 form-control text-start bg-white border-0 p-0"
                                        value="<?php echo $result['email']; ?>" disabled>
                                </div>
                            </div>
                            <div class="container d-flex border-bottom border-dark pb-2 px-2">
                                <div class="col-6 mb-1">
                                    <label for="name" class="col-12 col-form-label"><b>Contact</b></label>
                                    <input type="text" class=" col-12 form-control text-start bg-white border-0 p-0"
                                        value="<?php echo $result['contact']; ?>" disabled>
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="name" class="col-12 col-form-label"><b>Location</b></label>
                                    <input type="text" class=" col-12 form-control text-start bg-white border-0 p-0"
                                        value="<?php echo $result['location']; ?>" disabled>
                                </div>
                            </div>
                            <div class="container d-flex px-2">
                                <div class="col-4 mt-3 mb-1">
                                    <label for="name" class="col-12 col-form-label"><b>Car Brand</b></label>
                                    <input type="text" class=" col-12 form-control text-start bg-white border-0 p-0"
                                        value="<?php echo $result['car_brand']; ?>" disabled>
                                </div>
                                <div class="col-4 mt-3 mb-1">
                                    <label for="name" class="col-12 col-form-label"><b>Car Unit</b></label>
                                    <input type="text" class=" col-12 form-control text-start bg-white border-0 p-0"
                                        value="<?php echo $result['car_unit']; ?>" disabled>
                                </div>
                                <div class="col-4 mt-3 mb-1">
                                    <label for="name" class="col-12 col-form-label"><b>Car Price</b></label>
                                    <input type="text" class=" col-12 form-control text-start bg-white border-0 p-0"
                                        value="<?php echo $result['unit_price']; ?>" disabled>
                                </div>
                            </div>
                            <div class="container d-flex px-2 border-bottom border-dark pb-3">
                                <div class="col-4 mb-1">
                                    <label for="name" class="col-12 col-form-label"><b>Downpayment</b></label>
                                    <input type="text" class=" col-12 form-control text-start bg-white border-0 p-0"
                                        value="<?php echo $result['downpayment'] * 100; ?>%" disabled>
                                </div>
                                <div class="col-4 mb-1">
                                    <label for="name" class="col-12 col-form-label"><b>Interest Rate</b></label>
                                    <input type="text" class=" col-12 form-control text-start bg-white border-0 p-0"
                                        value="<?php echo $result['interest_rate'] * 100; ?>" disabled>
                                </div>
                                <div class="col-4 mb-1">
                                    <label for="name" class="col-12 col-form-label"><b>Term Length</b></label>
                                    <input type="text" class=" col-12 form-control text-start bg-white border-0 p-0"
                                        value="<?php echo $result['term_length']; ?>" disabled>
                                </div>
                            </div>
                            <div class="container d-flex px-2">
                                    <div class="col-6 mt-3 mb-1">
                                        <label for="name" class="col-12 col-form-label"><b>Referral</b></label>
                                        <input type="text" class=" col-12 form-control text-start text-start bg-white border-0 p-0"
                                            value="<?php echo $result['referral']; ?>" disabled>
                                    </div>
                                    <div class="col-6 mt-3 mb-1">
                                        <label for="name" class="col-12 col-form-label"><b>Dealer</b></label>
                                        <input type="text" class=" col-12 form-control text-start text-start bg-white border-0 p-0"
                                            value="<?php echo $result['dealer'];?>" disabled>
                                    </div>
                                </div>
                            <div class="container d-flex px-2">
                                <div class="col-6 mt-3 mb-1">
                                    <label for="name" class="col-12 col-form-label"><b>Date of Inquiry</b></label>
                                    <input type="text" class=" col-12 form-control text-start bg-white border-0 p-0"
                                        value="<?php echo $result['date_of_inquiry']; ?>" disabled>
                                </div>
                                <div class="col-6 mt-3 mb-1">
                                    <label for="name" class="col-12 col-form-label"><b>Inquiry Status</b></label>
                                    <input type="text" class=" col-12 form-control text-start bg-white border-0 p-0"
                                        value="<?php echo $result['status']; ?>" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer bg-dark bg-gradient">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Edit Modal -->
            <div class="modal fade" id="editModal<?php echo $result['inquiry_id']; ?>" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-dark bg-gradient">
                            <h1 class="modal-title fs-5 px-2 text-white" id="exampleModalLabel">Edit Inquiry</h1>
                            <button type="button" class="btn-close bg-light" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form action="queries.php" method="post">
                            <div class="modal-body">
                                <div class="container d-flex px-2">
                                    <div class="col-5 mb-1 me-5">
                                        <label for="name" class="col-12 col-form-label"><b>Full Name</b></label>
                                        <input type="text" class=" col-12 form-control text-start" name="adminEditName"
                                            value="<?php echo $result['name']; ?>">
                                        <input type="hidden" name="adminEditId" value="<?php echo $result['inquiry_id']; ?>">
                                    </div>
                                    <div class="col-5 mb-1">
                                        <label for="name" class="col-12 col-form-label"><b>Email</b></label>
                                        <input type="email" class="col-10 form-control text-start" name="adminEditEmail"
                                            value="<?php echo $result['email']; ?>">
                                    </div>
                                </div>
                                <div class="container d-flex border-bottom border-dark pb-2 px-2">
                                    <div class="col-5 mb-1 me-5">
                                        <label for="name" class="col-12 col-form-label"><b>Contact</b></label>
                                        <input type="number" class=" col-12 form-control text-start" name="adminEditContact"
                                            value="<?php echo $result['contact']; ?>">
                                    </div>
                                    <div class="col-5 mb-1">
                                        <label for="name" class="col-12 col-form-label"><b>Location</b></label>
                                        <input type="text" class=" col-12 form-control text-start" name="adminEditLocation"
                                            value="<?php echo $result['location']; ?>">
                                    </div>
                                </div>
                                <div class="container d-flex px-2">
                                    <div class="col-3 mt-3 mb-1">
                                        <label for="name" class="col-12 col-form-label"><b>Car Brand</b></label>
                                        <select class="form-select" name="adminEditBrand"
                                            aria-label="Default select example">
                                            <option value="<?php echo $result['car_brand']; ?>" selected>
                                                <?php echo $result['car_brand']; ?>
                                            </option>
                                            <option value="FORD">FORD</option>
                                            <option value="MITSUBISHI">MITSUBISHI</option>
                                            <option value="NISSAN">NISSAN</option>
                                            <option value="TOYOTA">TOYOTA</option>
                                            <option value="GEELY">GEELY</option>
                                            <option value="HONDA">HONDA</option>
                                        </select>
                                    </div>
                                    <div class="col-3 mt-3 mb-1 mx-5">
                                        <label for="name" class="col-12 col-form-label"><b>Car Unit</b></label>
                                        <input type="text" class=" col-12 form-control text-start" name="adminEditUnit"
                                            value="<?php echo $result['car_unit']; ?>">
                                    </div>
                                    <div class="col-3 mt-3 mb-1">
                                        <label for="name" class="col-12 col-form-label"><b>Car Price</b></label>
                                        <input type="number" class=" col-12 form-control text-start" name="adminEditPrice"
                                            value="<?php echo $result['unit_price']; ?>">
                                    </div>
                                </div>
                                <div class="container d-flex px-2 border-bottom border-dark pb-3">
                                    <div class="col-3 mb-1">
                                        <label for="name" class="col-12 col-form-label"><b>Downpayment</b></label>
                                        <select class="form-select" name="adminEditDownpayment"
                                            aria-label="Default select example">
                                            <option value="<?php echo $result['downpayment']; ?>" selected>
                                                <?php echo $result['downpayment']; ?>
                                            </option>
                                            <option value="0.20">0.20</option>
                                            <option value="0.30">0.30</option>
                                            <option value="0.40">0.40</option>
                                            <option value="0.50">0.50</option>
                                        </select>
                                    </div>
                                    <div class="col-3 mb-1 mx-5">
                                        <label for="name" class="col-12 col-form-label"><b>Interest Rate</b></label>
                                        <select class="form-select" name="adminEditInterest"
                                            aria-label="Default select example">
                                            <option value="<?php echo $result['term_length'];?>" selected>
                                                <?php echo $result['interest_rate'];?>
                                            </option>
                                            <option value="0.2736">27.36</option>
                                            <option value="0.3456">34.56</option>
                                            <option value="0.4267">42.67</option>
                                            <option value="0.5175">51.75</option>
                                        </select>
                                    </div>
                                    <div class="col-3 mb-1">
                                        <label for="name" class="col-12 col-form-label"><b>Term Length</b></label>
                                        <select class="form-select" name="adminEditTerm"
                                            aria-label="Default select example">
                                            <option value="<?php echo $result['term_length']; ?>" selected>
                                                <?php echo $result['term_length']; ?>
                                            </option>
                                            <option value="24">24</option>
                                            <option value="36">36</option>
                                            <option value="48">48</option>
                                            <option value="60">60</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="container d-flex px-2">
                                    <div class="col-5 mt-3 mb-1 me-5">
                                        <label for="name" class="col-12 col-form-label"><b>Referral</b></label>
                                        <input type="text" class=" col-12 form-control text-start" name="adminEditReferral"
                                            value="<?php echo $result['referral']; ?>">
                                    </div>
                                    <div class="col-5 mt-3 mb-1">
                                        <label for="name" class="col-12 col-form-label"><b>Dealer</b></label>
                                        <input type="text" class=" col-12 form-control text-start" name="adminEditDealer"
                                            value="<?php echo $result['dealer']; ?>">
                                    </div>
                                </div>
                                <div class="container d-flex px-2">
                                    <div class="col-5 mt-3 mb-1 me-5">
                                        <label for="name" class="col-12 col-form-label"><b>Date of Inquiry</b></label>
                                        <input type="date" class=" col-12 form-control text-start" name="adminEditDate"
                                            value="<?php echo $result['date_of_inquiry']; ?>">
                                    </div>
                                    <div class="col-5 mt-3 mb-1">
                                        <label for="name" class="col-12 col-form-label"><b>Inquiry Status</b></label>
                                        <select class="form-select" name="adminEditStatus"
                                            aria-label="Default select example">
                                            <option value="<?php echo $result['status']; ?> " selected>
                                                <?php echo $result['status']; ?>
                                            </option>
                                            <option value="Approved">Approved</option>
                                            <option value="Rejected">Rejected</option>
                                            <option value="Bank Submitted">Bank Submitted</option>
                                            <option value="Office Submitted">Office Submitted</option>
                                            <option value="On Process">On Process</option>
                                            <option value="Released">Released</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer bg-dark bg-gradient">
                                <input type="submit" name="adminEditInquiry" value="Save Changes" class="btn btn-success">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Email Modal -->
            <div class="modal fade" id="emailModal<?php echo $result['inquiry_id']; ?>" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 px-2" id="exampleModalLabel">Email</h1>
                            <button type="button" class="btn-close bg-light" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container p-0 d-flex flex-column gap-2">
                                <div class="col-11 d-flex">
                                    <label for="name" class="col-4 col-form-label"><b>Sender Name :</b></label>
                                    <input type="text" class="form-control" id="sendername"
                                    value="Auto Loan Express PH">
                                </div>
                                <div class="col-11 d-flex">
                                    <label for="name" class="col-4 col-form-label"><b>To :</b></label>
                                    <input type="text" class="form-control" id="to"
                                    value="<?php echo $result['email'];?>">
                                </div>
                                <div class="col-11 d-flex">
                                    <label for="name" class="col-4 col-form-label"><b>Subject :</b></label>
                                    <input type="text" class="form-control" id="subject">
                                </div>
                                <div class="col-11 d-flex">
                                    <label for="name" class="col-4 col-form-label"><b>Reply to :</b></label>
                                    <input type="text" class="form-control" id="reply_to">
                                </div>
                                <div class="col-11 d-flex">
                                    <label for="name" class="col-4 col-form-label"><b>Message :</b></label>
                                    <textarea cols="40" rows="8" class="form-control" id="message"></textarea>
                                </div>
                                <div class="col-11">
                                    <button class="btn btn-danger w-25 float-end" onclick="sendemail();">Send</button>
                                </div>

                                <script>
                                    function sendemail() {
                                        (function(){
                                            emailjs.init("z3uSBtN04E-7fbyLv");
                                        })();

                                        var parameters = {
                                            sender : document.querySelector("#sendername").value,
                                            to : document.querySelector("#to").value,
                                            subject : document.querySelector("#subject").value,
                                            replyto : document.querySelector("#reply_to").value,
                                            message : document.querySelector("#message").value,
                                        };

                                        var serviceID = "service_vctrhla";
                                        var templateID = "template_wxbrtmk";

                                        emailjs.send(serviceID, templateID, parameters)
                                        .then (res => {
                                            alert("Email Sent Successfully!");
                                        }) 
                                        .catch ();
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Delete Modal -->
            <div class="modal fade" id="deleteModal<?php echo $result['inquiry_id']; ?>" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 px-2" id="exampleModalLabel">Delete Inquiry</h1>
                            <button type="button" class="btn-close bg-light" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="queries.php" method="post">
                                <div class="container py-4">
                                    <h5>This action cannot be undone.</h5>
                                    <h5>Are you sure you want to delete <b class="text-danger">
                                            <?php echo $result['name']; ?>
                                        </b> inquiry? :( </h5>
                                    <input type="hidden" name="idDelete" value="<?php echo $result['inquiry_id']; ?>">
                                </div>
                                <div class="modal-footer p-0">
                                    <button type="button" class="btn btn-success float-end ms-1 mt-3" data-bs-dismiss="modal">No</button>
                                    <button type="submit" class="btn btn-danger float-end mt-3"
                                        name="adminDeleteInquiry">Yes,
                                        Im sure!</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </table>
</div>