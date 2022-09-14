<?php 

session_start();

include_once('../Controller/protect.php');

include_once('../Controller/conexao.php');
$sql = "SELECT * FROM usuarios WHERE id = '{$_REQUEST["id"]}'";

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
            <form id="formcadastro" action="../pags_adm/cadastro_usuarios.php?&id=<?php echo $_REQUEST["id"];?>" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Alterar Usuarios</h1>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">Nome</label>
                        <input id="nome" type="text" name="nome" value="<?php if($_REQUEST["id"]!=0){print $row->nome;} ?>" required>
                    </div>
                    <div class="input-box">
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email" value="<?php if($_REQUEST["id"]!=0){print $row->email;} ?>" required>

                    </div>
                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input id="senha" type="text" name="senha" value="" required>
                    </div>
                    <div class="input-box">
                        <label for="tipo">Tipo</label>
                        <input id="tipo" type="number" name="tipo" value="<?php if($_REQUEST["id"]!=0){print $row->tipo; }?>">
                    </div>
                    <div class="input-box">
                        <label for="nivel">Nivel</label>
                        <input id="nivel" type="number" name="nivel" value="<?php if($_REQUEST["id"]!=0){print $row->nivel;} ?>" required>
                    </div>
                    <div class="input-box">
                        <label for="pontos">Pontos</label>
                        <input id="pontos" type="number" name="pontos" value="<?php if($_REQUEST["id"]!=0){print $row->pontos;} ?>" required>
                    </div>
                    <div class="input-box">
                        <label for="nivel_desbloqueio">Nivel de Desbloqueio</label>
                        <input id="nivel_desbloqueio" type="number" name="nivel_desbloqueio" value="<?php if($_REQUEST["id"]!=0){print $row->nivel_desbloqueio;} ?>" required>
                    </div>
                </div>
                <div class="submit-button">
                    <input type="submit" name="submit" id="submit">
                </div>
            </form>
        </div>
        <div class="button">
            <p><a href="../pags_adm/usuarios.php">Voltar</a></p>
        </div>
    </body>
</html>