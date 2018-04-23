<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 01</title>
    </head>
    <body>
        <form action="#" method="post">
            <label for="numero">Número</label>
            <input name="inteiro">
            <input type="number" name="numero">
        </form>
        <?php
            $numero = $_POST['numero'];
            if($numero<0){
                $numero = $numero * (-1);
            }
            echo("O módulo desse número é: $numero");
        ?>
    </body>
</html>