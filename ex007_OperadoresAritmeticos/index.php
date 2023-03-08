<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos do PHP </title>
</head>
<body>
    <?php 
    //Operadores Aritméticos
    // "+" = Operador aritmético de adição 
    // "-" = Operador aritmético de subtração
    // "*" = Operador aritmético de multiplicação
    // "/" = Operador aritmético de divisão real
    // "%" = Operador aritmético de modulo (resto) da divisão inteira 
    // "**" = Operador aritmético de potencia (exponenciação) - só funciona a parti da versão 5.6
    
    

    
    $n = "2" + "2"; 

    
    $n1 = "2" . "2";
    // "." = Operador de concatenação

    //$n2 = "2 davi" + "2 davi"; resultado = erro - obs - na versão 7 do PHP, se o numero vier antes de uma string, poderia soma que iria dar certo

    echo $n; // Resultado = 4, porque o operador "+" e de adição, o de concatenação e o "."
    echo "\n";

    echo $n1; // Exemplo = Resultado = 22
    echo "\n";
    
    var_dump($n);
    echo "\n";
    var_dump($n1) //Resultado =  string de duas posições 22
    ?>
</body>
</html>