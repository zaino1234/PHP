<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tags PHP</title>
</head>
<body>
    <h1>Abrindo e fechando tags PHP</h1> 
    <h2>Exemplo 01</h2>
    <?php 
    // é usando para fazer comentários em arquivos html
    echo "Se você deseja rodar código PHP dentro de documentoss XHTML OU XML    utilize essas tags";
    ?>  
    <h2>Exemplo 02</h2>
    <p>
        Você pode utilizar a tag curta <?= "imprimir essa string" ?>.
        <br>É o equivalente de <?php echo 'print this string' ?>.
    </p>
    <h2>Exemplo 03</h2>
    <? echo 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
    ?>
</body>
</html>
