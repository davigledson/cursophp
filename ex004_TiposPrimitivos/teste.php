<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos do PHP</title>
</head>
<body>
    <h1>Teste de Tipos primitivos</h1>
    <?php 
    // 0x = hexadecimal 0b = binário 0 = Octal
    $num = 0x1A;
    echo "O valor da variável é $num "; //26
    

    $num2 = 0b1011;
    echo "O valor da variável é $num2 "; //10

    $num3 = 010;
    echo "O valor da variável é $num3 "; //8

    $v = 300;
    var_dump($v); // mostra o valor e o tipo primitivo
    $v1 = 45.2;
    var_dump($v1);

    $v2 = true;
    var_dump($v2);

    $v3 = "Gustavo";
    var_dump($v3);

    $v4 = 3e2; // 3 x 10²
    var_dump($v4);

    $v5 = (integer) 3e2; // coerção - dar para força a a barra
    var_dump($v5);

    $v6 = (int) "950"; 
    var_dump($v6);

    $v7 = (float) "950"; 
    var_dump($v7);

    $v8 = (double) "950"; // não mostra
    var_dump($v8);

    $casado = false;
    var_dump($casado);
    echo "O valor para casado é $casado"; // valor false = vazio

    $casado = true;
    var_dump($casado);
    echo "O valor para casado é $casado"// valor true = mostra 1
    ?>
   
</body>
</html>