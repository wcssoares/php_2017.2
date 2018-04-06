<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 12</title>
    </head>
    <body>
        <form action="#" method="post">
            <input name="dolar">
            <input type="submit" value="enviar">
        </form>
        <?php
            $dolar = $_POST['dolar'];
            $cotacao = 3.32;
            $conversaoReal = $dolar * $cotacao;
            echo "O valor em reais é: $conversaoReal";
        ?>
    </body>
</html>

