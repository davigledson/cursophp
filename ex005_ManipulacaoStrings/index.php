<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de strings com PHP</title>
</head>
<body>
    <?php 
    //QUATRO FORMATOS DE STRINGS
    //Double quoted
    //Single quoted
    //Heredoc - muito pouco utilizado
    //Nowdoc - muito pouco utilizado

    //"Curso" . "PHP" - concatenation operator - existe a interpretação do conteúdo
    
    //Double quoted = ("") - vai interpretar o conteúdo
    //Single quoted = ('') não há interpretação do conteúdo 

    //EXEMPLOS
    $nome ="Davi";
    echo "Olá $nome"; //Resultado = Olá Davi
    echo 'Olá $nome!';// Resultado = Olá $nome

    $nome1 ="Davi";
    $sobrenome ='Gledson \u{1F596}';
    echo "Olá $nome1 $sobrenome"; //Resultado = Davi Gledson \u{1F596}
    echo 'Olá $nome1!'; // Resultado = Olá $1nome


    //CONSTANTES
    const CANAL = "Curso em Vídeo \u{1F499}"; //Há interpretação
    echo "Eu adoro o CANAL ";
    echo "Eu adoro o ". CANAL;

    const CANAL2 = 'Curso em Vídeo \u{1F499}';// não há interpretação
    echo "Eu adoro o ". CANAL2;
    echo 'Eu adoro o '. CANAL2;

    echo "Estamos no ano de " . date('Y'); // (.) Operador de  concatenação

    //EXEMPLO DE ASPAS
    //Não pode colocar aspas duplas dentro de aspas duplas nem aspas simples dentro de aspas simples
    $nom ="Rodrigo";
    $snom = "Nogueira";

    //echo "$nom "Minotauro" $snom"; - Resultado = ERRO
    echo '$nom "Minotauro" $snom '; // - Resultado = $nom "Minotauro" $snom
    echo "$nom \"Minotauro\" $snom "; // Sequência de escape

    //SEQUENCIA DE ESCAPE PARA ASPAS DUPLAS
    // \n - nova linha = quebra linha para baixo
    // \t - sinal de tabulação horizontal
    // \\ - barra invertida
    // \$ - Sinal de cifrão = mostra o $ na tela
    // \u{} - Codepoint Unicode

    $nome ="Davi";
    $sobrenome = "Gledson";
    $apelido = "DEV";
    echo "$nome  ".$apelido." $sobrenome "; // Resultado = Davi DEV Gledson
    echo "$nome  \"$apelido\" $sobrenome "; // Resultado = Davi "DEV" Gledson
    echo '$nome  \'$apelido\' $sobrenome '; // Resultado = $nome '$apelido' $sobrenome
    echo "$nome  \'$apelido\' $sobrenome "; // Resultado = Davi \'DEV\' Gledson
    echo "$nome  \n\t\"$apelido\" \n\t$sobrenome "; // só funciona para o texto gerado

    //SINTAXE MENOS USADAS MAIS QUE CAEM  EM PROVAS
    //Sintaxe Heredoc
    $canal ="Curso em Video";
    $ano = date('Y');
    echo <<< TESTE
    Olá galera do $canal?
            Como está sendo esse ano de $ano?
        Abraços! \u{1F596}
    TESTE;
     //Não há resultado em html - só no codigo fonte(Heredoc usado para quebrar linhas facilmente)

    //Sintaxe Nowdoc
    $canal ="Curso em Video";
    $ano = date('Y');
    echo <<< 'TESTE'
    Olá galera do $canal?
            Como está sendo esse ano de $ano?
        Abraços! \u{1F596}
    TESTE; //Nowdoc estão para aspas simples - aceita múltiplas linhas -  não há interpretação

    //Heredoc estão para aspas duplas - aceita múltiplas linhas -  há interpretação
    ?>
</body>
</html>