<!-- Conexão da folha de estilos -->
<link rel="stylesheet" href="../css/navbar.css">

<!-- JavaScript -->
<script src="../js/mobile-navbar.js"></script>

<header>
    <nav>
        <a class="logo" href="/"></a>
        <div class="mobile-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-list">
            <li><a href="../View/painel.php">Inicio</a></li>
            <li><a href="../View/perfil.php">Perfil</a></li>
            <li class="ativo" ><a href="../View/adm.php">Adm</a></li>
        </ul>
    </nav>
</header>

<!-- Validação do tipo de usuario -->
<script>

    if(<?php echo $_SESSION['tipo'] ?> == 1){

        var tipo = document.querySelector(".ativo");

        tipo.style.display = "inherit";

    } else if(<?php echo $_SESSION['tipo'] ?> == 0){

        var tipo = document.querySelector(".ativo");

        tipo.style.display = "none";

    }

</script>