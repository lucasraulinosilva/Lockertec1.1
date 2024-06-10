<?php include_once('public/cabecalho.php'); ?>

<title>Recuperar Senha | Lockertec</title>

</head>

<body>

    <?php include_once('public/navbar.php'); ?>

    <div class="container p-4 col-4 EsqueciSenha">
        <div>
            <h2>Recuperação de Senha</h2>
            <form action="index.php" method="GET">
            <input type="hidden" name="view" value="enviarEmailRecuperarSenha">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="rm" placeholder="Digite seu RM" name="rm">
                <label for="rm">Digite seu RM</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" placeholder="Digite seu Email" name="email">
                <label for="email">Digite seu E-mail</label>
            </div>
            <input type="submit" class="btn" value="Recuperar Senha">
            <?php

if(isset($_GET['resultado'])) {
    if ($_GET['resultado'] == 'erro') {
        echo '
        <div class="alert alert-danger mt-2" role="alert">
            RM não cadastrado no sistema, faça sua conta.
        </div>';
    } else if ($_GET['resultado'] == 'certo') {
        echo '
        <div class="alert alert-success mt-2" role="alert">
            Email enviado com sucesso.
        </div>';
    }
}

?>

            </form>
        </div>
    </div>

    <script src="resources/js/js.js"></script>

</body>

</html>