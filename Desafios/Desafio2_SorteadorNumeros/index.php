<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Estilos/style.css">
    <title>Sorteador de números</title>
</head>
<body>
    <header>
    <h1>Trabalhando com números aleatórios</h1>
    </header>
    <main>
        
        <?php 
       
       $resultado = random_int(1,100);
       echo "<p>Gerando um número aleatório entre 0 e 100...</p>";
        echo "<p>O valor gerado foi<strong>  $resultado</strong></p>";
        echo "";
        ?>
    <button ><a href="index.php">Gera Numero</a></button>
        
    </main>

</body>
</html>