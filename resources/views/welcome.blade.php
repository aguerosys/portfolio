@extends('layouts.template')

    @section('content')

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


    @endsection