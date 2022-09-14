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
            <img src="../images/image.png">
        </div>
        <!-- Nome do Usuario-->
        <div>

            <a href="../View/perfil.php"><p class="nome"><?php echo $_SESSION['nome']; ?></p></a>

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
        
        <div>
        
            <p class="button"><a href="../View/editar_perfil.php" >Editar Perfil</a></p>
        
        </div>
        
        
        <!-- Botões de redirecionamento-->
        <div>   
            <p>Conquistas</p>
            <ul>
                <li class="button"><a href="../View/favoritos.php" ><img src="../images/favoritos.png"/><br>Favoritos</a></li>
                <li class="button"><a href="../View/pontuacao.php"><img src="../images/bandeira.png"/><br>Pontuação</a></li>
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