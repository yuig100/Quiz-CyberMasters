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
        <div>
            <?php
            
            include_once('../Controller/conexao.php');
            $sql = "SELECT * from modulos";
            $res = $conexao ->query($sql);
            $qtd = $res -> num_rows;

            $desbloqueio = $conexao ->query("SELECT nivel_desbloqueio FROM usuarios WHERE email = '{$_SESSION['login']}'")->fetch_assoc();
            
            $n = 1;
            
            print "<ul>";
            if($qtd > 0){
                while ($row = $res ->fetch_object()) {

                    if($desbloqueio["nivel_desbloqueio"]+1 >= $n){
                        $n++;
                        print "<li class='button'><a href='../Controller/modulo.php?key={$row->numeracao}'>Modulo {$row->numeracao}: {$row->nome_modulo}</a></li>";
                        
                    } else {

                        print "<li class='button-disable'>Modulo {$row->numeracao}: {$row->nome_modulo}</li>";

                    }


                }
            }

            print "</ul>";   

            ?>
        </div>
    </body>
</html>