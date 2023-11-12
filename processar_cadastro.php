<?php

$nome = $_POST['usuario'];
$registro_ciap = $_POST['registro_ciap'];
$email = $_POST['email'];
$cargo = $_POST['cargo'];
$senha = $_POST['senha'];


$conn = new PDO('mysql:host=127.0.0.1;dbname=ppa', 'root', 'root');

$sql = "INSERT INTO professor_funcionario (nome, registro_ciap, email, cargo, senha) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $registro_ciap);
$stmt->bindParam(3, $email);
$stmt->bindParam(4, $cargo);
$stmt->bindParam(5, $senha);

$stmt->execute();

$conn = null;

header('Location: index-inicio.php');
