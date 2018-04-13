<?php
    #constante para caminho do servidor
    define("HOST","localhost");
    #constante para login de usuário
    define("USER","root");
    #constante para senha de usuario
    define("PASSWORD", "");
    #constante para o banco de dados
    define("DATABASE", "cms_php");
    #constante para a porta de comunicção com o servidor
    define("PORT", "3306");
    
    function getConnection() {
        $link = mysqli_connect(HOST, USER, PASSWORD, DATABASE, PORT);
        mysqli_set_charset($link, "utf8");
        return $link;
    }
?>
