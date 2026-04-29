<?php
session_start();
$users = $_SESSION['users'];

$newId = 1;
if (!empty($users)) {
    $lastUser = end($users);
    $newId = $lastUser['id'] + 1;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add User</title>
</head>

<body>

    <h1>Add User </h1>
    <a href='user_list.php'>Back </a> |
    <a href='../controller/logout.php'>logout</a>
    <br>

    <form method="post" action="../controller/addCheck.php">
        Id: <input type="text" name="id" readonly value="<?php $newId; ?>" /> <br>
        username: <input type="text" name="username" value="username" /> <br>
        Email: <input type="email" name="email" value="email" /> <br>
        <input type="submit" name="submit" value="Add User" />

    </form>
</body>

</html>