<?php

if (isset($_POST['submit'])) {
    include('dbconnect.php');
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat-password'];

    if(empty($username) || empty($email) || empty($password) || empty($repeat_password)) {
        header("location:  ../register.php?error=emptyfields&uid=".$username."&email=".$email);
        exit();
    }
    
    elseif (!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)) {
        header("location:  ../register.php?error=invalidemail&uid");
        exit();
    }

    elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        header("location:  ../register.php?error=invalidemail&uid=".$username);
        exit();
    }

    elseif (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
        header("location:  ../register.php?error=invaliduid&email=".$email);
        exit();
    }

    elseif ($password !== $repeat_password) {
        
        header("location:  ../register.php?error=passwordcheck&uid=".$username."&email=".$email);
        exit();
    }

    else  {
        
        $sql = "SELECT user_name , user_email  FROM rezayari_users WHERE user_name=? OR user_email=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$username , $email]);
        $result = $stmt->fetchAll();

        
        if (sizeof($result) > 0) {
            header("location:../register.php?error=useroremailtaken");
            exit();
        }
        
        else {
            $hashpwd = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO rezayari_users (user_name,user_email,user_password) VALUES (?,?,?)" ;
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$username , $email , $hashpwd]);
            header("location:../index.php?message=success_register");
            exit();
            

        }

        }









}else {
    header("location:../register.php?error=submit_error");
    exit();
}


