<?php

session_start();
include_once('../Controller/conexao.php');

$modulo = filter_input(INPUT_GET,'key',FILTER_DEFAULT);

$sql_code = "SELECT * FROM modulos WHERE numeracao = '{$modulo}'";

$sql_query = $conexao->query($sql_code) or die("erro ao selecionar coluna");

$modulos = $sql_query->fetch_assoc();

$_SESSION['nome_modulo'] = $modulos['nome_modulo'];
$_SESSION['texto'] = $modulos['texto'];
$numeracao = $modulos['numeracao'];

header("Location: ../View/aprender2.php?key={$numeracao}");

?>