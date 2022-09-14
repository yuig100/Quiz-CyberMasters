<?php

    include('../Controller/atualizacao_senha.php');

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
    <div class="container">
        <div class="form-image">
            <img src="../images/image.png">
        </div>
        <div class="form">
            <form method="post" action="">
                <div class="form-header">
                    <div class="title">
                        <h1>Alterar Senha</h1>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <h2><?php echo $_SESSION['user']; ?>,digite sua nova senha!</h2>
                    </div>
                    <div class="input-box">
                        <label for="senha">Nova Senha</label>
                        <input id="senha" type="password" name="password" placeholder="Digite sua nova senha" required>
                    </div>
                </div>
                <div class="submit-button">
                    <input type="submit" name="submit" id="submit">
                </div>
            </form>
        </div>
    </div>
</body>
</html>