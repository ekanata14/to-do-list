<?php

require_once('db/connect.php');

$todo = $_POST['todo'];

$sql = "INSERT INTO todo(todo) VALUES('$todo')";

try{
    $conn;
    $conSet;
    $conn->exec($sql);
    header("Location: ../pages/home.php");
} catch(PDOException $e){
    echo $e;
    header("Location: ../pages/home.php");
}

$conn = null;