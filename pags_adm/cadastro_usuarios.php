<?php

include_once('../Controller/conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
$tipo = $_POST['tipo'];
$nivel = $_POST['nivel'];
$pontos = $_POST['pontos'];
$nivel_desbloqueio = $_POST['nivel_desbloqueio'];
$submit = $_POST['submit'];

if(isset($submit)){

    if($_REQUEST["id"] == 0){
        
        $result = mysqli_query($conexao,"INSERT INTO usuarios(nome,email,senha,tipo,nivel,pontos,nivel_desbloqueio) VALUES ('$nome','$email','$senha','$tipo','$nivel','$pontos','$nivel_desbloqueio')");  
        
    } else {

        $result = mysqli_query($conexao,"UPDATE `usuarios` SET `nome` = '{$nome}', `email` = '{$email}', `senha` = '{$senha}', `tipo` = '{$tipo}', `nivel` = '{$nivel}', `pontos` = '{$pontos}', `nivel_desbloqueio` = '{$nivel_desbloqueio}' WHERE `usuarios`.`id` = '{$_REQUEST["id"]}'");

    }

}
echo "<script>location.href='../pags_adm/usuarios.php'</script>";
?>