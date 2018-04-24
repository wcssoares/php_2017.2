<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 09</title>
    </head>
    <body>
       <form action="#" method="POST">
        <label for="num1">Numero</label>
        <input type="number" name="num1">
        <label for="num2">Numero</label>
        <input type="number" name="num2">
        <label for="num3">Numero</label>
        <input type="number" name="num3">
        <button type="submit">Enviar</button> 
       </form>
        <?php
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
       
        
        If(($num1>$num2)&&($num1>$num3)&&($num2>$num3)){
             echo "A ordenação é: $num1, $num2,$num3";
        }     
         
        elseif(($num2>$num1)&&($num2>$num3)&&($num1>$num3)){
             echo "A ordenação é: $num2,$num1,$num3";
        }
         elseif(($num3>$num1)&&($num3>$num2)&&($num2>$num1)){
             echo"A ordenação é: $num3,$num2,$num1";
         } 
        
       ?> 
    </body>
</html>

