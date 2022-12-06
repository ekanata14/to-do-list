<?php

require_once('db/connect.php');

$id = $_POST['id'];

$sql = "DELETE FROM todo WHERE id = $id";

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