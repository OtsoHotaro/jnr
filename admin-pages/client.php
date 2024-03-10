<div class="page-section mt-1 px-4">
    <p class="h3 d-flex align-items-center justify-content-center h-100 w-25 shadow p-3 rounded-5">
        <b>Client's Table</b>
    </p>
</div>
<div class="main-content mt-4 h-75 mx-4 overflow-auto">
    <table class="table table-striped table-hover shadow">
        <tr class="text-center">
            <th>ID</th>
            <th>Username</th>
            <th>Surname</th>
            <th>Email</th>
            <th>Birthday</th>
            <th>Age</th>
            <th>Address</th>
            <th>Contact</th>
            <th>Action</th>
        </tr>

        <?php while ($result = mysqli_fetch_array($sqlReadClient)) { ?>
            <tr class="text-center">
                <td>
                    <?php echo $result['account_id']; ?>
                </td>
                <td>
                    <?php echo $result['username']; ?>
                </td>
                <td>
                    <?php echo $result['surname']; ?>
                </td>
                <td>
                    <?php echo $result['email']; ?>
                </td>
                <td>
                    <?php echo $result['birthday']; ?>
                </td>
                <td>
                    <?php echo $result['age']; ?>
                </td>
                <td>
                    <?php echo $result['address']; ?>
                </td>
                <td>
                    <?php echo $result['contact']; ?>
                </td>
                <td class="d-flex gap-2 justify-content-center">
                    <a href="" data-bs-toggle="modal" data-bs-target="#viewModal<?php echo $result['account_id']; ?>"><img
                            src="images/icons/eye-solid.png" height="16" width="18"></a>
                    <a href="" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $result['account_id']; ?>"><img
                            src="images/icons/pen-to-square-solid.png" height="16" width="18"></a>
                    <a href="" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $result['account_id']; ?>"><img
                            src="images/icons/trash-solid.png" height="16" width="14"></a>
                            <a href="" data-bs-toggle="modal" data-bs-target="#emailModal<?php echo $result['account_id']; ?>"><img
                            src="images/icons/envelope-solid.png" height="19" width="16"></a>
                </td>
            </tr>
            <!-- View Modal -->
            <div class="modal fade" id="viewModal<?php echo $result['account_id']; ?>" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-dark bg-gradient">
                            <h1 class="modal-title fs-5 px-2 text-white" id="exampleModalLabel">Inquiry Details</h1>
                            <button type="button" class="btn-close bg-light" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container d-flex px-2 pb-2 border-bottom border-dark">
                                <div class="col-6 mb-1">
                                    <label for="name" class="col-12 col-form-label"><b>Username</b></label>
                                    <input type="text" class=" col-12 form-control text-start bg-white border-0 p-0"
                                        value="<?php echo $result['username']; ?>" disabled>
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="name" class="col-12 col-form-label"><b>Userpass</b></label>
                                    <input type="text" class=" col-12 form-control text-start bg-white border-0 p-0"
                                        value="<?php echo $result['userpass']; ?>" disabled>
                                </div>
                            </div>
                            <div class="container d-flex px-2">
                                <div class="col-6 mt-2 mb-1">
                                    <label for="name" class="col-12 col-form-label"><b>Name</b></label>
                                    <input type="text" class=" col-12 form-control text-start bg-white border-0 p-0"
                                        value="<?php echo $result['name']; ?>" disabled>
                                </div>
                                <div class="col-6 mt-2 mb-1">
                                    <label for="name" class="col-12 col-form-label"><b>Surname</b></label>
                                    <input type="text" class=" col-12 form-control text-start bg-white border-0 p-0"
                                        value="<?php echo $result['surname']; ?>" disabled>
                                </div>
                            </div>
                            <div class="container d-flex px-2">
                                <div class="col-6 mb-1">
                                    <label for="name" class="col-12 col-form-label"><b>Birthday</b></label>
                                    <input type="date" class=" col-12 form-control text-start bg-white border-0 p-0"
                                        value="<?php echo $result['birthday']; ?>" disabled>
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="name" class="col-12 col-form-label"><b>Age</b></label>
                                    <input type="number" class=" col-12 form-control text-start bg-white border-0 p-0"
                                        value="<?php echo $result['age']; ?>" disabled>
                                </div>
                            </div>
                            <div class="container d-flex px-2 pb-2 border-bottom border-dark">
                                <div class="col-6 mb-1">
                                    <label for="name" class="col-12 col-form-label"><b>Address</b></label>
                                    <input type="text" class=" col-12 form-control text-start bg-white border-0 p-0"
                                        value="<?php echo $result['address']; ?>" disabled>
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="name" class="col-12 col-form-label"><b>Contact Number</b></label>
                                    <input type="number" class=" col-12 form-control text-start bg-white border-0 p-0"
                                        value="<?php echo $result['contact']; ?>" disabled>
                                </div>
                            </div>
                            <div class="container d-flex px-2">
                                <div class="col-6 mt-3 mb-1">
                                    <label for="name" class="col-12 col-form-label"><b>Account Status</b></label>
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
            <div class="modal fade" id="editModal<?php echo $result['account_id']; ?>" tabindex="-1"
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
                                <div class="container d-flex px-2 pb-2 border-bottom border-dark">
                                    <div class="col-5 me-5 mb-1">
                                        <label for="name" class="col-12 col-form-label"><b>Username</b></label>
                                        <input type="text" class=" col-12 form-control text-start"
                                            value="<?php echo $result['username']; ?>">
                                    </div>
                                    <div class="col-5 mb-1">
                                        <label for="name" class="col-12 col-form-label"><b>Userpass</b></label>
                                        <input type="text" class=" col-12 form-control text-start"
                                            value="<?php echo $result['userpass']; ?>" >
                                    </div>
                                </div>
                                <div class="container d-flex px-2">
                                    <div class="col-5 me-5 mt-2 mb-1">
                                        <label for="name" class="col-12 col-form-label"><b>Name</b></label>
                                        <input type="text" class=" col-12 form-control text-start"
                                            value="<?php echo $result['name']; ?>" >
                                    </div>
                                    <div class="col-5 mt-2 mb-1">
                                        <label for="name" class="col-12 col-form-label"><b>Surname</b></label>
                                        <input type="text" class=" col-12 form-control text-start"
                                            value="<?php echo $result['surname']; ?>" >
                                    </div>
                                </div>
                                <div class="container d-flex px-2">
                                    <div class="col-5 me-5 mb-1">
                                        <label for="name" class="col-12 col-form-label"><b>Birthday</b></label>
                                        <input type="date" class=" col-12 form-control text-start"
                                            value="<?php echo $result['birthday']; ?>" >
                                    </div>
                                    <div class="col-5 mb-1">
                                        <label for="name" class="col-12 col-form-label"><b>Age</b></label>
                                        <input type="number" class=" col-12 form-control text-start"
                                            value="<?php echo $result['age']; ?>" >
                                    </div>
                                </div>
                                <div class="container d-flex px-2 pb-2 border-bottom border-dark">
                                    <div class="col-5 me-5 mb-1">
                                        <label for="name" class="col-12 col-form-label"><b>Address</b></label>
                                        <input type="text" class=" col-12 form-control text-start"
                                            value="<?php echo $result['address']; ?>" >
                                    </div>
                                    <div class="col-5 mb-1">
                                        <label for="name" class="col-12 col-form-label"><b>Contact Number</b></label>
                                        <input type="number" class=" col-12 form-control text-start"
                                            value="<?php echo $result['contact']; ?>" >
                                    </div>
                                </div>
                                <div class="container d-flex px-2">
                                    <div class="col-5 me-5 mt-3 mb-1">
                                        <label for="name" class="col-12 col-form-label"><b>Account Status</b></label>
                                        <input type="text" class=" col-12 form-control text-start"
                                            value="<?php echo $result['status']; ?>" >
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
            <div class="modal fade" id="emailModal<?php echo $result['account_id']; ?>" tabindex="-1"
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
            <div class="modal fade" id="deleteModal<?php echo $result['account_id']; ?>" tabindex="-1"
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
                                    <input type="hidden" name="idDelete" value="<?php echo $result['account_id']; ?>">
                                </div>
                                <div class="modal-footer p-0">
                                    <button type="button" class="btn btn-success float-end ms-1 mt-3 data-bs-dismiss="
                                        modal">No</button>
                                    <button type="submit" class="btn btn-danger float-end mt-3"
                                        name="adminDeleteClient">Yes,
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