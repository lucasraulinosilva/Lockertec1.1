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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"
        defer></script>

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




    <!-- Sidebar on small screens when clicking the menu icon -->
    <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large"
        style="display:none" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close
            ×</a>
        <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button letreiroSemSombra">SOBRE</a>
        <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button letreiroSemSombra">PREÇO</a>
        <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button letreiroSemSombra">CONTATO</a>
    </nav>


    <!-- Header with full-height image -->
    <header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
        <div class="w3-display-left w3-text-white" style="padding:48px">
            <span class="w3-jumbo w3-hide-small letreiro ">DEV BOX</span><br>
            <span class="w3-xxlarge w3-hide-large w3-hide-medium">Desenvolvendo fora da caixinha.</span><br>
            <span class="w3-large letreiro">Desenvolvendo fora da caixa.</span>
            <p><a href="sobre.php"
                    class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off letreiroSemSombra">Conheça
                    mais!</a></p>
        </div>
        <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
            <a href="https://www.facebook.com/Dev-Box-Company-104500885626103"><i class="fa fa-facebook-official fa-5 w3-hover-opacity"></i></a>
            <a href="https://www.instagram.com/devboxcompany_21/"><i class="fa fa-instagram fa-5 w3-hover-opacity"></i></a>
            <a href="www.linkedin.com/in/devbox-company-4a636b241"><i class="fa fa-linkedin fa-5 w3-hover-opacity"></i></a>
            <a href="https://twitter.com/TecLocker"><i class="fa fa-twitter fa-5 w3-hover-opacity"></i></a>
        </div>
    </header>


    <!-- Promo Section - "We know design" -->
    <div class="container col-6 mt-5 mb-5 p-5">
        <div class="row">
            <div class="col-12 p-5" style="border: 2px solid #ccc; border-radius: 15px">
                <div class="col-12 d-flex justify-content-center">
                    <img src="img/privacidade.png" alt="" style="width: 100px;">
                </div>
                <div class="col-12 d-flex justify-content-center mt-4">
                    <h2>Privacidade</h2>
                </div>
                <div class="col-12 d-flex justify-content-center mt-4" style="text-align: center;">
                    <p>Cada software da Devbox é feito para proteger sua privacidade. Não criamos perfis de usuários, não vendemos informações pessoais nem compartilhamos dados com terceiros para uso em publicidade ou marketing.</p>
                </div>
            </div>
            <div class="container mt-4 p-5" style="border: 2px solid #ccc; border-radius: 25px;">
                <div class="col-12 d-flex justify-content-center">
                    <img src="img/praticidade.png" alt="" style="width: 100px;">
                </div>
                <div class="col-12 d-flex justify-content-center mt-4">
                    <h2>Praticidade</h2>
                </div>
                <div class="col-12 d-flex justify-content-center mt-4" style="text-align: center;">
                    <p>Aqui você encontra tudo o que precisa de forma diligente, acessível e de qualidade.</p>
                </div>
            </div>
            <div class="container mt-4 mb-5 p-5" style="border: 2px solid #ccc; border-radius: 25px;">
                <div class="col-12 d-flex justify-content-center">
                    <img src="img/praticidade.png" alt="" style="width: 100px;">
                </div>
                <div class="col-12 d-flex justify-content-center mt-4">
                    <h2>Nossa meta é sua aprovação</h2>
                </div>
                <div class="col-12 d-flex justify-content-center mt-4" style="text-align: center;">
                    <p>A Devbox almeja que seus clientes se sintam satisfeitos com os serviços prestados e tendo suas necessidades atendidas. Buscando assentimento em todas as etapas.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Skills Section -->
    <div class="w3-container w3-padding-64 chivo" style="background-color: #4D5256;">
        <div class="w3-row-padding">
            <div class="w3-col m6" style="color: white;">
                <h3>Nossas Habilidades</h3>
                <p>Estamos sempre aprimorando nossas habilidades em todos os sentidos do nosso ramo procurando entregar um trabalho de qualidade.</p>
                <p>Temos funcionários capacitados em todas as áreas do desenvolvimento de sistemas:</p>
            </div>
            <div class="w3-col m6" style="color: white;">
                <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>Desenvolvimento Front-end</p>
                <div>
                    <div class="w3-container w3-center" style="width:90%; background-color: #4a97ff;">90%</div>
                </div>
                <p class="w3-wide"><i class="fa fa-code w3-margin-right" style="margin-top: 10px;"></i>Desenvolvimento Backend</p>
                <div>
                    <div class="w3-container w3-center" style="width:85%; background-color: #4a97ff;">85%
                    </div>
                </div>
                <p class="w3-wide"><i class="fa fa-camera-retro w3-margin-right" style="margin-top: 10px;" ></i>Photoshop</p>
                <div>
                    <div class="w3-container w3-center" style="width:60%; background-color: #4a97ff;">60%</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Nossos Softwares -->

    <section id="projects">
        <div class="projects container chivo">
            <div class="projects-header">
                <h1 class="chivo"><b>NOSSO SOFTWARE</b></h1>
            </div>
            <div class="all-projects ">
                <div class="project-item mb-4">
                    <div class="project-info" style="background-color: #4D5256;">
                        <h1>LOCKERTEC</h1>
                        <h2>Gerenciador</h2>
                        <p>Gerenciador focado em facilitar a locação de armários escolares para alunos
                            e o controle por parte da secretaria acadêmica.   
                        </p>
                    </div>
                    <div class="project-img">
                        <img src="img/lockerlogo.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal for full size images on click-->
    <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
        <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright"
            title="Close Modal Image">×</span>
        <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
            <img id="img01" class="w3-image">
            <p id="caption" class="w3-opacity w3-large"></p>
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
            <a href="https://www.facebook.com/Dev-Box-Company-104500885626103"><i class="fa fa-facebook-official fa-5 w3-hover-opacity"></i></a>
            <a href="https://www.instagram.com/devboxcompany_21/"><i class="fa fa-instagram fa-5 w3-hover-opacity"></i></a>
            <a href="https://www.linkedin.com/in/devbox-company-4a636b241"><i class="fa fa-linkedin fa-5 w3-hover-opacity"></i></a>
            <a href="https://twitter.com/TecLocker"><i class="fa fa-twitter fa-5 w3-hover-opacity"></i></a>
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