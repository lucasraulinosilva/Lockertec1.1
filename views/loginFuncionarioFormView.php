<?php include_once('public/cabecalho.php'); ?>
<?php require_once('controllers/funcionarioController.php'); ?> 

<title>Login | Lockertec</title>

</head>
<body>

    <?php include_once('public/navbar.php'); ?>

    <?php 

    $funcionario = new FuncionarioController();

        if (isset($_GET['email']) && isset($_GET['senha'])) {
            if ($funcionario -> AutenticarLogin() == true ) {
                header('Location:index.php?view=homeFuncionario');
            }
        }

    ?>

    <div class="container p-4 col-md-4" id="form-container">
        <div class="row">
            <div class="">
                <h2>Realize seu login</h2>
                <form action="index.php" method="GET">
                    <input type= "hidden" value="loginFuncionarioForm" name="view">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" placeholder="Digite seu E-mail" name="email">
                        <label for="email" class="form-label">Digite seu E-mail</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="senha" placeholder="Digite sua Senha" name="senha">
                        <label for="senha" class="form-label">Digite sua Senha</label>
                    </div>
                    <input type="submit" class="btn botaoCadastro" value="Logar" style="margin-left: 0;">
                    <a href="index.php?view=cadastro" style="display: block; margin-top: 10px;">Eu não tenho uma conta</a>
                </form>
            </div>
        </div>
    </div>

    <script src="resources/js/js.js"></script>

    <script>
        $(document).ready(function(){
            $('#senha').mask('AAAAAAAAAAAAAAA');
        });
    </script>

</body>
</html>    