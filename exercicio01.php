<form action="" method="post">
    <input name="precoinicial">
    <input type="submit" value="enviar">
</form>
<?php
    $precoinicial = $_POST['precoinicial'];
    $desconto = 0.09;
    $precofinal = $precoinicial - ($precoinicial * $desconto);
    echo $precofinal;
?>


