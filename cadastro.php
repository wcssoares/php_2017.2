<?php
#import do Arquivo C.R.U.D
require_once 'crud.php';

/* 
 * Arquivo responsável por receber a requisição de cadastro da página formulário.php
 */

# RESGATAR OS CAMPOS DO FORMULÁRIO
$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$telefone = $_POST['telefone'];





/*
echo "Nome: $nome <br>"
    .  "Matricula: $matricula <br>"
    .  "Telefone: $telefone <br>"
*/

if(isset($_POST['nome'])) {
   if(gravar($nome, $matricula, $telefone)) {
       echo 'Dados gravados com sucesso';
   } else {
       echo 'Falha ao gravar os dados';
   }
}


