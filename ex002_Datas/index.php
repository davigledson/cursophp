<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php 
    date_default_timezone_set("America/Sao_Paulo"); //Mudando a timezone padrão do PHP. GMT-3 - Timezone do brasil. 
    echo "Hoje é dia " . date("d/M/Y"); //Minusculo e maiúsculo altera o formato da data
    echo "e a hora atual é " . date("G:i:s T");
    ?>
</body>
</html>