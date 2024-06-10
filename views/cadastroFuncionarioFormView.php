<?php include_once('public/cabecalho.php'); ?>

<title>Cadastro | Lockertec</title>

</head>

<body>

    <?php include_once('public/navbar.php'); ?>

    <div class="container p-4 col-md-4" id="form-container">
        <div class="row">
            <div class="">
                <h2>Realize seu cadastro</h2>
                <form>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" placeholder="Digite seu E-mail">
                        <label for="email" class="form-label">Digite seu E-mail</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="emailAlternativo" class="form-control" id="emailAlternativo" placeholder="Digite seu E-mail Alternativo">
                        <label for="emailAlternativo" class="form-label">Digite seu E-mail Alternativo</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="senha" placeholder="Digite sua Senha">
                        <label for="senha" class="form-label">Digite sua Senha</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="ConfirmarSenha" placeholder="Confirme sua Senha">
                        <label for="ConfirmarSenha" class="form-label">Confirme sua Senha</label>
                    </div>
                    <input type="submit" class="btn" value="Cadastrar" style="margin-left: 0;">
                    <a href="index.php?view=login" style="display: block; margin-top: 10px;">Eu já tenho uma conta</a>
                </form>
            </div>
        </div>
    </div>

    <script src="resources/js/js.js"></script>

    <script>
        $(document).ready(function(){
            $('#senha').mask('AAAAAAAAAAAAAAA');
            $('#ConfirmarSenha').mask('AAAAAAAAAAAAAAA');
        });
    </script>

</body>

</html>