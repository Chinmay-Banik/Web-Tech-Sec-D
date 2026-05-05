<?php
    //include_once('dba.php');
    require_once('db.php');


    function login($user){
        $con = getConnection();
        $sql = "select * from users where username='{$user['username']}' and password='{$user['password']}'";
        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) == 1){
            return true;
        }else{
            return false;
        }
    }

    function addUser($user){
        $con = getConnection();
        $sql = "insert into users values('{$user['username']}','{$user['password']}','{$user['email']}')";
        $result = mysqli_query($con, $sql);
        if($result){
            return true;
        }else{
            return false;
        }
 
    }

    function deleteUser($id){

    }

    function updateUser($user){

    }

    function getAllUser(){

    }

?>