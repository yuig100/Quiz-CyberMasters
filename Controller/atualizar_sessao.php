<?php

include_once('../Controller/conexao.php');

/*Atualizar variaveis*/
$sql_code = "SELECT * FROM usuarios WHERE id = '{$_SESSION['id']}'";
$sql_query = $conexao->query($sql_code);
$usuario = $sql_query->fetch_assoc();
$_SESSION['nome'] = $usuario['nome'];
$_SESSION['login'] = $usuario['email'];
$_SESSION['nivel'] = $usuario['nivel'];
$_SESSION['pontos'] = $usuario['pontos'];
$_SESSION['nivel_desbloqueio'] = $usuario['nivel_desbloqueio'];

?>