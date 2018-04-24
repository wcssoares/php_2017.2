<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 07</title>
    </head>
    <body>
       <form action="#" method="POST">
        <label for="numero">Numero</label>
        <input type="number" name="numero">
        <button type="submit">Enviar</button> 
       </form>
        <?php
        $numero = $_POST['numero'];
        
        if(($numero % $numero) && ($numero %1)){
         
            echo " O numero é primo";
        }
     
       ?> 
    </body>
</html>
