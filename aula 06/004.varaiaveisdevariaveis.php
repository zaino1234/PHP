<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis de Variáveis </title>
</head>
<body>
    <h1>Variáveis de Variáveis</h1>
    <?php
    $x = "abc";
    $$x = "def";
    echo "O conteúdo da variável X é $x";
    echo "<br/>A variável criada recebeu o valor $$abc";
    ?>
</body>
</html>