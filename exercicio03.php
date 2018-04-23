<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 03</title>
    </head>
    <body>
        <form action="#" method="post">
            <input name="numero">
            <input type="submit" value="enviar">
            <input name="multiplo">
            <input type="submit" value="enviar">
        </form>
        <?php
            $numero = $_POST['numero'];
            $multiplo = $_POST['multiplo'];
            
            if($numero % $multiplo == 0) {
                echo "Esses números são múltiplos";
            } else {
                echo "Esses números não são múltiplos";
            }
       ?>     
    </body>
</html>
