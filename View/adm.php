<?php

session_start();

include_once('../Controller/protect.php');

if($_SESSION['tipo'] != 1){
    session_destroy();
    header('Location: ../index.php');
    exit();
}
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
        <br>
        <!-- Botões de redirecionamento-->
        <div>
            <ul>
                <li class="button"><a href="../pags_adm/modulos.php">Modulos</a></li>
                <li class="button"><a href="../pags_adm/perguntas.php">Perguntas</a></li>
                <li class="button"><a href="../pags_adm/usuarios.php">Usuarios</a></li>
            </ul>
        </div>
        <br>
        <div class="button">
            <p><a href="../Controller/logout.php">Sair</a></p>
        </div>
    </body>
</html>