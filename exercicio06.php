<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Exercício 06</title>
    </head>
    <body>
        <div id="container">
            <fieldset>
                <form action="#" method="post">
                    <div>
                        <legend>Par ou Impar</legend>
                        <label for="id_num1">Informe o valor a ser verificado</label>
                        <input type="number" id="id_num1" name="num1">
                    </div>

                    <button type="submit">Verificar</button>

                </form>
            </fieldset>

            <?php
            if (isset($_POST['num1'])) {
                $num1 = $_POST['num1'];
                if($num1 % 2 == 0){
                    echo "O número informado é par";
                }else{
                    echo "O número informado é ímpar";
                }
               
            }
            ?>
        </div>
    </body>
</html>
