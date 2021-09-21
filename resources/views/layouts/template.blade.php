<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>AgueroDev - Portofolio</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-dark text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger bg-nv-items" href="{{ route('blog') }}">AGUERODEV</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-info text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger bg-nv-items" href="{{ route('aboutme') }}">SOBRE MI</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger bg-nv-items" href="#contact">CONTACTO</a></li>
                        @auth
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger bg-nv-items" href="{{ url('/proyectos') }}">SUBIR PROYECTOS</a></li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    
        <!-- Contact Section-->
        <section class="page-section bg-info text-white" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase mb-0 text-white">CONCTACTO</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-database"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="column">

                    <h5 class="text-center text-uppercase text-white mb-0">Email:</h5>
                    <p class="text-center text-uppercase text-white mx-2" >aguerolink@gmail.com</p>          
                    <h5 class="text-center text-uppercase text-white mb-0">linkedin:</h5>
                    <p class="text-center text-uppercase text-white mx-2" >linkedin.com/in/aguerodev</p>
                </div>
            </div>
        </section>

        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">¿De donde soy?</h4>
                        <p class="lead mb-0">
                            Rio grande,
                            <br />
                            Tierra del fuego 9420
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Puedes seguirme en</h4>
                        
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/aguerodev/"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://github.com/aguerosys"><i class="fab fa-github"></i></a>
                        
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">INTERESES</h4>
                        <p class="lead mb-0">
                            DESARROLLO WEB - DESAROLLO MOVIL - DESARROLLO DE SOFTWARE
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container">
                <small>
                    Copyright &copy; aguerodev.com.ar
                    
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                </small>
            </div>
        </div>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!-- Portfolio Modals-->
        

        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
