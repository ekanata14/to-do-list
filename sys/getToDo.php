<?php

require_once('db/connect.php');

$stmt = $conn->prepare("SELECT * FROM todo");
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$todos = $stmt->fetchAll();