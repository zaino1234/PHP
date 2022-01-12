<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuições</title>
</head>
<body>
<h1>Operadores de Atribuições</h1>
<!--Basicamente é a mesma coisa dos OPERADORES MAT..-->
<!--O que temos é uma simplificação quando aparece + de um vez o mesmo elemento-->
<h2>Adição/Subtração/Multiplicação/Divisão/Módulo/ Contatenação(.)</h2>
<?php
$n1 = 2;
$n2 = 8;
echo "Forma tradicional ".($n1 = $n1 + $n2);
$n3 = 4;
$n4 = 16;
echo "<br/>n3= ". $n3;
echo "<br/>n4= ". $n4;
echo "<br/><br/>(+)Com atribuição ".$n3 +=$n4;
// equivale a $n3 = $n3 + $n4
echo "<br/>(-)Com atribuição ".$n3 -=$n4;
// equivale a $n3 = $n3 - $n4
echo "<br/>(*)Com atribuição $ n3 *= $ n4= ".$n3 *= $n4;
echo "<br/>(*)Com atribuição $ n3 .= $ n4"
?>
</body>
</html>