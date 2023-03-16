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
        <h1>Conversor de moeda v1.0 </h1>
    </header>
    <main>
        <?php 
        
        $reais =$_GET['dinheiro'] ?? 'Não há nada';
        $dolas ='';
        $real =5.29;
        $dolar = 1;
        
        $resultado= number_format( $reais / $real,2);
        
        echo "<strong>Cotação fixa de R$ </strong> informada diretamente no código";
        echo "<p>seus <strong>R$ $reais</strong> equivale a <strong>US$ $resultado</strong> </p>";

        ?>

        <p><a href="javascript:history.go(-1)">Voltar para pagina anterior</a></p>
    </main>

</body>
</html>