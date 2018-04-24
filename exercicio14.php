<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 14</title>
    </head>
    <body>
       <form action="#" method="POST">
        <label for="numero">Numero</label>
        <input type="number" name="numero">
       </form>
        <?php
        $numero = $_POST['numero'];
        $divisores = array();
        $soma = 0;
        $aux= $i;
        while($num<500){
            
        for ($i=1; $i < $numero; $i++) {
            if($numero % $i == 0){
            $soma += $i;
            array_push($divisores, $i);
              
            }
        }
      } 
        echo "Numero: $numero, Soma dos divisores: $soma <br>";

        if($soma == $numero){
            $aux ($i.length,i<500,$i++);
            echo" Os numeros perfeitos são: $aux <br>";
       }
       ?> 
    </body>
</html>
