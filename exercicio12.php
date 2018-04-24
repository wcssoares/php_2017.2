<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 12</title>
    </head>
    <body>
       <form action="#" method="POST">
        <label for="juros">Juros</label>
        <input type="number" name="juros">
        <label for="cap">Capita</label>
        <input type="number" name="capital">
        <label for="taxa">taxa</label>
        <input type="number" name="taxa">
        <label for="tempo">tempo</label>
        <input type="number" name="tempo">
        <button type="submit">Enviar</button> 
       </form>
        <?php
        $juros = $_POST['juros'];
        $capital = $_POST['capital'];
        $taxa = $_POST['taxa'];
        $tempo = $_POST['tempo'];
        
        if($tempo){
            $tempo =($juros/$capital)/($taxa);
            
            echo"O tempo necessário é de: $tempo.'meses'";
        }
        
       
     
       ?> 
    </body>
</html>
