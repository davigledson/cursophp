<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Estilos/style.css">
    <title>Desafio PHP</title>
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <main>
        <?php 
       
        $numero = $_REQUEST["numero"];
        if($numero ==null){
            $numero=0;
        }
        
        $ant= $numero -1 ;
        $sus = $numero +1 ;
        
     
        echo"<p> O numero escolhido foi: <strong> $numero </strong> </p>";
        echo "<p> O seu Sucessor é: <strong> $sus </strong> </p>";

        echo "<p>O seu Antecessor é: <strong>$ant</strong></p>";
        ?>

        <button onclick="javascript:window.location.href ='index.html'">&#x2B05; Voltar</button>
    </main>

</body>
</html>