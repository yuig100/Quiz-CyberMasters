<?php
    
    session_start();
    include_once('../Controller/conexao.php');

    if(isset($_POST['email'])){
        
        if(strlen($_POST['email']) == 0){
            
            echo "Preencha com o Email";
            
        } else {
            
            $login = $conexao->real_escape_string($_POST['email']);
                
            $sql_code = "SELECT * FROM usuarios WHERE email = '{$login}'";

            $sql_query = $conexao->query($sql_code) or die("erro ao selecionar coluna");

            $rows = $sql_query->num_rows;

            if($rows == 1){
                    
                $usuario = $sql_query->fetch_assoc();
                    
                $chave_senha = password_hash($usuario['id'],PASSWORD_DEFAULT);
                    
                $sql_up_senha = "UPDATE usuarios SET recuperar_senha ='{$chave_senha}' WHERE id={$usuario['id']}";
                    
                $result_up_senha = $conexao->query($sql_up_senha) or die("erro ao selecionar coluna");
                    
                if($result_up_senha != NULL){
                    
                    //Link para onde o usuario sera redirencionado para recuperar a senha
                    $link = "<a href='http://localhost/Quiz/View/atualizar_senha.php?key={$chave_senha}'>Link</a>";
                    
                    //Assunto do Email
                    $titulo_email = 'Recuperação de senha';
                    
                    //Conteudo do email
                    $conteudo_email = "Olá {$usuario['nome']}.<br><br>Segue o seu link de recuperação de senha.<br><br> {$link}<br><br>Se você não solicitou essa alteração,nenhuma ação é necessaria.";
                    
                    //Metodo que faz o envio do email
                    include_once('../Controller/enviar_email.php');

                    header('Location: ../index.php'); 

                    } else {
                        
                        echo "<script language = 'javascript' type='text/javascript'>
                        alert('Tente novamente!')</script>";
                }

                } else {

                    echo "<script language = 'javascript' type='text/javascript'>
                    alert('Usuario inexistente')</script>";
                    echo "<script>location.href='../View/recuperacao.php'</script>";

                    die();

            }
            
        }
        
    }
    
?>