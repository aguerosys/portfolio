
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
                    <div class="card">
                        <img class="card-img-top" src="" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->name}}</h5>
                            <p class="card-text">{{$post->content}}</p>
                        </div>
                        <img class="card-img-bottom" src="{{$post->image}}" alt="">
                    </div>
                @endforeach
        </div>