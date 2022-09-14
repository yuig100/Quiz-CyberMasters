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
            <form action="../Controller/recuperar_senha.php" method="post">
                <div class="form-image">
                    <img src="../images/image.png">
                </div>
                <div>
                    <h1>Recuperar Senha</h1>
                </div>
                <div>
                    <label for="email">E-mail</label>
                    <input id="email" type="email" name="email" placeholder="Digite seu email" required>
                </div>
                <div class="submit-button">
                    <input class="button"type="submit" name="submit" id="recuperar_senha">
                </div>
            </form>
            <div class="submit-button">
                <a href="../index.php"><button class="button">Voltar</button></a>
            </div>
        </div>
    </body>
</html>