<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/cursophp/Estilos/style.css">
    <title>Sorteador de números</title>
    <!--CTRL + F5 para atualizar os arquivos no php-->
</head>
<body>
   
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <?php 
       
       $resultado = random_int(1,100);
       //random_int() gera números aleatórios criptograficamente seguros. o problema e que e o algoritmo mais lento de todos.
       $resultado1 = rand(1,100); //função mais antiga que usa uma algorítimo de 1951 chamado linear Congrential Gererator- lenta
       $resultado2 =mt_rand(1,100);
       //mt_rand() = algoritmo de 1997 chamado Mersenne Twister 4x mais rápido que o (linear Congrential Gererator) - mais moderno e mais confiável

       //o mt_rand não aceita que o primeiro valor ultrapasse o o segundo, o rand aceita

       //A partir do PHP 7.1, rand() é um simples apontamento para mt_rand()
       echo "<p>Gerando um número aleatório entre 0 e 100...</p>";
        echo "<p>O valor gerado foi<strong>  $resultado </strong> = <strong>função random_int()</strong></p>";
        echo "<p>O valor gerado foi<strong>  $resultado1 </strong> = <strong>função rand()</strong></p>";
        echo "<p>O valor gerado foi<strong>  $resultado2 </strong> = <strong>função mt_rand()</strong></p>";
        ?>
    <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
        
    </main>

</body>
</html>