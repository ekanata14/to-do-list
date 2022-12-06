<?php

require_once('db/connect.php');

$id = $_POST['id'];

$sql = "SELECT * FROM todo WHERE id = $id";

try{
    $conn;
    $conSet;
    $conn->exec($sql);
} catch(PDOException $e){
    echo $e;
}

$conn = null;