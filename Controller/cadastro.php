<?php

include_once('../Controller/conexao.php');

$nome = $_POST['name'];
$email = $_POST['email'];
$senha = $_POST['password'];
$re_senha = $_POST['re_senha'];
$submit = $_POST['submit'];

if(isset($submit)){

    if($senha == $re_senha){
        
        $hash = password_hash($senha, PASSWORD_DEFAULT);

        $result = mysqli_query($conexao,"INSERT INTO usuarios(nome,senha,email,tipo) VALUES ('$nome','$hash','$email',0)");

        echo "<script>location.href='../index.php'</script>";

        mysqli_close($conexao);    

    } else {
        echo "<script language = 'javascript' type='text/javascript'>
                    alert('As senhas não são iguais')</script>";
        echo "<script>location.href='../View/cadastro.php'</script>";
    }

}

?>