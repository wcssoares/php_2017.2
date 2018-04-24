<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 13</title>
    </head>
    <body>
       <form action="#" method="POST">
        <label for="numero">Numero</label>
        <input type="number" name="numero">
       </form>
        <?php
        $numero = $_POST['numero'];
        $i = $numero;
        
        for($i=0;$i<100; $i++){
        
        if($numero%2!=0){
            echo "Os numeros impares são: $i";
        }
      } 
    
       ?> 
    </body>
</html>
