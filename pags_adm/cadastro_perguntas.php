<?php

include_once('../Controller/conexao.php');

$titulo = $_POST['titulo'];
$alternativas = $_POST['alternativas'];
$correta = $_POST['correta'];
$modulo = $_POST['modulo'];
$exp = $_POST['exp'];
$submit = $_POST['submit'];

if(isset($submit)){

    if($_REQUEST["id"] == 0){
        
        $result = mysqli_query($conexao,"INSERT INTO pergunta(titulo,alternativas,correta,modulo,exp) VALUES ('$titulo','$alternativas','$correta','$modulo','$exp')");  

    } else {
        
        $result = mysqli_query($conexao,"UPDATE `pergunta` SET `titulo` = '{$titulo}', `alternativas` = '{$alternativas}', `correta` = '{$correta}', `modulo` = '{$modulo}', `exp` = '{$exp}' WHERE `pergunta`.`id` = '{$_REQUEST["id"]}'");
        
    }



}
echo "<script>location.href='../pags_adm/perguntas.php'</script>";
?>