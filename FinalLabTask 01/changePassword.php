<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Change Password</title>
</head>

<body>

    <h2>Change Password</h2>

    <form method="post" action="">
        Current Password: <input type="password" name="current_password"> <br>

        New Password: <input type="password" name="new_password"> <br>

        Retype New Password:<input type="password" name="retype_password"> <br>

        <input type="submit" name="submit" value="Change Password">
    </form>

    <br>

    <?php

    if (isset($_POST['submit'])) {

        $current = $_REQUEST['current_password'];
        $new = $_REQUEST['new_password'];
        $retype = $_REQUEST['retype_password'];

        $valid = true;

        if ($current == "" || $new == "" || $retype == "") {
            echo "All fields are required!<br>";
            $valid = false;
        }

        if ($current == $new) {
            echo "New password cannot be same as current password!<br>";
            $valid = false;
        }

        if ($new != $retype) {
            echo "New password and retype password do not match!<br>";
            $valid = false;
        }

        if ($valid) {
            echo "Password successfully changed!";
        }
    }

    ?>

</body>

</html>