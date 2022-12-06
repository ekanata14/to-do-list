<?php

require_once('db/connect.php');

$id = $_POST['id'];
$todo = $_POST['todo'];

$sql = "UPDATE todo SET todo = '$todo' WHERE id = '$id'";

try{
    $conn;
    $conSet;
    $conn->exec($sql);
    header("Location: ../pages/home.php");
} catch(PDOException $e){
    echo $e;
}