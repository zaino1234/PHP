<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Lógicos</title>
</head>
<body>
    <h1>Eleições</h1>
    <?php
    $nascimento = $_GET["an"];
    $idade = 2022 - $nascimento;
    echo "Quem nasceu em $nascimento tem $idade anos.";
    /*"||" "or" "ou"*/
    /*"xor" "xe"*/
    /*"&&" "and" "e"*/
    $tipo = ($idade>= 18 && $idade<= 64)?"OBRIGATÓRIO":"NÃO OBRIGATÓRIO";
    echo "<br/>Portanto o voto é $tipo!";
    ?>
</body>
</html>
