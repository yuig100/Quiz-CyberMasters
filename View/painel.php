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
        <!-- Botões de redirecionamento-->
        <div>
            <ul>
                <li class="button"><a href="../View/quiz.php" >Desafio</a></li>
                <li class="button"><a href="../View/aprender.php">Aprender</a></li>
                <li class="button"><a href="../View/pontuacao.php">Pontuação</a></li>
            </ul>
        </div>
        <div style="display:inline-block">
            <?php

            include_once('../Controller/conexao.php');
            $sql = "SELECT nome_modulo from modulos";
            $res = $conexao ->query($sql);
            $qtd = $res -> num_rows;
            
            $desbloqueio = $conexao ->query("SELECT nivel_desbloqueio FROM usuarios WHERE email = '{$_SESSION['login']}'")->fetch_assoc();
            
            $n = 0;
            
            print "<ul>";
            if($qtd > 0){
                while ($row = $res ->fetch_object()) {
                    $n++;
                    if($n > $desbloqueio["nivel_desbloqueio"]+1 && $n <= $desbloqueio["nivel_desbloqueio"] + 3){
                        
                        print "<li class='button-right'><img src='../images/cadeado.png'/><br>{$row->nome_modulo}</li>";   
                    }  
                }
            }
            print "</ul>";   

            ?>
        </div>

        <div class="button">
            <p><a href="../Controller/logout.php">Sair</a></p>
        </div>


        <!-- Barra de XP-->
        <script>

            var barra = document.querySelector(".barra div");

            var percent = exp_barra(<?php echo $_SESSION['nivel']; ?>);

            barra.style.width = percent+"%";

        </script>
    </body>
</html>