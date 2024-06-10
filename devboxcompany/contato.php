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

        <!-- Contact Section -->
        <div class="w3-container w3-light-grey mt-5" style="padding:128px 16px; padding-bottom: 50px" id="contact">
            <h2 class="w3-center chivo"><b>CONTATO</b></h2>
            <p class="w3-center w3-large">Envie-nos uma mensagem:</p>
            <div style="margin-top:48px">
                <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> São Paulo, BR</p>
                <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Telefone: +55 11 940628922</p>
                <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: devboxcompany@gmail.com</p>
                <br>
                <form action="/action_page.php" target="_blank">
                    <p><input class="w3-input w3-border" type="text" placeholder="Nome" required name="Name"></p>
                    <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
                    <p><input class="w3-input w3-border" type="text" placeholder="Assunto" required name="Subject"></p>
                    <p><input class="w3-input w3-border" type="text" placeholder="Mensagem" required name="Message"></p>
                    <p>
                    <button class="w3-button w3-blue" type="submit">
                        <i class="fa fa-paper-plane"></i> ENVIAR MENSAGEM
                    </button>
                    </p>
                </form>
                <!-- Image of location/map -->
                <div id="mapa">
                    <p  align="center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.595787126375!2d-46.440942985022424!3d-23.547036484689993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce6427fe3f5b23%3A0x54b863d343c81f8f!2sEtec%20Itaquera!5e0!3m2!1spt-BR!2sbr!4v1633719613080!5m2!1spt-BR!2sbr" width="1000" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </p>
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
            <i class="fa fa-twitter fa-3 w3-hover-opacity"></i>
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