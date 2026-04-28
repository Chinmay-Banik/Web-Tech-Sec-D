<?php
session_start();
$users = $_SESSION['users'];
$id = $_GET['id'];

$user = [];

foreach ($users as $u) {
    if ($u['id'] == $id) {
        $user = $u;
        break;
    }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Delete User</title>
</head>

<body>

    <h1>Delete User </h1>
    <a href='user_list.php'>Back </a> |
    <a href='../controller/logout.php'>logout</a>
    <br>

    <form method="post" action="../controller/deleteCheck.php">
        Id: <input type="text" name="id" readonly value="<?= $user['id'] ?>" /> <br>
        username: <input type="text" name="username" readonly value="<?= $user['username'] ?>" /> <br>
        Email: <input type="email" name="email" readonly value="<?= $user['email'] ?>" /> <br>
        Are you sure you want to delete this user? 
        <input type="submit" name="yes" value="Yes">
        <input type="submit" name="no" value="No">

    </form>
</body>

</html>