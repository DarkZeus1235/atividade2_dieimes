<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade2</title>
</head>
<body>
    <?php
    $valor = $_GET['number'];
    $valor = 2;
    $valor1 = 15;
    if($valor1 % 2 == 0)
    echo "$valor é ímpar";

    else
    echo "$valor é par";
    echo("</br>");
    if($valor % 2 == 1)
    echo "$valor1 é par";

    else
    echo "$valor1 é ímpar";
    ?>
</body>
</html>