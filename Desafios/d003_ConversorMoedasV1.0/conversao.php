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
        <h1>Conversor de Moedas básico </h1>
    </header>
    <main>
        <?php 
        
        $reaisInoformados =$_REQUEST['dinheiro'] ?? 0;
        $dolar = $reaisInoformados / 5.17;
       // echo "<p>seus <strong>R$ $reais</strong> equivale a <strong>US$ $resultado</strong> </p>";

    //Formatação de moedas com internalização internacional
    //Usando a biblioteca Internalization PHP (intl)
    //necessário ativar no php.ini
    $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);

    echo "<p>Seus " . numfmt_format_currency($padrao, $reaisInoformados, "BRL") . " equivale a <strong>" . numfmt_format_currency($padrao,$dolar,"USD")."</strong></p> ";


        ?>

        <button onclick="javascript:history.go(-1)">Voltar </button>
    </main>

</body>
</html>