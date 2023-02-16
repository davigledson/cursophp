<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos do PHP</title>
</head>
<body>
    <h1>Tipos primitivos</h1>
    <h2>Categoria dos tipos primitivos</h2>

    <h3>Escalares</h3>
    <?php 
    //string, int ou integer, float, double ou real, bool ou boolean 
    $sobrenome = "Gledson"; //string - sequencia de letras, números e símbolos, sempre representas entre aspas

    $idade = 20; //int ou integer - um valor numérico inteiro, aquele que vem sem a parte decimal

    $peso = 85.6; // float, double ou real (palavra real deixou de existir a parti da versão 7.4 do PHP) - um valor numérico real que vem com a parte decimal depois do ponto flutuante
    
    $casado = true; // bool ou boolean - um valor lógico ou Boleando, que aceita apenas os valores verdadeiro ou falso (true ou false)
    
    ?>
    <h3>Compostos</h3>
    <?php 
    //array e object
    $vet = [6,5.2,0,"Maria",2,false];
    
    //echo "O vetor é $vet" -  dar erro, não existe conversão de array para string

    var_dump($vet);

    class Pessoa{
        private string $nome;
    }   

    $p = new Pessoa;
    var_dump($p);

    ?>


    <h3>Especiais</h3>
    <?php 
    //null, resource, callabe e mixed
    ?>
</body>
</html>