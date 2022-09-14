<?php

session_start();

include_once('../Controller/protect.php');

if($_SESSION['tipo'] != 1){
    session_destroy();
    header('Location: ../index.php');
    exit();
}

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
            <img src="../images/modulos.png">
        </div>
        <!-- Buscando Jogadores -->
        <div>
            <h1>Modulos</h1>
            <?php

            include_once('../Controller/conexao.php');
            $sql = "SELECT * from modulos ORDER BY numeracao ASC";
            $res = $conexao ->query($sql);
            $qtd = $res -> num_rows;

            if($qtd > 0){

                print "<table class='table'>";
                print "<th>Nome do Modulo</th>";
                print "<th>Texto</th>";
                print "<th>Numeração</th>";
                print "<th>Ações</th>";
                while ($row = $res ->fetch_object()) {
                    print "<tr>";
                    print "<td>".$row->nome_modulo."</td>";
                    print "<td>".$row->texto."</td>";
                    print "<td>".$row->numeracao."</td>";
                    print "<td><button onclick=\"location.href='../pags_adm/criar_editar_modulos.php?&id=".$row->id."';\">Editar</button><button id=\"submit\" onclick=\"location.href='../pags_adm/drop_modulos.php?&id=".$row->id."';\">Excluir</button></td>";
                    print "</tr>";

                }
                print "</table>";

            }

            ?>
        </div>
        <br>
        <div class="button">
            <p><a href="../pags_adm/criar_editar_modulos.php?&id=0">Criar</a></p>
        </div>
    </body>
</html>