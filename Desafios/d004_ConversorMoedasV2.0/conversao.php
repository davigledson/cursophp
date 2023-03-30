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
        <h1>Conversor de Moeda Avançado </h1>
    </header>
    <main>
        <?php 
        // Cotação vinda da API do banco central


        $inicio = date("m-d-Y", strtotime(' -7 days'));//strtotime() - para voltar dias
        $fim = date("m-d-Y");
        $url ='https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao'; //importante usa aspas simples, por causa das variáveis e usar contra barra (caractere de  escape) para dar certo
       
        //código para pegar a cotação atualizada do banco central
        
        //url pega em  ->  https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/aplicacao#!/recursos/CotacaoDolarPeriodo#eyJmb3JtdWxhcmlvIjp7IiRmb3JtYXQiOiJqc29uIiwiJHRvcCI6MSwiZGF0YUZpbmFsQ290YWNhbyI6IjAzLTMwLTIwMjMiLCJkYXRhSW5pY2lhbCI6IjAzLTIzLTIwMjMiLCIkb3JkZXJieSI6IgQyBCBkZXNjIn0sInByb3ByaWVkYWRlcyI6WzAsMl19
        $dados = json_decode(file_get_contents($url),true); // colocando dentro de um array
       // var_dump($dados);

        $reaisCarteira = $_GET['dinheiro'];
        $cotacao = $dados["value"][0]["cotacaoCompra"];

        

        $dolar = $reaisCarteira / $cotacao;

       $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY); // padrão brasileiro de exibição

       
    echo '<h3>Conversor de Moeda Avançado</h3>';
    echo "a cotação em tempo real e de <strong> US$ " . number_format($cotacao,2)  . " </strong>";
    echo "<p>Seus " . numfmt_format_currency($padrao, $reaisCarteira, "BRL") . " equivale a <strong>" . numfmt_format_currency($padrao, $dolar,"USD")."</strong></p> ";
    echo '<p>Cotação obtida diretamente do site do Banco do Brasil</p>'

        ?>

        <button onclick="javascript:history.go(-1)">Voltar </button>
    </main>

</body>
</html>