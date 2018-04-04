<form action="" method="post">
    <input name="carros">
    <input type="submit" value="enviar">
</form>
<?php
    $salario = 800;
    $com = 300;
    $carros = $_POST['carros'];
    $total = $salario + ($com * $carros);
    echo "O salário total é: $total";
?>

