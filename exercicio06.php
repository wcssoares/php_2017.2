<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 06</title>
    </head>
    <body>
        <form action="#" method="post">
            <input name="varA">
            <input name="varB">
            <input type="submit" value="enviar">
        </form>
        <?php
            $varA = $_POST['varA'];
            $varB = $_POST['varB'];
            $adicao = $varA + $varB;
            $subtracao = $varA - $varB;
            $multipicacao = $varA * $varB;
            $divisao = $varA / $varB;
            echo "O Valor é: $adicao<br>";
            echo "O Valor é: $subtracao<br>";
            echo "O Valor é: $multipicacao<br>";
            echo "O Valor é: $divisao";
        ?>
    </body>
</html>

