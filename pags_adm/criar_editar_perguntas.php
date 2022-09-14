<?php 

session_start();

include_once('../Controller/protect.php');

include_once('../Controller/conexao.php');
$sql = "SELECT * FROM pergunta WHERE id = '{$_REQUEST["id"]}'";

$res = $conexao->query($sql);

$row = $res->fetch_object();

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
        <link rel="stylesheet" href="../css/formulario.css">   

    </head>  
    <body>
        <div>
            <form id="formcadastro" action="../pags_adm/cadastro_perguntas.php?&id=<?php echo $_REQUEST["id"];?>" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Alterar Perguntas</h1>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="titulo">Titulo</label>
                        <input id="titulo" type="text" name="titulo" value="<?php if($_REQUEST["id"]!=0){print $row->titulo;} ?>" required>
                    </div>
                    <div class="input-box">
                        <label for="alternativas">Alternativas</label>
                        <input id="alternativas" type="text" name="alternativas" value="<?php if($_REQUEST["id"]!=0){print $row->alternativas;} ?>" required>

                    </div>
                    <div class="input-box">
                        <label for="correta">Correta</label>
                        <input id="correta" type="number" name="correta" value="<?php if($_REQUEST["id"]!=0){print $row->correta;} ?>" required>
                    </div>
                    <div class="input-box">
                        <label for="modulo">Modulo</label>
                        <input id="modulo" type="number" name="modulo" value="<?php if($_REQUEST["id"]!=0){print $row->modulo;} ?>" required>
                    </div>
                    <div class="input-box">
                        <label for="exp">Experiencia</label>
                        <input id="exp" type="number" name="exp" value="<?php if($_REQUEST["id"]!=0){print $row->exp;} ?>" required>
                    </div>
                </div>
                <div class="submit-button">
                    <input type="submit" name="submit" id="submit">
                </div>
            </form>
        </div>
        <div class="button">
            <p><a href="../pags_adm/perguntas.php">Voltar</a></p>
        </div>
    </body>
</html>