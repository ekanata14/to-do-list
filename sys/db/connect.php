<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "to_do_list";


$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conSet = $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try{
    $conn;
    $conSet;
} catch(PDOException $e){
    echo "Connection Failed: " . $e->getMessage();
}