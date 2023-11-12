<?php


$conn = new PDO('mysql:host=127.0.0.1;dbname=ppa', 'root', 'root');

$sql = "SELECT * FROM item";

$stmt = $conn->prepare($sql);

$stmt->execute();

$itens = $stmt->fetchAll();

header('Content-Type: application/json; charset=utf-8');

echo json_encode($itens);
