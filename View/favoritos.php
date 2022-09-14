<?php

session_start();

include_once('../Controller/protect.php');
include_once('../Controller/atualizar_sessao.php');
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

        <!-- JavaScripts -->
        <script src="../js/level.js"></script>
    </head>
    <body>
        <!-- Barra de Navegação-->
        <?php
        include("../Controller/header.php");
        ?>
        <!-- Logo-->
        <div class="logo">
            <img src="../images/favoritos.png">
        </div>
        <!-- Nome do Usuario-->
        <div>

            <p>Favoritos</p>

        </div>
        <!-- Nivel-->
        <div>
            <p>Nível: <script>document.write(exp_level(<?php echo $_SESSION['nivel']; ?>));</script></p>
        </div>
        <!-- Barra de progresso-->
        <div class="barra">
            <div></div>
        </div>
        <br>
        <!-- Botões de redirecionamento-->
        <div>   
            <ul>
                <li class="button"><a href="" ><br>Parte1</a></li>
                <li class="button"><a href=""><br>Parte2</a></li>
                <li class="button"><a href=""><br>Parte3</a></li>
                <li class="button"><a href=""><br>Parte4</a></li>
            </ul>
        </div>
        <br>

        <!-- Barra de XP-->
        <script>

            var barra = document.querySelector(".barra div");

            var percent = exp_barra(<?php echo $_SESSION['nivel']; ?>);

            barra.style.width = percent+"%";

        </script>
    </body>
</html>