 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Referenciando variáveis &</title>
 </head>
 <body>
     <h1>Referenciando Variáveis &</h1>
     <h2>
    <?php
    $a = 3;
    $b = &$a;
    $b += 5;
    echo "A variavel A vale $a";
    echo "<br/>A variavel B vale $b";
    ?>
 </body>
 </html>