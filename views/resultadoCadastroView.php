<?php include_once('public/cabecalho.php'); ?>

<title>Resultado do Cadastro | Lockertec</title>

</head>
<body>

    <?php include_once('public/navbar.php')?>
    <?php include_once('bancoDeDados/conectarNoBanco.php')?>

    <div class="container col-4 ConfirmarCadastroFuncionario">
        <h2>Resultado do Cadastro</h2>
        <?php

        if ($_GET['resultado'] == 'aceito') {
            echo '<p>O cadastro foi aceito</p>';
        } else if ($_GET['resultado'] == 'negado') {
            echo '<p>O cadastro foi negado</p>';
        }

        ?>
    </div>

    <script src="resources/js/js.js"></script>

</body>
</html>