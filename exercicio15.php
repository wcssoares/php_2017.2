<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 15</title>
    </head>
    <body>
        <form action="#" method="post">
            <input name="valorHora">
            <input name="numHora">
            <input name="descInss">
            <input type="submit" value="enviar">
        </form>
        <?php
            $valorHora = $_POST['valorHora'];
            $numHora = $_POST['numHora'];
            $descInss = $_POST['descInss'];
            
            $salarioBruto = ($valorHora * $numHora);
            
            $desconto = $salarioBruto * ($descInss / 100);
            /*if($salarioBruto){
                $descInss = $salarioBruto * 0.08;
            } elseif ($salarioBruto) {    
                $descInss = $salarioBruto * 0.09;
            } elseif ($salarioBruto) {
                $descInss = $salarioBruto * 0.11;
            }*/
            
            $salarioLiquido = $salarioBruto - $desconto;
            echo "O salário líquido é: $salarioLiquido";
        ?>
    </body>
</html>

