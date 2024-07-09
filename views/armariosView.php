<?php include_once ('public/cabecalho.php'); ?>
<?php require_once ('controllers/armarioController.php'); ?>

<title>Armários | Lockertec</title>

</head>

<body>

    <?php include_once ('public/navbar.php') ?>
    <?php include_once ('bancoDeDados/conectarNoBanco.php') ?>

    <div class="container col-11 Armarios">
        <h2>Armários</h2>
        <form action="index.php" method="GET">
            <input type="hidden" name="view" value="armarios">
            <div class="container row mt-5" id="filtros">
                <div class="col-5">
                    <div class="form-floating">
                        <select class="form-select" id="Andar" name="andar">
                            <option value="Primeiro" selected>Primeiro</option>
                            <option value="Segundo">Segundo</option>
                        </select>
                        <label for="Andar" class="form-label">Andar</label>
                    </div>
                </div>
                <div class="col-5">
                    <div class="form-floating">
                        <select class="form-select" id="Tamanho" name="tamanho">
                            <option value="1" selected>Pequeno</option>
                            <option value="2">Médio</option>
                            <option value="3">Grande</option>
                        </select>
                        <label for="Tamanho" class="form-label">Tamanho</label>
                    </div>
                </div>
                <div class="col-2 d-flex justify-content-center" style="height: 50px">
                    <input type="submit" class="btn" value="Filtrar">
                </div>
        </form>
    </div>
    <div class="container row mt-3">
        <?php

        $controller = new ArmarioController();

        //$controller->SelecionarTodosArmarios();
        
        if (isset($_GET['andar']) && isset($_GET['tamanho'])) {
            $controller->FiltrarArmarios($_GET['andar'], $_GET['tamanho']);
        }

        // PHP Data Objects(PDO) Sample Code:
        try {
            $conn = new PDO("sqlsrv:server = tcp:dadossimples.database.windows.net,1433; Database = lockertec_banco", "teste", "qwe456123!");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            print ("Error connecting to SQL Server.");
            die(print_r($e));
        }

        // SQL Server Extension Sample Code:
        $connectionInfo = array("UID" => "teste", "pwd" => "qwe456123!", "Database" => "lockertec_banco", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
        $serverName = "tcp:dadossimples.database.windows.net,1433";
        $conn = sqlsrv_connect($serverName, $connectionInfo);

        $armarios = sqlsrv_query($conn, "SELECT * FROM armario");


        while ($row = sqlsrv_fetch_array($armarios, SQLSRV_FETCH_ASSOC)) {

            if ($row['andar'] == $_SESSION['andar'] && $row['idTamanho'] == $_SESSION['tamanho']) {
                echo '        
                    <div class="card cardArmarios">
                    <a href="index.php?view=solicitarArmario&idArmario=' . $row['idArmario'] . '">
                        <img src="' . $row['imagem'] . '" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">' . $row['nome'] . '</h5>
                            <p class="card-text"></p>
                        </div>
                        </a>
                    </div>';
            } else {

            }

        }

        ?>

    </div>
    </div>

    <script src="resources/js/js.js"></script>

</body>

</html>