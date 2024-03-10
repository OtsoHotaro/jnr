<form action="" method="post">
    <?php

    $id = $_SESSION['id'];
    $queryDropDown = "SELECT * FROM inquiries WHERE `account_id` = '$id'";
    $sqlDropDown = mysqli_query($connection, $queryDropDown);
    $resultDropDown = mysqli_fetch_array($sqlDropDown);

    $queryDropDown2 = "SELECT * FROM client_account WHERE `account_id` = '$id'";
    $sqlDropDown2 = mysqli_query($connection, $queryDropDown2);
    $resultDropDown2 = mysqli_fetch_array($sqlDropDown2);
    ?>
    <div class="dropdown">
        <input type="submit" value="<?php echo $_SESSION['username'] ?>⮟" class="login-btn w-100 border-0 dropdown-toggle"
            data-bs-toggle="dropdown">

        <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item text-center" href="myaccount.php">Account
                    <p class="small p-0 m-0 text-info">
                        <?php
                        if (mysqli_num_rows($sqlDropDown2) > 0) {
                            echo $resultDropDown2['status'];
                        } else {
                        }
                        ?>
                    </p>
                </a></li>
            <li><a class="dropdown-item text-center" href="inquiry.php">Application
                    <p class="small p-0 m-0 text-info">
                        <?php
                        if (mysqli_num_rows($sqlDropDown) > 0) {
                            echo $resultDropDown['status'];
                        } else {
                        }
                        ?>
                    </p>
                </a></li>
            <li><a class="dropdown-item text-center" data-bs-toggle="modal" data-bs-target="#logoutModal">Logout</a>
            </li>
        </ul>
    </div>
</form>