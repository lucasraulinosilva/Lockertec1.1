<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dev Box</title>

        <!-- Link Css -->
        <link rel="stylesheet" href="estilo.css">
        <link rel="stylesheet" href="estiloNw.css">

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="shortcut icon" type="image/png" href="img/LogoDevBoxShortIcon.png">

        <!-- Link Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer></script>

        <!-- Font Chivo -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Chivo:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
        
    
        <header>
            <nav class="navbar navbar-expand-sm navbar-light cabecalho fixed-top bg-dark">
                <div class="container">
                    <a href="index.php" class="navbar-brand" style="font-size: 25px;">
                        <img src="img/LogoDevBoxShortIcon.png" style="width: 50px;">
                        <b style="color: #e6e6e6">DEVBOX</b>
                    </a>
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar-principal">
                        <span class="navbar-toggler-icon"> </span>
                    </button>
                    <div class="collapse navbar-collapse" id="#navbar-principal" style="margin-left: 800px !important;">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link text-light">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="sobre.php" class="nav-link text-light">Sobre</a>
                            </li>
                            <li class="nav-item">
                                <a href="contato.php" class="nav-link text-light">Contato</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <!-- About Section -->
        <div class="w3-container" style="padding:50px 16px" id="about">
            
            
            <!-- TESTE -->

            <div class="container col-11 col-md-9 mb-4" style="margin-top: 100px;" id="form-container" >
                <div class="row align-items-center gx-5">
                    <div class="col-md-8 order-md-2">
                        <h2 class="w3-left chivo"><b>SOBRE A EMPRESA</b></h2>
                        <div class="form-floating mt-4">
                            <br>
                            <p class="chivo">
                                A Devbox é uma empresa de desenvolvimento de softwares, estabelecida em 2021, com o intuito de ajudar e favorecer nossos clientes com nossos projetos. Entregando soluções para problemas que são deixados de lado, mas quando resolvidos, pode-se notar uma crescente em várias áreas, principalmente no tempo, que é muito importante e curto na vida de todas as pessoas.
                                <br>
                                Há um esforço para ser uma empresa reconhecida pelo comprometimento com o resultado final e preocupação em exceder as expectativas dos clientes. Nossa equipe trabalha para alcançar os mais altos padrões de qualidade e é composta por profissionais especializados em diferentes plataformas tecnológicas.</p>
                        </div>
                    </div>
                    <!--div da imagem-->
                    <div class="col-md-4 order-md-1">
                        <div class="col-12">
                            <img src="img/LogoDevBox.png" class="img-fluid"> 
                        </div>
                    </div>
                </div>
            </div>

            <div class="container col-11 col-md-9" id="form-container" >
                <div class="row align-items-center gx-5">
                    <div class="col-md-6 order-md-2">
                        <h2 class="chivo" style="text-align: center;"><b>MISSÃO</b></h2>
                        <div class="form-floating mb-3 mt-4">
                            <br>
                            <p class="chivo" style="text-align: center;">
                                Pensar de uma forma revolucionária no mercado, buscando sempre surpreender o cliente.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 order-md-2">
                        <h2 class="chivo" style="text-align: center;"><b>VISÃO</b></h2>
                        <div class="form-floating mb-3 mt-4">
                            <br>
                            <p class="chivo" style="text-align: center;">
                            Expandir e conquistar espaços por meio da inovação alcançando melhores níveis de qualidades nos nossos produtos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TESTE -->

            <!--Valores-->
            <h3 class="w3-center chivo" style='padding-top: 50px'><b>VALORES</b></h3>
            <div class="w3-row-padding w3-center" style="margin-top:64px;">
                <div class="w3-quarter sombraVermelha p-3" style="transition: 0.5s;">
                    <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
                    <p class="w3-large chivo">CRIATIVIDADE</p> 
                </div>
                <div class="w3-quarter sombraVermelha p-3" style="transition: 0.5s;">
                    <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
                    <p class="w3-large chivo">AMOR</p>           
                </div>
                <div class="w3-quarter sombraVermelha p-3" style="transition: 0.5s;">
                    <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
                    <p class="w3-large chivo">DISCIPLINA</p>  
                </div>
                <div class="w3-quarter sombraVermelha p-3" style="transition: 0.5s;">
                    <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
                    <p class="w3-large chivo">PROFISSIONALISMO</p>
                </div>
            </div>
        </div>


        <!-- Footer -->
    <footer class="text-center text-lg-start bg-dark text-white">
    <!-- Section: Social media -->
    <section
        class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
    >
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
        <span>Fique conectado com a DevBox por meio das redes sociais:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
            <i class="fa fa-facebook-official fa-3 w3-hover-opacity"></i>
            <i class="fa fa-instagram fa-3 w3-hover-opacity"></i>
            <i class="fa fa-linkedin fa-3 w3-hover-opacity"></i>
            <i class="fa fa-github fa-3 w3-hover-opacity"></i>
        </div>
        <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
                <i class="fas fa-gem me-3"></i>DEV BOX
            </h6>
            <p>
            A Devbox é uma empresa de desenvolvimento de softwares, estabelecida em 2021, com o intuito de ajudar e favorecer nossos clientes com nossos projetos.
            </p>
            </div>
            <!-- Grid column -->

            
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
                LINKS ÚTEIS
            </h6>
            <p>
                <a href="index.php" class="text-reset">Home</a>
            </p>
            <p>
                <a href="sobre.php" class="text-reset">Sobre a DevBox</a>
            </p>
            <p>
                <a href="contato.php" class="text-reset">Contato</a>
            </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
                Contato
            </h6>
            <p><i class="fa fa-home me-3"></i> R. Virgínia Ferni, 400 - Itaquera</p>
            <p>
                <i class="fa fa-envelope me-3"></i>
                devbox@gmail.com
            </p>
            <p><i class="fa fa-phone me-3"></i> +55 11 94002-8922</p>
            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    </footer>
    <!-- Footer -->


        <script src="app.js"></script>
    </body>
</html>