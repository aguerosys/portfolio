@extends('layouts.template')

    

        <!-- Masthead-->
        <header class="masthead bg-info text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5 rounded-circle" src="assets/img/anonymus.jpg" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">AGUERODEV</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">SOFTWARE DEVELOPER - PHP - LARAVEL</p>
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">

                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">

                    @foreach ($proyectos as $proyecto)
                        <tr>
                            {{-- <td>{{ ++$i }}</td> --}}
                            
                            {{-- <td>{{ $proyecto->name }}</td>
                            <td>{{ $proyecto->description }}</td>
                            <td>{{ $proyecto->url }}</td>
                            <td>{{ $proyecto->image }}</td> --}}
                        </tr>

                        <!-- Portfolio Item 1-->
                        <div class="col-md-6 col-lg-4 mb-5">
                            
                            <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal{{$proyecto->id}}">
                                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100 bg-info">
                                    <div class="portfolio-item-caption-content text-center text-white"><p>{{ $proyecto->name }}</p></div>
                                </div>

                                <img class="img-fluid" style="height:250px;" src="{{ asset('assets/img/'.$proyecto->image) }}" alt="..." />
                                
                            </div>
                        </div>

                        <!-- Portfolio Modal 1-->
                        <div class="portfolio-modal modal fade" id="portfolioModal{{$proyecto->id}}" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><i class="fas fa-times text-info"></i></span>
                                    </button>
                                    <div class="modal-body text-center">
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-8">
                                                    <!-- Portfolio Modal - Title-->
                                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">{{ $proyecto->name }}</h2>
                                                    <!-- Icon Divider-->
                                                    <div class="divider-custom">
                                                        <div class="divider-custom-line"></div>
                                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                        <div class="divider-custom-line"></div>
                                                    </div>
                                                    <!-- Portfolio Modal - Image-->
                                                    <img class="img-fluid rounded mb-5" src="{{ asset('assets/img/'.$proyecto->image) }}" alt="..." />
                                                    <!-- Portfolio Modal - Text-->
                                                    <p class="mb-5">{{ $proyecto->description }}</p>
                                                    <a href="{{ $proyecto->url }}" class="btn btn-info" >
                                                        <i class="fas fa-link"></i>
                                                        Ir al proyecto en GitHub
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach   

                </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section bg-info text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">SOBRE MI</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ml-auto"><p class="lead">Soy Agüero Brian Ezequiel recibido de Analista de Sistemas en CENT35 Rio Grande, Tierra del fuego, forme mi rumbo como programador hace aproximadamente 5 años incursionando como primer paso en Pascal</p></div>
                    <div class="col-lg-4 mr-auto"><p class="lead">Lo cual me dio la iniciativa de encarar por el desarrollo web iniciando por el FrontEnd que me brindo la curiosidad de trasladarme al BackEnd. Actualmente desarrollo bajo el FrameWork Laravel y estoy convencido de que ¡nunca debes para de aprender!</p></div>
                </div>
                <!-- About Section Button-->
                <div class="text-center mt-4">
                
                </div>
            </div>
        </section>

        <section class="page-section">

            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary">habilidades</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-database"></i></div>
                <div class="divider-custom-line"></div>
            </div>

            <div class="container">
                <p class="text-uppercase ">JavaScript</p>
                <div class="progress mb-2">
                    <div class="progress-bar bg-gray progress-bar-striped"  role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="text-uppercase">Git</p>
                <div class="progress mb-2">
                    <div class="progress-bar bg-secondary progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="text-uppercase">MySQL</p>
                <div class="progress mb-2">
                    <div class="progress-bar bg-gray progress-bar-striped" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="text-uppercase">Laravel</p>
                <div class="progress mb-2">
                    <div class="progress-bar bg-secondary progress-bar-striped" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="text-uppercase">PHP</p>
                <div class="progress mb-2">
                    <div class="progress-bar bg-gray progress-bar-striped" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>

        </section>


  
