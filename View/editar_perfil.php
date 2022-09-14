<?php 
session_start();

include_once('../Controller/protect.php');
include_once('../Controller/atualizar_sessao.php');
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
            <form id="formcadastro" action="../Controller/update_perfil.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Alterar Perfil</h1>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">Nome</label>
                        <input id="nome" type="text" name="nome" value="<?php print $_SESSION['nome']; ?>" required>
                    </div>
                    <div class="input-box">
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email" value="<?php print $_SESSION['login']; ?> " required>
                    </div>
                    <div class="input-box">
                        <label for="senha">Senha Atual</label>
                        <input id="senha" type="password" name="senha" placeholder="Digite sua senha">
                    </div>
                    <div class="input-box">
                        <label for="senha">Nova Senha</label>
                        <input id="re_senha" type="password" name="re_senha" placeholder="Digite sua nova senha">
                    </div>
                </div>
                <div class="submit-button">
                    <input class="button" type="submit" name="submit" id="submit" value="Salvar">
                </div>
            </form>
        </div>
        <div class="button">
            <p><a href="../View/perfil.php">Voltar</a></p>
        </div>
    </body>
</html>