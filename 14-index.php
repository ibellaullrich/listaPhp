<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro no Banco</title>
</head>
<body>

<h2>Cadastro de Usuário</h2>

<form action="salvar.php" method="POST">
    <label>Nome:</label><br>
    <input type="text" name="nome" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Telefone:</label><br>
    <input type="text" name="telefone" required><br><br>

    <button type="submit">Salvar</button>
</form>

</body>
</html>
