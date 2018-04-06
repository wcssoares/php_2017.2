<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 07</title>
    </head>
    <body>
        <form action="#" method="post">
            <input name="inteiro">
            <input type="submit" value="enviar">
        </form>
        <?php
            $inteiro = $_POST['inteiro'];
            $resultado = $inteiro*$inteiro;
            echo "O resultado é: $resultado";
        ?>
    </body>
</html>




