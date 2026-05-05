<?php
    session_start();
    require_once('../model/userModel.php');
   
    $user = json_decode($_POST['user'], true);

    $username = $user['username'];
    $password = $user['password'];
    $email = $user['email'];

    if($username == "" || $password == "" || $email == ""){
        echo json_encode([
            "status" => false,
            "message" => "Null username/password/email"
        ]);
        exit();
    }

    $data = ['username'=>$username, 'password'=>$password, 'email'=>$email];
    $status = addUser($data);

    if($status){
        echo json_encode([
            "status" => true,
            "message" => "Signup successful"
        ]);
    }else{
        echo json_encode([
            "status" => false,
            "message" => "Signup failed"
        ]);
    }

    
?>