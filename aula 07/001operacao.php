<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Unários</title>
</head>
<body>
    <h1>Operadores Unários</h1>
    <?php
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $tipo = $_GET["op"];
    echo "Os valores passados foram $n1 e $n2 <br/>";
    $r = ($tipo == "s")?$n1+$n2:$n1*$n2;
    echo "O resultado sera $r";
    /*.php?a=5&b=3&op=s*/
    ?>
</body>
</html>