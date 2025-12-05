<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 7</title>
</head>
<body>
    <p>Digite um número para gerar a sua tabuada:</p>

    <form method="POST">
        <label for="num">Número: </label>
        <input type="number" name="num" id="num" required>
        <button type="submit">Gerar Tabuada</button>
    </form>

    <?php
        if (isset($_POST['num'])) {
            $n = $_POST['num'];
            echo "<h2>A tabuada de $n:</h2>";
            echo "<table border='1' cellpadding='5' cellspacing='0'>";
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr><td>$n x $i</td><td>= " . ($n * $i) . "</td></tr>";
            }
            echo "</table>";
        }
    ?>
</body>
</html>