<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 05</title>
    </head>
    <body>
       <form action="#" method="POST">
        <label for="numero">Numero</label>
        <input type="number" name="numero">
       </form>
        <?php
        $numero = $_POST['numero'];
        
        if($numero>5 && $numero>20)
            echo "Esse número éstá entre 5 e 20";
        
         else
            echo "Esse número não está entre 5 e 20"
       ?> 
    </body>
</html>

