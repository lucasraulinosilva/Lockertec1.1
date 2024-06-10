<?php include_once('public/cabecalho.php'); ?>
<?php require_once('controllers/alunoController.php'); ?> 

<title>Cadastro | Lockertec</title>

</head>

<body>

    <?php include_once('public/navbar.php'); ?>

    <?php 

        $controller = new AlunoController();
    
        if (empty($_GET['rm']) && empty($_GET['confirmarSenha']) && empty($_GET['senha'])) {

        } else if ( $controller -> AutenticarConta($_GET['rm']) == 'errado' && $_GET['confirmarSenha'] == $_GET['senha']) {
            header('Location:index.php?view=enviarEmailConfirmarCadastro&rm='.$_GET['rm'].'&nome='.$_GET['nome'].'&sobrenome='.$_GET['sobrenome'].'&ddd='.$_GET['ddd'].'&numero='.$_GET['numero'].'&tipo='.$_GET['tipo'].'&curso='.$_GET['curso'].'&email='.$_GET['email'].'&emailAlternativo='.$_GET['emailAlternativo'].'&senha='.$_GET['senha'].'');
        }

    ?>

    <div class="container p-4 col-md-4" id="form-container">
        <div class="row">
            <div class="">
                <h2>Realize seu cadastro</h2>
                <form action="index.php" method="GET">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="rm" name="rm" placeholder="Digite seu RM" aria-describedby="RMdescricao">
                        <label for="rm" class="form-label">Digite seu RM</label>
                        <div id="RMdescricao" class="form-text">Não compartilhe seu RM com ninguém.</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu Nome">
                        <label for="nome" class="form-label">Digite seu Nome</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="Sobrenome" name="sobrenome" placeholder="Digite seu Sobrenome">
                        <label for="Sobrenome" class="form-label">Digite seu Sobrenome</label>
                    </div>
                    <div class="form-floating mb-4">
                        <div class="row">
                            <div class="col-3">
                                <label for="DDD" class="form-label">DDD</label>
                                <input type="text" class="form-control" id="DDD" disabled name="ddd" value="(11)">
                            </div>
                            <div class="col-5">
                                <label for="NTelefone" class="form-label">Número</label>
                                <input type="text" class="form-control" id="NTelefone" name="numero">
                            </div>
                            <div class="col-4">
                                <label for="Tipo" class="form-label">Tipo</label>
                                <select class="form-select" id="Tipo" name="tipo">
                                    <option value="celular" selected>Celular</option>
                                    <option value="fixo">Fixo</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <select class="form-select" id="Curso" name="curso">
                            <option value="adm" selected>Adm</option>
                            <option value="ds">DS</option>
                        </select>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" placeholder="Digite seu E-mail" name="email">
                        <label for="email" class="form-label">Digite seu E-mail</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="emailAlternativo" placeholder="Digite seu E-mail Alternativo" name="emailAlternativo">
                        <label for="emailAlternativo" class="form-label">Digite seu E-mail Alternativo</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="senha" placeholder="Digite sua Senha" name="senha">
                        <label for="senha" class="form-label">Digite sua Senha</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="ConfirmarSenha" placeholder="Confirme sua Senha" name="confirmarSenha">
                        <label for="ConfirmarSenha" class="form-label">Confirme sua Senha</label>
                    </div>
                    <input type="hidden" value="cadastroAlunoForm" name="view">
                    <input type="submit" class="btn" value="Cadastrar">
                    <?php

                    if (empty($_GET['rm'])) {

                    } else if ( $controller -> AutenticarConta($_GET['rm']) == 'certo' ) {
                        echo '
                        <div class="alert alert-danger mt-2" role="alert">
                            RM já utilizado.
                        </div>';
                    }

                    if(empty($_GET['resultado'])) {

                    } else if ( $_GET['resultado'] == 'certo' ){
                        echo '        
                        <div class="alert alert-success mt-2" role="alert">
                            Cadastro solicitado com sucesso.
                        </div>';
                    }

                    if(empty($_GET['senha']) && empty($_GET['confirmarSenha'])) {

                    } else if ( $_GET['senha'] != $_GET['confirmarSenha'] ) {
                        echo '
                        <div class="alert alert-danger mt-2" role="alert">
                            Senhas diferentes nos campos Senha e Confirmar Senha.
                        </div>';
                    }

                    if(empty($_GET['dados'])) {

                    } else if ( $_GET['dados'] == 'falta' ) {
                        echo '
                        <div class="alert alert-danger mt-2" role="alert">
                            Existem campos nulos no cadastro.
                        </div>';
                    }

                    ?>
                    <a href="index.php?view=login" style="display: block; margin-top: 10px;">Eu já tenho uma conta</a>
                </form>
            </div>
        </div>
    </div>

    <script src="resources/js/js.js"></script>

    <script>
        $(document).ready(function(){
            $('#rm').mask('00000');
            $('#NTelefone').mask('00000-0000');
            $('#senha').mask('AAAAAAAAAAAAAAA');
            $('#ConfirmarSenha').mask('AAAAAAAAAAAAAAA');
        });
    </script>

</body>

</html>