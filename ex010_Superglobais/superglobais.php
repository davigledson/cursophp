<html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../Estilos/style.css">
        <title>Superglobais no PHP </title>
        
    </head>
    <body>
        <h1>Superglobais no PHP </h1>
        <main>
            <pre><!--O PRE AJEITA O OS ARRAYS-->
                <?php  
                setcookie('dia-da-semana',"SEGUNDA",time()+ 3600);
                session_start();
                $_SESSION['teste'] = "FUNCIONOU";

                    //query string = é a solicitação (a url com os parâmetros)
                    echo "<h1>Superglobal GET</h1>";//dar para passa valores pela url
                    var_dump($_GET);

                    echo "<h1>Superglobal POST</h1>";
                    var_dump($_POST);

                    echo "<h1>Superglobal REQUEST</h1>";
                    var_dump($_REQUEST); //pegou os dados dos dois tipos de dados

                   

                    echo "<h1>Superglobal COOKIE </h1>";var_dump($_COOKIE);

                    echo "<h1>Superglobal SESSION </h1>";

                    var_dump($_SESSION);

                    echo "<h1>Superglobal ENV</h1>";

                    var_dump($_ENV);

                    echo "<h1>Superglobal SERVER</h1>";

                    var_dump($_SERVER);

                    echo "<h1>Superglobal GLOBAL</h1>";

                    var_dump($GLOBALS); //PEGOU TODO O CONTEUDO DAS OUTRAS SUPERGLOBAIS
                    
                ?>
                
            </pre>
            
        </main>
            
    </body>
    </html>
</html>
