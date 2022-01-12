<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <h1>Operações Artiméticas</h1>
    <h3>Adição(+) / Subtração (-) / Multiplicação (*) / Divisão (/) / Módulo(%)</h3>
    <?php
        $n1 = 5;
        $n2 = 2;
        $s = $n1 + $n2;
        echo "A soma $n1 com $n2 é igual= $s";
        echo "<br/>Adição(+): " .($n1 + $n2);
        echo "<br/>Subtração(-): " .($n1 - $n2);
        echo "<br/>Multiplicação(*): ".($n1 * $n2); 
        echo "<br/>Módulo(%): ".($n1 % $n2); 
    ?>
    <h3>Ordem de precedência </h3>
    <?php 
        $n1 = 5;
        $n2 = 2;
        $s = ($n1 + $n2)/2;
        echo "A média é: $s";
    ?>
</body>
</html>