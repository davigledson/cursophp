<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 005 - Numero Real</title>
    <link rel="stylesheet" href="../../Estilos/style.css">
</head>
<body>
    <header>
        <h1>Desafio 005 - Numero Real</h1>
    </header>
    <main>
        <?php 
        $numero = $_GET['numero'] ?? 0;
       // $numNormal =number_format($numero,3,',','.');
        
       // $numFracionalPosicao =strpos($numNormal,',');

        //$numInteiro=mb_strcut($numNormal,0,$numFracionalPosicao);
        
       // $numFracional=mb_strcut($numNormal,$numFracionalPosicao+1);
        
          //forma melhor de fazer
          
          $int = (int) $numero; //vai pega a parte inteira de numero
        $fla = $numero - $int; //parte normal sem parte inteira

            echo "Analisando o numero <strong>".number_format($numero,3,",",".") ."</strong>";
            echo "<ul> <li>A parte inteira é <strong>". number_format($int, 0,",",".") ."</strong></li>";
            echo " <li>A parte fracionaria é <strong>". number_format($fla, 3,",",".") ."</strong></li></ul>";
        
        
        ?>
        <button onclick="javascript:history.go(-1)">Voltar </button>
    </main>
</body>
</html>