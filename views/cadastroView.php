<?php include_once('public/cabecalho.php'); ?>

<title>Cadastro | Lockertec</title>

</head>

<body>

    <?php include_once('public/navbar.php') ?>

    <!-- <div class="container cadastro">
        <h1>Cadastro</h1>
        <p>Se cadastre para poder usar todos os recursos do nosso site.</p>
        <div class="row">
            <div class="col">
                <a class="btn btn-outline-dark botaoCadastro" href="index.php?view=cadastroAlunoForm">Aluno</a>
            </div>
            <div class="col">
                <a class="btn btn-outline-dark botaoCadastro" href="index.php?view=cadastroFuncionarioForm">Funcionário</a>
            </div>
        </div>
    </div> -->

    <div class="container cadastro col-md-8">
        <div class="row gx-5 align-items-center">
            <div class="col-md-6 p-3">
                <h2 class="mt-2">Escolha sua forma de Cadastro</h2>
                <p class="mt-3">Selecione a forma de cadastro para garantir seu acesso ao sistema</p>
                <a href="index.php?view=cadastroAlunoForm" class="btn botaoCadastro">Aluno</a>
                <a href="index.php?view=cadastroFuncionarioForm" class="btn botaoCadastro">Funcionário</a>
            </div>
            <div class="col-6 p-3 d-none d-md-block">
                <img src="img/login.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    
    <script src="resources/js/js.js"></script>

</body>

</html>