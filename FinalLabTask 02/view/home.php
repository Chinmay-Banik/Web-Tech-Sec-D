<?php
session_start();

if(!isset($_SESSION['username'])){
    header('location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
</head>
<body>
    <h1>Welcome Home! <?php echo $_SESSION['username']; ?> </h1>

    <a href='user_list.php'>User List</a> |
    <a href='../controller/logout.php'>Logout</a> 
</body>
</html>