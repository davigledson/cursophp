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
        $numero = $_GET['numero'];
        $numNormal =number_format($numero,3,',','.');
        
        $numFracionalPosicao =strpos($numNormal,',');

        $numInteiro=mb_strcut($numNormal,0,$numFracionalPosicao);
        
            $numFracional=mb_strcut($numNormal,$numFracionalPosicao+1);
        
            
        
        echo "<p>$numNormal</p>";
        echo "<p>A parte inteira é <strong>$numInteiro</strong></p>";
        echo "<p>A parte fracionaria é <strong>$numFracional</strong></p>";
        
        
        ?>
    </main>
</body>
</html>