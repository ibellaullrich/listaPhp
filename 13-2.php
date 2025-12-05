<?php
session_start();

if (empty($_SESSION['logado'])) {
    header("Location: exercicio13.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página Principal</title>
</head>
<body>

<h2>Você está logado!</h2>

<form method="POST" action="logout.php">
    <button type="submit">Sair</button>
</form>

</body>
</html>
