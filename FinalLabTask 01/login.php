<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
</head>

<body>

    <h2>Login</h2>

    <form method="post" action="" enctype="multipart/form-data">
        Username: <input type="text" name="username" value="" /> <br>
        Password: <input type="password" name="password" value="" /> <br>
        <input type="checkbox" name="remember" value="1" /> Remember Me <br>
        <input type="submit" name="submit" value="Submit" />
        <a href="forgotPassword.php">Forgot Password?</a>

    </form>
</body>

</html>

<?php
if (isset($_POST['submit'])) {

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    $valid = true;

    if ($username == "" || $password == "") {
        echo "Null username/password!<br>";
        $valid = false;
    }


    for ($i = 0; $i < strlen($username); $i++) {
        $ch = $username[$i];

        if (
            !($ch >= 'a' && $ch <= 'z') &&
            !($ch >= 'A' && $ch <= 'Z') &&
            !($ch >= '0' && $ch <= '9') &&
            $ch != '.' &&
            $ch != '_' &&
            $ch != '-'
        ) {
            echo "Username can only contain letters, numbers, period, dash, underscore.<br>";
            $valid = false;
            break;
        }
    }
    if (strlen($username) < 2) {
        echo "Username must be at least 2 characters long.<br>";
        $valid = false;
    }

    if (strlen($password) < 8) {
        echo "Password must be at least 8 characters long.<br>";
        $valid = false;
    }

    $hasSpecial = false;

    for ($i = 0; $i < strlen($password); $i++) {
        if (
            $password[$i] == '@' ||
            $password[$i] == '#' ||
            $password[$i] == '$' ||
            $password[$i] == '%'
        ) {
            $hasSpecial = true;
            break;
        }
    }

    if (!$hasSpecial) {
        echo "Password must contain at least one special character (@, #, $, %).<br>";
        $valid = false;
    }




    if ($valid) {
        echo "Login successful!";
    }
}
?>