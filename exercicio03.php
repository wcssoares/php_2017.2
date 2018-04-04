<form action="#" method="post">
    <input name="litrosgastos">
    <input name="quilometros">
    <input name="valorlitro">
    <input type="submit" value="enviar">
</form>
<?php
    $litrosgastos = $_POST['litrosgastos'];
    $quilometros = $_POST['quilometros'];
    $valorlitro =  $_POST['valorlitro'];
    $valorgasto = ($litrosgastos * $valorlitro) / $quilometros;
    echo $valorgasto;
?>