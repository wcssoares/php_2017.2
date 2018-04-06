<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 14</title>
    </head>
    <body>
        <form action="#" method="post">
            <input name="salario">
            <input name="reajuste">
            <input type="submit" value="enviar">
        </form>
        <?php
            $salario = $_POST['salario'];
            $reajuste = $_POST['reajuste'];
            $novoSalario = $salario + ($salario * $reajuste);
            echo "O novo salário é: $novoSalario";
        ?>
    </body>
</html>

