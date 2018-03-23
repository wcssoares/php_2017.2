<?php
# inclusão do arquivo que abre a conexão com o banco de dados
require_once './conexao.php';

/*
 * Arquivo responsável por fazer as transações com o banco de dados
 */

# Função responsável por gravar os dados ao banco
function gravar($nome, $matricula, $telefone) {
    
    #recebe a conexão aberta
    $link = conexao();
    
    # Query SQL para inserção dos dados
    $query = "insert into produto values (null, '{$nome}', '{$matricula}', {$telefone})";
    
    if(mysqli_query($link, $query)) {
        return true;
    }
    return false;
}


