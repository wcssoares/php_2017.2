<!DOCTYPE html>
<html lang="pt-br">
    <head>
         <meta charset="UTF-8">
         <title>Hello World</title>
    </head>
    <body>
        <h1>Minha primeira página em PHP com código básico "Olá Mundo"</h1>
        <code>
            <!--para iniciarmos um bloco de código PHP usamos as tags abaixo-->
            <?php
                # para declaramos uma variável é necessário usar o símbolo $
                $hello = "Olá Mundo PHP";

                //Comando utilizado para imprimir(saída) na tela
                echo($hello);

                /*
                    Detalhes importantes:

                    Em PHP sempre será necessário iniciar uma variável com $.
                    Para que o servidor entenda os códigos PHP os arquivos devem ser salvos com a extensão .php.
                */
            ?> 
        </code>
    </body>
</html>
