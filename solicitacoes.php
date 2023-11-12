<?php

$conn = new PDO('mysql:host=127.0.0.1;dbname=ppa', 'root', 'root');

$sql = "SELECT * FROM solicitacao_item";

$stmt = $conn->prepare($sql);

$stmt->execute();

$solicitacoes = $stmt->fetchAll();

$json = json_encode($solicitacoes);

header('Content-Type: application/json; charset=utf-8');
echo $json;
?>