<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritméticas do PHP</title>
</head>
<body>
    <?php 
    $r = abs(-2000); //retorna o valor absoluto (sem o sinal)
    print("a resposta é $r");
    $b =base_convert(254,10,8);// conversor de base. converte 254 da a base 10 para a octal tem na calculadora do windows
    $b1 =base_convert(254,10,16); //hexadecimal
    $b2 =base_convert(254,10,2); //para binário
    $b3 =base_convert(1011,2,10); // de binário para base 10
    $b4 =base_convert(1011,2,16); // de binario apra base 16
    echo '<hr>';
    print("Reposta = $b");
    echo '<hr>';
    print("Reposta = $b1");
    echo '<hr>';
    print("Reposta = $b2");
    echo '<hr>';
    print("Reposta = $b3");
    echo '<hr>';
    print("Reposta = $b4");
    

    //ceil() arredonda para cima - teto
    //floor() arredonda para baixo - chão
    //round() arredondamento aritmético 

    //hypot() - calcula hipotenusa

    //intdiv() - faz a divisão inteira
    echo '<hr>';
    $div = 5%2;
    $div2 =intdiv(5,2);
    echo ("Resposta = $div");
    echo '<hr>';
    echo ("Resposta = $div2");

    //min()
    //max()
    $m =min(3,6,9);
    $m2 = max(6,5,8);
    echo '<hr>';
    echo ("Resposta = $m");
    echo '<hr>';
    echo ("Resposta = $m2");

    //pi()
    $pi =pi();
    $constantePI = M_PI;
    echo '<hr>';
    echo ("Resposta = $pi");
    echo '<hr>';
    echo ("Resposta = $constantePI");

    //pow()-função para criar potencia
    //quando utiliza a função pow em vez operador de potencia perde a ordem de precedência
    $po =pow(2,3);
  
    echo '<hr>';
    echo ("Resposta = $po");

    //Funções trigonométricas 
    //sin(), cos(), tan()
    //sqrt() - raiz quadrada
    //da para fazer por equação tbm
    //ex:
    $raiz =84 **(1/2);
  
    echo '<hr>';
    echo ("Resposta = $raiz");
    $raiz2 =sqrt(84);
  
    echo '<hr>';
    echo ("Resposta = $raiz2");

    $raizCubica =27**(1/3);
  
    echo '<hr>';
    echo ("Resposta = $raizCubica");
    ?>
</body>
</html>