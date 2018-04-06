<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 11</title>
    </head>
    <body>
        <form action="#" method="post">
            <input name="inteiro">
            <input type="submit" value="enviar">
        </form>
        <?php
            $inteiro = $_POST['inteiro'];
            $antecessor = $inteiro -1;
            $sucesssor = $inteiro +1;
            
            echo "O antecessor é: $antecessor<br>";
            echo "O sucessor é: $sucesssor";
            
        ?>
    </body>
</html>
