<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 06</title>
    </head>
    <body>
        <form action="#" method="post">
            <input name="num">
            <input name="deno">
            <input type="submit" value="enviar">
        </form>
        <?php
            $numerador = $_POST['num'];
            $denominador = $_POST['deno'];
        
            if($numerador%$denominador == 1){
                return true;
            }
            elseif($numerador%$numerador == 0){
                return false;
            }
        ?>
    </body>
</html>

