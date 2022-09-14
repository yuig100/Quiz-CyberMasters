<?php

include_once('../Controller/conexao.php');

$id = $_REQUEST["id"];
$submit = "<script> document.getElementById('submit'); </script>";

if(isset($submit)){

    $result = mysqli_query($conexao,"DELETE FROM pergunta WHERE `pergunta`.`id` = '$id'");    

    echo "<script>location.href='../pags_adm/perguntas.php'</script>";
}
?>