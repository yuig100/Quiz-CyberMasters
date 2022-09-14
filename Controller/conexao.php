<?php
    
    /*Criando Conexão com o banco de dados*/
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'quiz-tcc';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    
    /*Testando a conexao*/
    if($conexao->connect_errno){
        
        echo "Falha ao conectar: (".$conexao->connect_errno.")".$conexao->connect_errno;
        
    }
    
?>