<?php

session_start();
if(isset($_SESSION['login'])) {
    header('Location: View/painel.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!--Tags Meta-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="Quiz CyberMasters">

        <!--Configuração do favicon-->
        <link rel="icon" type="image/x-icon" href="favic.ico">

        <!--Titulo da guia do navegador-->
        <title>CYBERMASTERS</title>

        <!--Google Fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@800&family=Oswald&family=PT+Serif:wght@700&display=swap" rel="stylesheet">

        <!-- Conexão da folha de estilos -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/formulario.css">
    </head>
    <body>
        <div class="form-image">
            <img src="images/image.png">
        </div>
        <div>
            <form action="Controller/login.php" method="post">
                <h3>Entrar</h3>
                <input type="email" name="login" placeholder="Seu login..."/>
                <input type="password" name="senha" placeholder="Sua senha..." class="senha"/>
                <img class="btn" src="images/ocultar.png" alt="">
                <input class="button" type="submit" name="entrar" value="Entrar"/>
            </form>
        </div>
        <div>
            <p><a href="View/recuperacao.php">Esqueci minha senha</a></p>
        </div>
        <div>
            <p>Novo usuário?<a href="View/cadastro.php">Registre-se</a></p>
        </div>
        <script>
            const senha = document.querySelector('.senha');
            const btn = document.querySelector('.btn');

            btn.onclick = () =>
            {

                if(senha.type == 'password'){

                    senha.type = 'text'

                } else {

                    senha.type = 'password'

                }

            }

        </script>
    </body>
</html>