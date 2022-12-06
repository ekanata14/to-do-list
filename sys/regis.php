<?php

require_once('db/connect.php');

$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

$sql = "INSERT INTO users(username, email, pass) VALUES ('$username', '$email', '$pass')";

try{
    $conn;
    $conSet;
    $conn->exec($sql);
    header("Location: ../index.php");
} catch(PDOException $e){
    header("Location: ../pages/regisPage.php");
}

$conn = null;
