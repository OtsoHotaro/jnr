<?php
    session_start();

    if (isset($_SESSION['status'])) {
        if ($_SESSION['status'] == 'adminLogIn') {
            echo "<script>window.location.href='admin.php'</script>";
        } else if ($_SESSION['status'] == 'adminLogOut') {
            echo "<script>window.location.href='adminlogin.php'</script>";
        }
    }
?>