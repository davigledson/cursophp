<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressões Aritméticas com PHP </title>
</head>
<body>
    <?php //lembrar da Ordem de precedência
    
    
    $resp = 5+2/2; //RESP = 6 
    echo $resp;
    echo '<hr>';
    $resp2 = 50 / (2 + 3) ** 2; //RESP = 2
    echo $resp2;
    /*
    Ordem de Precedência

    "( )"

    "**"

    " * " , " / " , " % " 

   " + ", " - "
    
    */
    
    ?>
</body>
</html>