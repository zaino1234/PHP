<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 001</title>
</head> 
<body>
    <h1 style="color: blue">
        <?php
        $valor = 500;
        echo "O preço do produto atualmente é R$ ".number_format($valor, 2) .", com 10% de desconto fica R$ ".number_format($valor -= ($valor*0.1), 2);
        ?>
    </h1>
</body>
</html>