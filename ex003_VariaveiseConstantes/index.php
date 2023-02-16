<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e constantes em PHP </title>
</head>
<body>
    <?php 
    //Variável = pode varia de valor durante o programa
    $nome ='Davi';
    $sobrenome ='Gledson';

    $nome ='Silva';
    $sobrenome ='Benedito';

    const PAIS = "Brasil"; 

    //PAIS = 'EUA'; Contante = Não pode mudar no meio de um programa

    //DECLARAÇÃO DE VARIÁVEIS
    $idade = 20;
    $peso = 68.4;
    $cansado = true;

    //REGRAS PARA NOMES IDENTIFICADORES
    // 1 - Variáveis sempre começam com o simbolo $
    // 2 - O segundo caractere pode ser letra ou o símbolo _  (Não pode ser numero)
    // 3 - Aceita caracteres [a-z], [A-Z], [0-9] e [_]
    // 4 - Aceita caracteres da tabela ASCII a parti da 128 (simbolo ou caractere acentuado)
    // 5 - Aceita caracteres acentuados como  á, õ, ç
    // 6 - A linguagem é case sensitive em relação aos nomes (caso tenha declarado nome tudo em minusculo, tem que usar nome tudo em minusculo)
    // 7 - Nome especiais como $this não podem ser usados
    // 8 - não pode ter espaço no nome de constante e variáveis


    const CURSO = 'TI';
    echo "Muito prazer, $nome $sobrenome! Você mora no ". PAIS;


    //RECOMENDAÇÕES PARA DAR NOMES
    //1 - Tente dar nomes claros e fácil identificação
    //2 - Evite nomes muito curtos ou muitos longos
    //3 - Defina um padrão e siga em todo o projeto
    //4 - Para variáveis, dê preferencia a letras minúsculas
    //5 - Para constantes, dê preferencia a letras maiúsculas
    //6 - use camelCase para métodos e atributos
    //7 - Use SNAKE_CASE para nomear constantes 

    $nomeCompletoCliente = "Camel Case";
    $telefone_contato_fornecedor = "Snake Case";

    echo " $nomeCompletoCliente e $telefone_contato_fornecedor"


    ?>
    
</body>
</html>