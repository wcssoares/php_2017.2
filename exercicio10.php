<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 10</title>
    </head>
    <body>
       <form action="#" method="POST">
        <label for="numero">Numero</label>
        <input type="number" name="numero">
        <button type="submit">Enviar</button> 
       </form>
        <?php
      
        $t=1;
        
        while($t<11){
        
        $x=0;
        
        for($i= $x; $i<11; $i++){
            echo "$t*$i=";
            
            echo $t*$i;
            
            echo"<br>";
            
         $x++;
        }
        
        $t++;
        }
        
       ?> 
    </body>
</html>
