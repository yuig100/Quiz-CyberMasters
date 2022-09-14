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
        <div class="container">
            <div class="form-image">
                <img src="../images/image.png">
            </div>
            <div class="form">
                <form id="formcadastro" action="../Controller/cadastro.php" method="post">
                    <div class="form-header">
                        <div class="title">
                            <h1>Registor</h1>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="input-box">
                            <label for="name">Nome Completo</label>
                            <input id="name" type="text" name="name" placeholder="Digite seu nome" required>
                        </div>
                        <div class="input-box">
                            <label for="email">E-mail</label>
                            <input id="email" type="email" name="email" placeholder="Digite seu email" required>
                        </div>
                        <div class="input-box">
                            <label for="senha">Senha</label>
                            <input id="senha" type="password" name="password" placeholder="Digite sua senha" required>
                        </div>
                        <div class="input-box">
                            <label for="senha">Repita sua Senha</label>
                            <input id="re_senha" type="password" name="re_senha" placeholder="Digite sua senha" required>
                        </div>
                    </div>
                    <div class="submit-button">
                        <input class="button" type="submit" name="submit" id="submit">
                    </div>
                </form>
            </div>
            <div>
                <p>Já possui uma conta?<a href="../index.php">Faça Login</a></p>
            </div>
        </div>
    </body>
</html>