<?php include_once('public/cabecalho.php'); ?>

<title>Login | Lockertec</title>

</head>

<body>

    <?php include_once('public/navbar.php') ?>

    <!-- <div class="container login">
        <h1>Login</h1>
        <p>Entre na sua conta para poder usar todos os recursos do nosso site.</p>
        <div class="row">
            <div class="col">
                <a class="btn btn-outline-dark botaoLogin" href="index.php?view=loginAlunoForm">Aluno</a>
            </div>
            <div class="col">
                <a class="btn btn-outline-dark botaoLogin" href="index.php?view=loginFuncionarioForm">Funcionário</a>
            </div>
        </div>
    </div> -->

    <div class="container cadastro col-md-8">
        <div class="row gx-5 align-items-center">
            <div class="col-4 p-3 d-none d-md-block">
                <img src="img/registro.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-8 p-3">
                <h2 class="mt-2">Escolha sua forma de Login</h2>
                <p class="mt-3">Selecione a forma de login para garantir seu acesso ao sistema</p>
                <a href="index.php?view=loginAlunoForm" class="btn botaoCadastro">Aluno</a>
                <a href="index.php?view=loginFuncionarioForm" class="btn botaoCadastro">Funcionário</a>
            </div>
        </div>
    </div>

    <script src="resources/js/js.js"></script>


</body>

</html>