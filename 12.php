<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 12</title>
</head>
<body>

    <h1>Analisador de Números</h1>

    <form method="POST">
        <label for="nums">Digite os números:</label><br>
        <input 
            type="text" 
            name="nums" 
            id="nums" 
            placeholder="ex: 5,10,25,2,99" 
            required
        >
        <br><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
        if (!empty($_POST['nums'])) {

            
            $entrada = trim($_POST['nums']);
            $numeros = array_map('intval', explode(",", $entrada));

            echo "<h2>Resultados:</h2>";

            echo "<p><strong>Números informados:</strong><br>";
            echo implode(", ", $numeros) . "</p>";

           
            $soma  = array_sum($numeros);
            $maior = max($numeros);
            $menor = min($numeros);

            echo "<p><strong>Soma:</strong> $soma</p>";
            echo "<p><strong>Maior número:</strong> $maior</p>";
            echo "<p><strong>Menor número:</strong> $menor</p>";
        }
    ?>

</body>
</html>
