<?php
    
    session_start();
    include_once('../Controller/conexao.php');

    $key = filter_input(INPUT_GET,'key',FILTER_DEFAULT);

    if($key == NULL){
        
        echo "<script>location.href='../index.php'</script>";
        session_destroy();
    }
    
    $sql_code = "SELECT * FROM usuarios WHERE recuperar_senha = '{$key}'";

    $sql_query = $conexao->query($sql_code) or die("erro ao selecionar coluna");

    $rows = $sql_query->num_rows;

    $usuario = $sql_query->fetch_assoc();

    $_SESSION['user'] = $usuario['nome'];

    if($rows == 1){
        
        $entrar = filter_input_array(INPUT_POST,FILTER_DEFAULT);
        
        if(!empty($entrar['submit'])){
            
            $senha = password_hash($_POST['password'], PASSWORD_DEFAULT);
            
            $sql_up_senha = "UPDATE usuarios SET senha ='{$senha}' WHERE id={$usuario['id']}";
                    
            $result_up_senha = $conexao->query($sql_up_senha) or die("erro ao selecionar coluna");
        
    
            $sql_up_senha = "UPDATE usuarios SET recuperar_senha ='NULL' WHERE id={$usuario['id']}";
                    
            $result_up_senha = $conexao->query($sql_up_senha) or die("erro ao selecionar coluna");
            
            echo "<script>location.href='../index.php'</script>";
            
        }
   
    } else {
        session_destroy();
        echo "<script language = 'javascript' type='text/javascript'>
                    alert('link invalido!')</script>";
        echo "<script>location.href='../index.php'</script>";
    }

?>