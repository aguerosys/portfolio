
    @include('layouts.header')

        <div class="container">

            <div class="jumbotron jumbotron-fluid rounded mt-4">
                <div class="container">
                  <h1 class="display-4 text-center">¡Hola mundo, bienvenidos!</h1>
                  <p class="lead text-center">En éste sitio podrás enterarte las nuevas novedades del mundo dev.</p>
                </div>
            </div>

            <h1 class="title-main mt-4">Últimos articulos</h1>

                @foreach ($posts as $post )
                    <div class="rowcard">
                        <img class="img" src="{{ asset('storage').'/'. $post->image }}" alt="">
                        <div class="card">
                            
                            <div class="card-body">
                                <h5 class="card-title">{{$post->name}}</h5>
                                <p class="card-text">{{$post->content}}</p>
                            </div>
                            <p class="text-created">{{ $post->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                    
                @endforeach
        </div>
    @include('layouts.footer')

