<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 13</title>
    </head>
    <body>
        <form action="#" method="post">
            <input name="salario">
            <input name="valorPrestacao">
            <input type="submit" value="enviar">
        </form>
        <?php
            $salario = $_POST['salario'];
            $valorPrestacao = $_POST['valorPrestacao'];
            $credito = $res;
            
            if($valorPrestacao > 0.2) {
                $res = ($valorPrestacao*100) / $salario;
                echo "Empréstimo não pode ser concedido";
            }
            if($valorPrestacao == 0.2) {
                $res = ($valorPrestacao*100) / $salario;
                echo "Empréstimo em análise";
            }
            if($valorPrestacao < 0.2) {
                $res = ($valorPrestacao*100) / $salario;
                echo "Empréstimo pode ser";
            }  
        ?>
    </body>
</html>
    