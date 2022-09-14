<?php

session_start();

include_once('../Controller/protect.php');
include_once('../Controller/atualizar_sessao.php');

$key = filter_input(INPUT_GET,'key',FILTER_DEFAULT);
?>

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
        <link rel="stylesheet" href="../css/style.css">

    </head>
    <body>
        <!-- Barra de Navegação-->
        <?php
        include("../Controller/header.php");
        ?>
        <!-- Logo-->
        <div class="logo">
            <img src="../images/modulos/<?php echo $key; ?>.png">
        </div>

        <div>
            <h1><?php echo $_SESSION['nome_modulo']; ?></h1>
            <p><?php echo $_SESSION['texto'];?></p>
        </div>
        <div class="button">
            <p><a href="../View/aprender.php">Voltar</a></p>
        </div>
        <div class="button">
            <p><a href="../View/quiz2.php?key=<?php echo $key; ?>">Avançar</a></p>
        </div>
    </body>
</html>