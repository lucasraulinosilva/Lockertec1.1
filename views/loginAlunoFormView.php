<?php 
include_once('public/cabecalho.php'); 
require_once('controllers/alunoController.php'); 
$aluno = new AlunoController();

if (isset($_GET['rm']) && isset($_GET['senha'])) {
    if ($aluno -> AutenticarLogin($_GET['rm'], $_GET['senha']) == 'certo' ) {
        include('public/posLogin.php');
    } 
}

?> 

<title>Login | Lockertec</title>

</head>

<body>

    <?php include_once('public/navbar.php'); ?>

    <div class="container p-4 col-md-4" id="form-container">
        <div class="row">
            <div class="">
                <h2>Realize seu login</h2>
                <form action="index.php" method="GET">
                    <input type="hidden" name="view" value="loginAlunoForm">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="rm" placeholder="Digite seu RM" name="rm">
                        <label for="rm" class="form-label">Digite seu RM</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="senha" placeholder="Digite sua Senha" name="senha">
                        <label for="senha" class="form-label">Digite sua Senha</label>
                    </div>
                    <input type="submit" class="btn botaoCadastro" value="Logar" style="margin-left: 0;">
                    <?php
                        if (isset($_GET['rm']) && isset($_GET['senha'])) {
                            if ($aluno -> AutenticarLogin($_GET['rm'], $_GET['senha']) == 'errado' ) {
                                echo '
                                <div class="alert alert-danger mt-2" role="alert">
                                    RM ou Senha inválidos.
                                </div>';
                            } 
                        }
                    ?>
                    <a href="index.php?view=cadastro" style="display: block; margin-top: 10px;">Eu não tenho uma conta</a>
                    <a href="index.php?view=recuperarSenhaAluno" style="display: block; margin-top: 10px;">Esqueci minha senha</a>
                </form>
            </div>
        </div>
    </div>

    <script src="resources/js/js.js"></script>

    <script>
        $(document).ready(function(){
            $('#rm').mask('00000');
            $('#senha').mask('AAAAAAAAAAAAAAA');
        });
    </script>

</body>

</html>