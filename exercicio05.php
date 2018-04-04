<form action="#" method="post">
    <input name="numeroEleitores">
    <input name="votosBrancos">
    <input name="votosNulos">
    <input name="votosValidos">
    <input type="submit" value="enviar">
</form>
<?php
    $numeroEleitores = $_POST['numeroEleitores'];
    $votosBrancos = $_POST['votosBrancos'];
    $votosNulos = $_POST['votosNulos'];
    $votosValidos = $_POST['votosValidos'];
    $percentualBrancos = ($votosBrancos * 100) / $numeroEleitores;
    $percentualNulos = ($votosNulos * 100) / $numeroEleitores;
    $percentualValidos = ($votosValidos * 100) / $numeroEleitores;
    echo "O percentual de votos brancos é: $percentualBrancos<br>";
    echo "O percentual de votos nulos é: $percentualNulos<br>";
    echo "O percentual de votos validos é: $percentualValidos";
?>
