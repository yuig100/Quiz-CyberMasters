<?php
session_start();
include_once('../Controller/conexao.php');

$nome_modulo = $_POST['nome_modulo'];
$texto = $_POST['texto'];
$numeracao = $_POST['numeracao'];
$submit = $_POST['submit'];

if(isset($submit)){

    if($_REQUEST["id"] == 0){

        $result = mysqli_query($conexao,"INSERT INTO modulos(nome_modulo,texto,numeracao) VALUES ('$nome_modulo','$texto','$numeracao')");

    } else {

        $result = mysqli_query($conexao,"UPDATE `modulos` SET `nome_modulo` = '{$nome_modulo}', `texto` = '{$texto}', `numeracao` = '{$numeracao}' WHERE `modulos`.`id` = {$_REQUEST["id"]}"); 

    }

}

echo "<script>location.href='../pags_adm/modulos.php'</script>";

?>