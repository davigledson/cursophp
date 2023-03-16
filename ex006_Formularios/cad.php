<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../Estilos/style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
        //var_dump($_GET) retorna todos os valores em um array superGlobal
        
        //var_dump($_REQUEST) //Junção de $_GET $_POST e $_COOKIES - Funciona tanto no GET quanto no POST - ocupar mais memoria 

        //poderia ser $nome = $_REQUEST também 
        $nome = $_GET["nome"] ?? "sem nome";
        
        // variável superglobal que na verdade e um array que contem dados que estão vindo de uma emissão de um formulário

        $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
        
        // Operador de coalescência nula ?? - caso o valor original não exista, vai entrega receber valores padronizados, no caso o "desconhecido" 

        echo "<p>E um prazer te conhecer <strong> $nome $sobrenome </strong> Esse e o meu site</p>" // resultado = E um prazer te conhecer davi gledson Esse e o meu site
        ?>

        <p><a href="javascript:history.go(-1)">Voltar para pagina anterior</a></p> <!--comando javascript para voltar para pagina anterior-->
    </main>
</body>
</html>