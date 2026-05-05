<?php
    session_start();
    unset($_SESSION['username']);
    //session_destroy();
    setcookie('status', true, time()-10, '/');
    header('location: ../view/login.php');
?>