<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 07</title>
    </head>
    <body>
       <form action="#" method="POST">
        <label for="numero">Numero1</label>
        <input type="number" name="numero">
        <label for="num2">Numero2</label>
        <input type="number" name="num2">
       </form>
        <?php
        $numero = $_POST['numero'];
        $num2 = $_POST['num2'];
        
        if($numero > $num2);
         echo "O primeiro é maior que o segundo";
         
        if($numero == $num2);
        
         echo "São iguais";
         
        if($numero < $num2);
        
         echo "O segundo maior que o primeiro";
        
       
       ?> 
    </body>
</html>

