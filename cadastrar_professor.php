<?php

$conn = new PDO('mysql:host=127.0.0.1;dbname=ppa', 'root', 'root');

$sql = "INSERT INTO professor_funcionario (nome, registro_ciap, email, cargo, senha) VALUES (?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bindParam(1, $_POST['nome']);
$stmt->bindParam(2, $_POST['registro_ciap']);
$stmt->bindParam(3, $_POST['email']);
$stmt->bindParam(4, $_POST['cargo']);
$stmt->bindParam(5, $_POST['senha']);

$stmt->execute();

header('Location: index-coord.html');
