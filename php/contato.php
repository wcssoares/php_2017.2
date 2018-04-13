<?php
    require_once './crud_contato.php';
    
    #$nome = $_POST['name'];
    $nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $texto = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    
    if(setContato($name, $email, $message)) {
        session_start();
        $_SESSION['msg_sucess'] = "Mensagem enviada com sucesso.";
    } else {
        $_SESSION['msg_fail'] = "Falha ao enviar a mensagem!";
    }
?>    