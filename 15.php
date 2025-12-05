<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "cadastro";


$conn = new mysqli($host, $user, $pass, $db);


if ($conn->connect_error) {
    die("Erro ao conectar: " . $conn->connect_error);
}


$sql = "SELECT * FROM pessoas";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuários</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
        }
        th, td {
            border: 1px solid #444;
            padding: 8px;
        }
        th {
            background: #ddd;
        }
    </style>
</head>
<body>

<h1>Lista de Pessoas Cadastradas</h1>

<?php
if ($result->num_rows > 0) {

    echo "<table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
            </tr>";

    while ($linha = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$linha['id']."</td>
                <td>".$linha['nome']."</td>
                <td>".$linha['email']."</td>
                <td>".$linha['telefone']."</td>
              </tr>";
    }

    echo "</table>";

} else {
    echo "<p>Nenhum registro encontrado.</p>";
}

$conn->close();
?>

</body>
</html>
