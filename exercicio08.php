<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 08</title>
    </head>
    <body>
       <form action="#" method="POST">
        <label for="altura">Altura</label>
        <input type="number" name="altura">
        <label for="">Sexo</label>
        <input type="number" name="altura">
        <button type="submit">Enviar</button>
        
       </form>
        <?php
        $altura = $_POST['altura'];
        $sexo = $_POST['sexo'];
        
        if($sexo == "homem"){
         $ideal = (72.7* $altura)-58;
            
        echo"O peso ideal é: $ideal";  
        }
        elseif($sexo == "mulher"){
         $ideal = (62.1 * $altura)-44.7;
         
         echo"O peso ideal é: $ideal";
        }
       
       ?> 
    </body>
</html>
