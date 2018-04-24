<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 11</title>
    </head>
    <body>
       <form action="#" method="POST">
        <label for="numero">Numero</label>
        <input type="number" name="numero">
        <button type="submit">Enviar</button> 
       </form>
        <?php
        $numero = $_POST['numero'];
        $i = $numero+1;
        $x = $numero*$numero;
        
        for($i==0;$i<21; $i++){
            echo"O quadrado desse numero é: $x";
        }
        while($numero<21);
       ?> 
    </body>
</html>
