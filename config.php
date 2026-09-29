<?php

    // Configuração de acesso ao BD
    $servername = "sql200.infinityfree.com";
    $username = "if0_37072552";
    $password = "ssOpZNpCo0qhMzS";
    $bdname = "if0_37072552_esencia_bella";
    
    // Cria conexão com o banco de dados
    $conexao = new mysqli($servername, $username, $password, $bdname);
    
    // Valida a conexão
    // if ($conexao->connect_errno) {
    //     echo "Erro";
    // }
    // else {
    //     echo "Conexão efetuada com sucesso";
    // }

?>  