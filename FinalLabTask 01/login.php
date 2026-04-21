<?php
session_start();

if (isset($_POST['submit'])) {

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    $valid = true;

    if ($username == "" || $password == "") {
        echo "Null username/password!<br>";
        $valid = false;
    }


    if (!preg_match("/^[a-zA-Z0-9._-]+$/", $username)) {
        echo "Username can contain only letters, numbers, period, dash or underscore.<br>";
        $valid = false;
    }

    if (strlen($username) < 2) {
        echo "Username must be at least 2 characters long.<br>";
        $valid = false;
    }

    if (strlen($password) < 8) {
        echo "Password must be at least 8 characters long.<br>";
        $valid = false;
    }

    if (!preg_match("/[@#$%]/", $password)) {
        echo "Password must contain at least one special character (@, #, $, %).<br>";
        $valid = false;
    }



    if ($valid) {
        echo "Login successful!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
</head>

<body>

    <form method="post" action="" enctype="multipart/form-data">
        Username: <input type="text" name="username" value="" /> <br>
        Password: <input type="password" name="password" value="" /> <br>
        <input type="checkbox" name="remember" value="1" /> Remember Me <br>
        <input type="submit" name="submit" value="Submit" />
        <a href="forgotPassword.php">Forgot Password?</a>

    </form>
</body>

</html>