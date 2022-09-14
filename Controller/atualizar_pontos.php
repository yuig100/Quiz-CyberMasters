<?php

session_start();
include_once('../Controller/conexao.php');

$atualizacao = $conexao->query("SELECT pontos,nivel FROM usuarios WHERE email = '{$_SESSION['login']}'")->fetch_assoc();

$_SESSION['pontos'] = $atualizacao['pontos'];

$_SESSION['nivel'] = $atualizacao['nivel'];

?>