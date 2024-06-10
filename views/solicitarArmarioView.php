<?php include_once('public/cabecalho.php'); ?>
<?php include_once('controllers/armarioController.php'); ?>

<title>Solicitar Armário | Lockertec</title>

</head>

<body>

    <?php include_once('public/navbar.php'); ?>

    <?php

    $idArmario = $_GET['idArmario'];
    $controller = new ArmarioController();

    $controller->SelecionarArmarioPorId($idArmario);

    $armario = $_REQUEST['armario'];

    ?>

    <div class="container col-6 ReservarArmario">
        <div class="row">
            <div class="col-6 mt-5">
                <?php echo '<img src="' . $armario[6] . '" alt="" class="img-fluid">'; ?>
            </div>
            <div class="col-6">
                <div class="form-floating">
                    <?php echo '<h2 class="mt-1 mb-3">' . $armario[1] . '</h2>'; ?>
                </div>
                <div class="form-floating">
                    <h4>Tamanho: </h4>
                    <?php
                    if ($armario[2] == 1) {
                        echo '<p>Pequeno</p>';
                    } else if ($armario[2] == 2) {
                        echo '<p>Médio</p>';
                    } else if ($armario[2] == 3) {
                        echo '<p>Grande</p>';
                    }
                    ?>
                </div>
                <div class="form-floating">
                    <h4>Andar: </h4>
                    <?php echo '<p>' . $armario[3] . '</p>'; ?>
                </div>
                <div class="form-floating">
                    <h4>Posição: </h4>
                    <?php echo '<p>' . $armario[4] . '</p>'; ?>
                </div>
                <form action="">
                <div class="form-floating">
                    <select class="form-select" id="Periodo" name="periodo">
                        <option value="" selected>Bimestral</option>
                        <option value="">Anual</option>
                    </select>
                    <label for="Periodo" class="form-label">Período</label>
                </div>
                <input type="submit" class="btn mt-3" value="Solicitar Armário">
                </form>
            </div>
        </div>
    </div>

    <script src="resources/js/js.js"></script>

</body>

</html>