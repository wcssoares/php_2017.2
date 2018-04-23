<html>
    <head>
        <meta charset="UTF-8">
        <title>Execicio 04</title>
    </head>
    <body>
       <form action="#" method="POST">
        <label for="numero">Numero</label>
        <input type="number" name="numero">
       </form>
        <?php
        $numero = $_POST['numero'];
        
        if($numero<0)
            echo "nuumero negativo";
        
        if($numero == 0);
          echo "zero";
          
        if($numero>0);
          echo "numero positivo";
       ?> 
    </body>
</html>
