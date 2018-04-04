<form action="" method="post">
    <input name="distancia">
     <input name="litros">
    <input type="submit" value="enviar">
</form>
<?php
    $distancia = $_POST['distancia'];
    $litros = $_POST['litros'];
    $consumo = $distancia / $litros;
    echo $consumo;
?>
