<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 16</title>
    </head>
    <body>
       <form action="#" method="POST">
        <label for="frase">Frase</label>
        <input type="number" name="frase">
       </form>
        <?php
            $frase = $_POST['frase'];
            $vogais [10]= "AaEeIiOoUu";
            $aux = 0;
        
        
            while($aux){
            for($i=0;$i<10; $i++){
                if($aux == $vogais[i]){
                    $i++;
                    $aux++;
                }
            }
            }
            return $aux;
        ?> 
    </body>
</html>
