<?php

$host = "localhost";
$usuario = "root"; 
$senha = "";
$banco = "cadastro";

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$sql = "INSERT INTO pessoas (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";

if ($conn->query($sql) === TRUE) {
    echo "<h3>✔ Dados inseridos com sucesso!</h3>";
    echo "<a href='index.php'>Voltar</a>";
} else {
    echo "<h3 style='color:red'>Erro ao inserir: " . $conn->error . "</h3>";
}

$conn->close();
?>
