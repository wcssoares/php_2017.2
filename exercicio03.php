<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 03</title>
    </head>
    <body>
        <?php
            $assinatura = 32.00;
            $impulso = 0.09;
            $chamadas = 0.35;
            $valorImpulso = 164 * 0.09;
            $valorChamada = 23 * 0.35;
            $valorAssinatura = $assinatura + ($valorImpulso + $valorChamada);
            echo "O valor da conta é: $valorAssinatura";
        ?>
    </body>
</html>    