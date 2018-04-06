<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 10</title>
    </head>
    <body>
        <form action="#" method="post">
            <input name="inteiro">
            <input type="submit" value="enviar">
        </form>
        <?php
            $inteiro = $_POST['inteiro'];
            $divisao =  $inteiro / 2;
            echo "O resultado da divisão é: $divisao";
        ?>
    </body>
</html>



