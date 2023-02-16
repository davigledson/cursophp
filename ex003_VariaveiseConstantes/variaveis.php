<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis com Acentuação e com caracteres especiais</title>
</head>
<body>
    <?php 
     //REGRAS PARA NOMES IDENTIFICADORES
    // 1 - Variáveis sempre começam com o simbolo $
    // 2 - O segundo caractere pode ser letra ou o símbolo _  (Não pode ser numero)
    // 3 - Aceita caracteres [a-z], [A-Z], [0-9] e [_]
    // 4 - Aceita caracteres da tabela ASCII a parti da 128 (simbolo ou caractere acentuado)
    // 5 - Aceita caracteres acentuados como  á, õ, ç
    // 6 - A linguagem é case sensitive em relação aos nomes (caso tenha declarado nome tudo em minusculo, tem que usar nome tudo em minusculo)
    // 7 - Nome especiais como $this não podem ser usados

    $nome ="Davi";
    $Nome = "Gledson";
    echo "É verdade que seu nome é $Nome?";
    
    $salário = 7500.75; // COM ACENTO
    echo "Seu salario é de R$ $salário";
    $valor╬ = 200;

    echo "O valor é igual a $valor╬ ";

    const _TK = 850;
    echo "Resultado " . _TK;
    ?>
</body>
</html>