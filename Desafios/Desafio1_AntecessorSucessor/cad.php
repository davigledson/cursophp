<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Estilos/style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado </h1>
    </header>
    <main>
        <?php 
        $numero = null;
        $numero = $_GET['numero'] ?? "Não há nenhum numero";

        if($numero ==null or is_numeric($numero) == false){
            $numero = 0;
        };
        $ant= $numero -1 ;
        $sus = $numero +1 ;
        
     
        echo"<p> O numero escolhido foi: <strong> $numero </strong> </p>";
        echo "<p> O seu Sucessor é: <strong> $sus </strong> </p>";

        echo "<p>O seu Antecessor é: <strong>$ant</strong></p>";
        ?>

        <p><a href="javascript:history.go(-1)">Voltar para pagina anterior</a></p>
    </main>

</body>
</html>