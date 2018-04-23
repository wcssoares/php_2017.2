<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 08</title>
    </head>
    <body>
       <form action="#" method="POST">
        <label for="ano">Ano</label>
        <input type="year" name="ano">
       </form>
        <?php
        $ano = filter_input( $_POST['ano']);
        
        if(($ano%4 == 0) && ($ano%400 == 0) && ($ano%!100)){
         echo "O ano é bissexto";
        }
       ?> 
    </body>
</html>
