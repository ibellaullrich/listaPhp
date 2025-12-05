<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11</title>
</head>
<body>

    <h1>Verificador de Triângulo</h1>

    <form method="POST">
        <label for="a">Lado A:</label>
        <input type="number" name="a" id="a" required><br><br>

        <label for="b">Lado B:</label>
        <input type="number" name="b" id="b" required><br><br>

        <label for="c">Lado C:</label>
        <input type="number" name="c" id="c" required><br><br>

        <button type="submit">Verificar</button>
    </form>

    <?php
        if (!empty($_POST['a']) && !empty($_POST['b']) && !empty($_POST['c'])) {

            $a = floatval($_POST['a']);
            $b = floatval($_POST['b']);
            $c = floatval($_POST['c']);

            echo "<h2>Resultado:</h2>";

            
            if ($a < $b + $c && $b < $a + $c && $c < $a + $b) {

                if ($a == $b && $b == $c) {
                    echo "Triângulo Equilátero";
                } elseif ($a == $b || $a == $c || $b == $c) {
                    echo "Triângulo Isósceles";
                } else {
                    echo "Triângulo Escaleno";
                }

            } else {
                echo "Os valores informados <strong>não formam</strong> um triângulo.";
            }
        }
    ?>

</body>
</html>
