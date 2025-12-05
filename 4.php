<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
            function randomize() {
            $valor = rand(1, 100);
            echo $valor;
        }
    ?>

    <h1>Valor aleatório:</h1>
    <p><?php randomize(); ?></p>
</body>
</html>