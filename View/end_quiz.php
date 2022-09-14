<?php

session_start();

include_once('../Controller/protect.php');

$tipo = filter_input(INPUT_GET,'?tipo',FILTER_DEFAULT);
$acertos = filter_input(INPUT_GET,'?acertos',FILTER_DEFAULT);
$erros = filter_input(INPUT_GET,'?erros',FILTER_DEFAULT);
$pontos = filter_input(INPUT_GET,'?pontos',FILTER_DEFAULT);
$key=filter_input(INPUT_GET,'key',FILTER_DEFAULT);

//arrumar algum jeito do usuario ganhar exp
$exp = 50 ;
?>
<!DOCTYPE html>
<html lang="pt-br">
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
            <p>Pontuação Final:<?php echo $pontos;?></p>
        </div>
        <div>
            <p>Acertos:<?php echo $acertos;?></p>
        </div>
        <div>
            <p>Erros: <?php echo $erros;?></p>
        </div>
        <div>
            <?php

            if($tipo == 1){

                print "<p>Atividade Incompleta</p>";

            } else if($tipo == 2){

                print "<p>Atividade Completa</p>";

            }

            ?>
        </div>
        <div>
            <?php

            if($tipo == 1){

                //Atividade Incompleta
                print "<p class='button'><a href='../View/quiz2.php?key={$key}'>Tentar de Novo</a></p>";
                print "<p class='button'><a href='../Controller/modulo.php?key={$key}'>Estudar mais</a></p>";

            } else if($tipo == 2){

                //Atividade Completa
                include_once('../Controller/atualizar_sessao.php');
                $totalpontos = $_SESSION['pontos']+$pontos;
                $totalnivel = $_SESSION['nivel'] + $exp;
                
                if($_SESSION['nivel_desbloqueio'] <= $key){
                    
                    mysqli_query($conexao,"UPDATE `usuarios` SET `nivel` = '{$totalnivel}', `pontos` = '{$totalpontos}', `nivel_desbloqueio` = '{$key}' WHERE `usuarios`.`id` = {$_SESSION['id']}");
                    
                }else{

                    mysqli_query($conexao,"UPDATE `usuarios` SET `nivel` = '{$totalnivel}', `pontos` = '{$totalpontos}' WHERE `usuarios`.`id` = {$_SESSION['id']}"); 

                }

                print "<p class='button'><a href='../View/quiz2.php?key={$key}'>Tentar de Novo</a></p>";
                $key++;
                print "<p class='button'><a href='../Controller/modulo.php?key={$key}'>Proximo</a></p>";


            }
            ?>
        </div>
    </body>
</html>