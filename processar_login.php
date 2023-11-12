<?php
$nome = $_POST['nome'];
$senha = $_POST['senha'];

$conn = new PDO('mysql:host=127.0.0.1;dbname=ppa', 'root', 'root');

$sql = "SELECT * FROM professor_funcionario WHERE nome = ? AND senha = ?";
$stmt = $conn->prepare($sql);
$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $senha);

$stmt->execute();

$usuario = $stmt->fetch();
if ($usuario === false) {
    echo "Usuário ou senha inválidos";
    header('Location: index-login.html');
    exit;
    return;
}
else {
    echo "Usuário logado com sucesso";
    $_SESSION['usuario'] = $usuario;
    header('Location: index-coord.html');
}	





