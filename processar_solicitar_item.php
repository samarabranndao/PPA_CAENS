<?php

$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$quantidade = $_POST['quantidade'];
$justificativa = $_POST['justificativa'];

$conn = new PDO('mysql:host=127.0.0.1;dbname=ppa', 'root', 'root');

$sql = "INSERT INTO solicitacao_item (nome, tipo, quantidade, justificativa) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $tipo);
$stmt->bindParam(3, $quantidade);
$stmt->bindParam(4, $justificativa);

$stmt->execute();

header('Location: index-coord.html');
