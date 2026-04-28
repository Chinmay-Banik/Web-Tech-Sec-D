<?php
session_start();

if (isset($_POST['yes'])) {
    $id = $_REQUEST['id'];
    $users = $_SESSION['users'];
    for ($i = 0; $i < count($users); $i++) {
        if ($users[$i]['id'] == $id) {
            array_splice($users, $i, 1);
            break;
        }
    }
    $_SESSION['users'] = $users;
    header('location: ../view/user_list.php');
} else if (isset($_POST['no'])) {
    header('location: ../view/user_list.php');
} else {
    echo "invalid request! please submit form...";
}
