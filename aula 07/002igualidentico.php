<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Igual e Identico</title>
</head>
<body>
    <h1>
        <?php
        $a = 3;
        $b = "3";
        echo "A= ".$a." B= ".$b;
        $r = ($a == $b)?"SIM":"NÃO";
        echo "<br/>A variáveis A e B são iguais? ".$r;
        $t = ($a === $b)?"SIM":"NÃO";  
        echo "<br/>A variáveis A e B identicas? ".$t;
        ?>
    </h1>
</body>
</html>