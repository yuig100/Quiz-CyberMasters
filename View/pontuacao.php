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
            <img src="../images/bandeira.png">
        </div>
        <div>
            <p>Pontuação</p>
        </div>
        <!-- Nivel-->
        <div>
            <p>Nível: <script>document.write(exp_level(<?php echo $_SESSION['nivel']; ?>));</script></p>
        </div>
        <!-- Barra de progresso-->
        <div class="barra">
            <div></div>
        </div>
        <!-- Buscando Jogadores -->
        <div>
            <?php

            include('../Controller/placar.php');
            $i=1;

            print "<table class='table'>";
            print "<th>Lugar</th>";
            print "<th>Nome</th>";
            print "<th>Pontos</th>";
            foreach ($elementos as $elemento) {
                print "<tr>";
                print "<td>".$i."</td>";
                print "<td>".$elemento["nome"]."</td>";
                print "<td>".$elemento["pontos"]."</td>";
                print "</tr>";
                $i++;
            }
            print "</table>";

            ?>
        </div>

        <!-- Barra de XP-->
        <script>

            var barra = document.querySelector(".barra div");

            var percent = exp_barra(<?php echo $_SESSION['nivel']; ?>);

            barra.style.width = percent+"%";

        </script>
    </body>
</html>