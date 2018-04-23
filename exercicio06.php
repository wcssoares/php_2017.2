<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 06</title>
    </head>
    <body>
       <form action="#" method="POST">
        <label for="numero">Numero</label>
        <input type="number" name="numero">
        <label for="num">Numero2</label>
        <input type="number" name="num">
       </form>
        <?php
        $numero = $_POST['numero'];
        $num = $_POST['num'];
        $res = $x;
        
        if($numero>$num)
          $x = ($numero + $num);
        
        else
          $x = ($numero * $num); 
       ?> 
    </body>
</html>

