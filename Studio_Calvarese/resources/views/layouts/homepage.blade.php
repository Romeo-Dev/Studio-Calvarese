@extends('layouts.app')
@section('home')

    <section id="banner">
        <div class="content">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('storage/images/Matrimoni/Lucia e Stefano/DSC_3754 copia.jpg')}}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('storage/images/Matrimoni/Lucia e Stefano/DSC_3814 copia.jpg')}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('storage/images/Matrimoni/Lucia e Stefano/GDF_7090 copia.jpg')}}" alt="Third slide">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Section -->
    <section>
        <header class="major">
            <h2>Servizi</h2>
        </header>
        <div class="features">
            @foreach($services->chunk(2) as $chunk)
                @foreach($chunk as $service)
                    <article>
                        <span class="icon {{$service->icon}}"></span>
                        <div class="content">
                            <h3>{{$service->service}}</h3>
                            <p>{{$service->descrizione}} <strong>(Registrati per saperne di piu)</strong></p>
                        </div>
                    </article>
                @endforeach
            @endforeach
                <br>
                <a href="{{route('servizi')}}" class="button fit icon fa fa-arrow-circle-right" style="padding-top:18px;" >Learn more...</a>
        </div>
    </section>


    <!-- Section -->
    <section>
        <header class="major">
            <h2 id="notizie">Recent Posts</h2>
        </header>
        <div class="posts">
            @foreach($posts->chunk(3) as $chunk)
                @foreach($chunk as $post)
                    @if($post->paragraph_1 != null)
                    <article style="overflow: hidden">
                        <a href="{{ route('posts',['id'=>$post->id]) }}" class="image"><img src="{{asset('storage/images/'.$post->categoria.'/'.$post->titolo.'/'.$post->path)}}" alt=""  /></a>
                        <h3>{{$post->titolo}} <i>({{$post->categoria}})</i></h3>
                        <p>{{str_limit($post->paragraph_1,$limit=250,$end='...')}}</p>
                        <ul class="actions">
                            <li><a href="{{ route('posts',['id'=>$post->id]) }}" class="button">More</a></li>
                        </ul>
                    </article>
                    @endif
                @endforeach
            @endforeach
        </div>
    </section>


    </div>
    </div>



@endsection
