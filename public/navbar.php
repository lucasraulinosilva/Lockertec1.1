<header>
    <nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a href="index.php" class="navbar-brand logo">
                <img src="img/logo3.png" class="navbar-brand" width="60px" alt="">
                Lockertec
            </a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarPrincipal">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarPrincipal">
                <ul class="navbar-nav ml-auto p-3">
                    <li class="nav-item itensNavbar">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item itensNavbar">
                        <a href="https://www.etecitaquera.com.br/" target="_blank" class="nav-link">Etec</a>
                    </li>
                    <?php
                    if ($_SESSION['icone'] == 'img/icone2.png' && $_SESSION['aluno'] == 'aluno') {
                        echo '
                                <li class="nav-item itensNavbar">
                                    <a href="index.php?view=armarios" class="nav-link">Armários</a>
                                </li>
                                <li class="nav-item itensNavbar">
                                    <a href="index.php?view=solicitacoes" class="nav-link">Solicitações</a>
                                </li>';
                    }
                    ?>
                    <?php
                    if ($_SESSION['icone'] != 'img/icone2.png' && $_SESSION['funcionario'] != 'funcionario') {
                        echo '
                                <li class="nav-item itensNavbar">
                                    <a href="index.php?view=cadastro" class="nav-link">Cadastro</a>
                                </li>';
                    }
                    ?>
                    <?php
                    if ($_SESSION['icone'] != 'img/icone2.png' && $_SESSION['funcionario'] != 'funcionario') {
                        echo '
                                <li class="nav-item itensNavbar">
                                    <a href="index.php?view=armario" class="btn btn-outline-light" id="meuArmario">Login</a>
                                </li>';
                    } else if ($_SESSION["aluno"] == 'aluno') {
                        echo '
                        <li class="nav-item itensNavbar">
                            <a href="index.php?view=armario" class="btn btn-outline-light" id="meuArmario">Meu Armário</a>
                        </li>';   
                    }
                    ?>
                    <li class="nav-item itensNavbar">
                        <a><img src="" width=40 style="margin-left: 20px !important; cursor: pointer;" id="icone"></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<ul class="list-group list-group-flush col-2" id="contaOpcoes">
    <p>Conta</p>
    <a class="list-group-item list-group-item-action"> <img src="img/conta.png" alt=""> Gerenciar Conta</a>
    <a class="list-group-item list-group-item-action" href="index.php?view=logout"> <img src="img/sair.png" alt=""> Fazer logout</a>
</ul>

<?php

if ($_SESSION['icone'] == 'img/icone2.png') {
    echo '<script src="resources/js/icone.js" ></script>';
}

?>