<?php
session_start();
if (isset($_POST['submit'])) {
    $id         = $_REQUEST['id'];
    $username   = $_REQUEST['username'];
    $email      = $_REQUEST['email'];

    if ($id == "" || $username == "" || $email == "") {
        echo "null id/username/email!";
        exit();
    }

    $users = $_SESSION['users'];

    $newId = 1;
    if (!empty($users)) {
        $lastUser = end($users);
        $newId = $lastUser['id'] + 1;
    }


    $newUser = ['id' => $newId, 'username' => $username, 'email' => $email];
    $users[] = $newUser;

    $_SESSION['users'] = $users;

    header('location: ../view/user_list.php');
} else {
    echo "invalid request! please submit form...";
}
