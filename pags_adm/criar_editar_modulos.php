<?php 

session_start();

include_once('../Controller/protect.php');

include_once('../Controller/conexao.php');

$sql = "SELECT * FROM modulos WHERE id = '{$_REQUEST["id"]}'";

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
            <form id="formcadastro" action="../pags_adm/cadastro_modulos.php?&id=<?php echo $_REQUEST["id"];?>" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Alterar Modulos</h1>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="nome_modulo">Nome do Modulo</label>
                        <input id="nome_modulo" type="text" name="nome_modulo" value="<?php if($_REQUEST["id"]!=0){print $row->nome_modulo;} ?>" required>
                    </div>
                    <div class="input-box">
                        <label for="texto">Texto</label>
                        <input id="texto" type="text" name="texto" value="<?php if($_REQUEST["id"]!=0){print $row->texto;} ?>" required>

                    </div>
                    <div class="input-box">
                        <label for="numeracao">Numeração</label>
                        <input id="numeracao" type="number" name="numeracao" value="<?php if($_REQUEST["id"]!=0){print $row->numeracao;} ?>" required>
                    </div>
                </div>
                <div class="submit-button">
                    <input type="submit" name="submit" id="submit">
                </div>
            </form>
        </div>
        <div class="button">
            <p><a href="../pags_adm/modulos.php" color="black">Voltar</a></p>
        </div>
    </body>
</html>