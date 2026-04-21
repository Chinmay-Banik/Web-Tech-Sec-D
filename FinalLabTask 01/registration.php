<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration</title>
</head>

<body>

    <h2>Registration</h2>

    <form method="post" action="" enctype="multipart/form-data">
        Name: <input type="text" name="name" value="" /> <br>
        Email: <input type="text" name="email" value="" /> <br>
        Username: <input type="text" name="username" value="" /> <br>
        Password: <input type="password" name="password" value="" /> <br>
        Confirm Password: <input type="password" name="confirm_password" value="" /> <br>
        Gender:
        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female
        <input type="radio" name="gender" value="other"> Other <br>
        Date of Birth: <input type="date" name="dob"> <br>
        <input type="submit" name="submit" value="Submit" />
        <input type="reset" name="reset" value="Reset" />

    </form>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $confirm_password = $_REQUEST['confirm_password'];
    $gender = isset($_REQUEST['gender']);
    $dob = $_REQUEST['dob'];
    $valid = true;

    if (
        $name == "" || $email == "" || $username == "" || $password == "" ||
        $confirm_password == "" || $gender == "" || $dob == ""
    ) {
        echo "All fields are required!<br>";
        $valid = false;
    }

    for($i=0; $i<strlen($name); $i++) {
        $ch = $name[$i];

        if (!($ch >= 'a' && $ch <= 'z') && !($ch >= 'A' && $ch <= 'Z') && $ch != ' ') {
            echo "Name can only contain letters and spaces.<br>";
            $valid = false;
            break;
        }
    }

    if(strlen($name)<2) {
        echo "Name must be at least 2 characters long.<br>";
        $valid = false;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format!<br>";
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

    if ($password != $confirm_password) {
        echo "Password and confirm password do not match!<br>";
        $valid = false;
    }

    if ($gender!="male" && $gender!="female" && $gender!="other") {
        echo "Invalid gender selection.<br>";
        $valid = false;
    }


    if ($valid) {
        echo "Registration successful!";
    }










}
?>
