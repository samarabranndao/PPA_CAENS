<?php

$nomeItem = $_POST['nome'];
$quantidade = $_POST['quantidade'];
$tipo = $_POST['tipo'];

$conn = new PDO('mysql:host=127.0.0.1;dbname=ppa', 'root', 'root');

$sql = "INSERT INTO item (nome, quantidade, tipo) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(1, $nomeItem);
$stmt->bindParam(2, $quantidade);
$stmt->bindParam(3, $tipo);
$stmt->execute();

header('Location: index-item.html');

?>
