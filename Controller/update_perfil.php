<?php
session_start();
include_once('../Controller/conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$submit = $_POST['submit'];
$id = $_SESSION['id'];
$senha = $_POST['senha'];
$resenha = $_POST['re_senha'];

if(isset($submit)){

    $sql_code = "SELECT * FROM usuarios WHERE id = '{$id}' LIMIT 1";

    $sql_query = $conexao->query($sql_code) or die("erro ao selecionar coluna");

    $usuario = $sql_query->fetch_assoc();

    if($senha !=NULL && $resenha !=NULL){
        if(password_verify($senha, $usuario["senha"])){
            
            $resenha = password_hash($_POST['re_senha'], PASSWORD_DEFAULT);
            
            $result = mysqli_query($conexao,"UPDATE `usuarios` SET `nome` = '{$nome}', `email` = '{$email}',`senha` = '{$resenha}' WHERE `usuarios`.`id` = '{$id}'");

        }else {

            echo "<script language = 'javascript' type='text/javascript'>
                    alert('senha incorreta')</script>";
            echo "<script>location.href='../View/editar_perfil.php'</script>";

        }
    } else if($senha != NULL && $resenha == NULL){

        echo "<script language = 'javascript' type='text/javascript'>
                    alert('Esta faltando a nova senha')</script>";
        echo "<script>location.href='../View/editar_perfil.php'</script>";

    } else if($senha == NULL && $resenha != NULL){

        echo "<script language = 'javascript' type='text/javascript'>
                    alert('Esta faltando a senha antiga')</script>";
        echo "<script>location.href='../View/editar_perfil.php'</script>";

    } else if($senha == NULL && $resenha == NULL){

        $result = mysqli_query($conexao,"UPDATE `usuarios` SET `nome` = '{$nome}', `email` = '{$email}' WHERE `usuarios`.`id` = '{$id}'");

    }

}
echo "<script>location.href='../View/perfil.php'</script>";
?>