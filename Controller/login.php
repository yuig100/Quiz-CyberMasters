<?php

session_start();
include_once('../Controller/conexao.php');

if(isset($_POST['login']) || isset($_POST['senha'])){

    if(strlen($_POST['login']) == 0){

        echo "Preencha seu Login";

    } else if(strlen($_POST['senha']) == 0){

        echo "Preencha sua senha";

    } else {

        $login = $conexao->real_escape_string($_POST['login']);
        $senha = $conexao->real_escape_string($_POST['senha']);
        $entrar = $_POST['entrar'];

        if(isset($entrar)){

            $sql_code = "SELECT * FROM usuarios WHERE email = '{$login}' LIMIT 1";

            $sql_query = $conexao->query($sql_code) or die("erro ao selecionar coluna");

            $usuario = $sql_query->fetch_assoc();

            if(password_verify($senha, $usuario["senha"])){

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];
                $_SESSION['login'] = $usuario['email'];
                $_SESSION['nivel'] = $usuario['nivel'];
                $_SESSION['pontos'] = $usuario['pontos'];
                $_SESSION['tipo'] = $usuario['tipo'];
                $_SESSION['nivel_desbloqueio']= $usuario['nivel_desbloqueio'];


                header('Location: ../View/painel.php');

            } else {

                echo "<script language = 'javascript' type='text/javascript'>
                    alert('login ou senha incorretos')</script>";
                echo "<script>location.href='../index.php'</script>";

                die();

            }

        }

    }

}

?>