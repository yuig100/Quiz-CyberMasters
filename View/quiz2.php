<?php

session_start();

include_once('../Controller/protect.php');

$id = filter_input(INPUT_GET,'key',FILTER_DEFAULT);

if(!$id){
    header('Location: ../View/quiz.php');
}
include_once('../Controller/atualizar_sessao.php');
?>
<!DOCTYPE html>
<html>
    <head>

        <!--Tags Meta-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="Quiz CyberMasters">

        <!--Configuração do favicon-->
        <link rel="icon" type="image/x-icon" href="../favic.ico">

        <!--Titulo da guia do navegador-->
        <title>CYBERMASTERS</title>

        <!--Google Fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@800&family=Oswald&family=PT+Serif:wght@700&display=swap" rel="stylesheet">

        <!-- Conexão da folha de estilos -->
        <link rel="stylesheet" href="../css/quiz.css">
        <link rel="stylesheet" href="../css/style.css">

        <!-- Conexao com as perguntas do banco de dados -->
        <script>
            let variavel = <?php echo $id; ?>
        </script>
        <script>let perguntas = <?php include("../Controller/ponte_quiz.php");  echo json_encode($elementos); ?> ;</script>


    </head>
    <body>
        <!--  -->
        <?php

        include_once('../Controller/conexao.php');

        $sql_code = "SELECT * FROM pergunta WHERE modulo = '{$id}'";

        $sql_query = $conexao->query($sql_code);

        $questoes = $sql_query->fetch_assoc();

        $modulo = $conexao->query("SELECT nome_modulo FROM modulos WHERE numeracao = '{$id}'")->fetch_assoc();

        ?>
        <!-- Barra de Navegação-->
        <?php
        include("../Controller/header.php");
        ?>
        <!-- Logo-->
        <div class="logo">
            <img src="../images/modulos/<?php echo filter_input(INPUT_GET,'key',FILTER_DEFAULT); ?>.png">
        </div>
        <!-- Nome do Modulo -->
        <h2><?php echo  $modulo["nome_modulo"]?></h2>

        <!-- Alternativas -->
        <div id="wrapper">
            <div id="titulo"></div>
            <ul>
                <li class="alternativa"></li>
                <li class="alternativa"></li>
                <li class="alternativa"></li>
                <li class="alternativa"></li>   
            </ul>
            <!-- Mostra qual é a alternativa correta -->
            <div id="result" hidden="none"></div>
            <div hidden="none">
                <div id="pontos"></div>
            </div>
        </div>
        <div class="button">
            <p><a href="../View/quiz.php">Voltar</a></p>
        </div>

        <script type="text/javascript" src="../js/quiz.js"></script>
    </body>
</html>      