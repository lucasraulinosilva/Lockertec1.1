<?php include_once ('public/cabecalho.php'); ?>

<?php

/*if ( isset($_SESSION['RM']) && isset($_SESSION['senha']) && $_SESSION['RM'] != '' && $_SESSION['senha'] != '') {
    
} else {
    header('https://lockertec.azurewebsites.net/?view=login');
}*/


?>

<title>Armário | Lockertec</title>

</head>

<body>

    <?php include_once ('public/navbar.php'); header('Location: https://lockertec.azurewebsites.net/?view=login');?>

    <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="resources/js/js.js"></script>

</body>

</html>