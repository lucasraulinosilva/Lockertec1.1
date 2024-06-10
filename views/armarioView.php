<?php include_once('public/cabecalho.php'); ?>

<?php 


    if ( isset($_SESSION['RM']) && isset($_SESSION['senha']) && $_SESSION['RM'] != '' && $_SESSION['senha'] != '') {
        
    } else {
        header('location:index.php?view=login');
    }

    header('location:index.php?view=login');

?>

<title>Armário | Lockertec</title>

</head>
<body>

    <?php include_once('public/navbar.php')?>

    <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="resources/js/js.js"></script>

</body>
</html>