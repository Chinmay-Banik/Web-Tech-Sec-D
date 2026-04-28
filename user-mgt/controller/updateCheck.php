<?php
session_start();
if (isset($_POST['submit'])) {
    $id         = $_REQUEST['id'];
    $username   = $_REQUEST['username'];
    $email      = $_REQUEST['email'];

    if ($username == "" || $email == "") {
        echo "null username/email!";
        exit();
    }

    $users = $_SESSION['users'];

    for ($i = 0; $i < count($users); $i++) {
        if ($users[$i]['id'] == $id) {
            $users[$i]['username'] = $username;
            $users[$i]['email'] = $email;
            break;
        }
    }

    $_SESSION['users'] = $users;

    header('location: ../view/user_list.php');
} else {
    echo "invalid request! please submit form...";
}

?>

