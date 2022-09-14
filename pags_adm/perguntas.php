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
            <img src="../images/questoes.png">
        </div>
        <!-- Buscando Jogadores -->
        <div>
            <h1>Perguntas</h1>
            <?php

            include_once('../Controller/conexao.php');
            $sql = "SELECT * from pergunta ORDER BY modulo ASC";
            $res = $conexao ->query($sql);
            $qtd = $res -> num_rows;

            if($qtd > 0){

                print "<table class='table'>";
                print "<th>Titulo</th>";
                print "<th>Alternativas</th>";
                print "<th>Correta</th>";
                print "<th>Modulo</th>";
                print "<th>Exp</th>";
                while ($row = $res ->fetch_object()) {
                    print "<tr>";
                    print "<td>".$row->titulo."</td>";
                    print "<td>".$row->alternativas."</td>";
                    print "<td>".$row->correta."</td>";
                    print "<td>".$row->modulo."</td>";
                    print "<td>".$row->exp."</td>";
                    print "<td><button onclick=\"location.href='../pags_adm/criar_editar_perguntas.php?&id=".$row->id."';\">Editar</button><button id=\"submit\" onclick=\"location.href='../pags_adm/drop_perguntas.php?&id=".$row->id."';\">Excluir</button></td>";
                    print "</tr>";

                }
                print "</table>";

            }

            ?>
        </div>
        <br>
        <div class="button">
            <p><a href="../pags_adm/criar_editar_perguntas.php?&id=0">Criar</a></p>
        </div>
    </body>
</html>