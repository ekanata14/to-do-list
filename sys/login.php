<?php

require_once('db/connect.php');

$username = $_POST['username'];
$pass = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM users WHERE username = '$username' AND pass = '$pass'");
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$rowCount = $stmt->rowCount();
$user = $stmt->fetch();


try{
    if($rowCount){
        session_start();
        $_SESSION["user"] = [
            'username' => $user['username'],
            'email' => $user['email'],
            'password' => $user['pass']
        ];
        unset($_POST);
        
        header("Location: ../pages/home.php");
    } else{
        header("Location: ../index.php");
    }
} catch(PDOException $e){
    echo $e;
}



