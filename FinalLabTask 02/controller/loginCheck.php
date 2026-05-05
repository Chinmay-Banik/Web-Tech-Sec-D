<?php
session_start();
require_once('../model/userModel.php');

$user = json_decode($_POST['user'], true);

$username = $user['username'];
$password = $user['password'];

if($username == "" || $password == ""){
    echo json_encode([
        "status" => false,
        "message" => "Null username/password"
    ]);
    exit();
}

$data = ['username'=>$username, 'password'=>$password];
$status = login($data);

if($status){
    $_SESSION['username'] = $username;

    echo json_encode([
        "status" => true,
        "message" => "Login successful"
    ]);
}else{
    echo json_encode([
        "status" => false,
        "message" => "Invalid user"
    ]);
}
?>