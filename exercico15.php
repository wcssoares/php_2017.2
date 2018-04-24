<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 15</title>
    </head>
    <body>
       <form action="#" method="POST">
        <label for="dado1">Dado1</label>
        <input type="number" name="dado1">
        <label for="dado2">Dado2</label>
        <input type="number" name="dado2">
       </form>
        <?php
        $dado1 = $_POST['dado1'];
        $dado2 = $_POST['dado2'];
        $soma = $dado1 + $dado2;
        
        for($i=0;$i<12; $i++){
        
        if($soma==7){
            ($dado1 + $dado2)/12;
            echo "A probabilidade é: $soma";
        }
      } 
    
       ?> 
    </body>
</html>
