<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilos/style.css">
    <title>Formulários retroalimentados</title>
</head>
<body>
    <?php 
    //Capturando os dados do formulário retroalimentado
    $valor1 = $_GET['v1'] ?? 0;
    $valor2 = $_GET['v2'] ?? 0;

    
    
    ?>
    <main>
        <h1>Somador de Valores</h1>
    <!--nÃO É RECOMENDADO COLOCAR O PRÓPRIO ARQUIVO NO ACTION-->
    <!--short tag-->
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1 ?>">

            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2 ?>">

            <input type="submit">
        </form>
    </main>
    <section id="Resultado">
        <h2>Resultado da Soma</h2>
        <?php 
        $resultado = $valor1 + $valor2;
        echo "<p>a soma entre os $valor1 e $valor2 é <strong>igual a $resultado</strong> </p>";
        ?>
    </section>
</body>
</html>