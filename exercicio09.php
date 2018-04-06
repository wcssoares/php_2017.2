<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 09</title>
    </head>
    <body>
        <form action="#" method="post">
            <input name="inteiro01">
             <input name="inteiro02">
            <input type="submit" value="enviar">
        </form>
        <?php
            $inteiro01 = $_POST['inteiro01'];
            $inteiro02 = $_POST['inteiro02'];
            $divisao = $inteiro01 / $inteiro02;
            $resultado01 = pow($inteiro01, 2);
            $resultado02 = pow($inteiro02, 3);

            echo "O resulatdo da divisão é: $divisao<br>";
            echo "O valor do quadrado é: $resultado01<br>";
            echo "O valor do cubo é: $resultado02";
        ?>
    </body>
</html>

