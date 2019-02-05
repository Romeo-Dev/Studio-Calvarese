@extends('layouts.app')
@section('home')

    <section id="banner">
        <div class="content">
            <header>

                <h1>Hi, This is my Web blog <br />
                    Speak a Game</h1>
                <p>A free Site with login and registration</p>
            </header>
            <p>Aenean ornare velit lacus, ac varius enim ullamcorper eu. Proin aliquam facilisis ante interdum congue. Integer mollis, nisl amet convallis, porttitor magna ullamcorper, amet egestas mauris. Ut magna finibus nisi nec lacinia. Nam maximus erat id euismod egestas. Pellentesque sapien ac quam. Lorem ipsum dolor sit nullam.</p>
            <ul class="actions">
                <li><a href="#" class="button big">Learn More</a></li>
            </ul>
        </div>
        <span class="image object">
            <img src="images/home.jpg" alt="" />
        </span>
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
                <a href="{{route('servizi')}}" class="button fit icon fa fa-arrow-circle-right">Learn more..</a>
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
                    <article style="overflow: hidden">
                        <a href="{{ route('posts',['id'=>$post->id]) }}" class="image"><img src="{{asset('images/'.$post->categoria.'/'.$post->titolo.'/'.$post->path)}}" alt=""  /></a>
                        <h3>{{$post->titolo}} <i>({{$post->categoria}})</i></h3>
                        <p>{{str_limit($post->paragraph_1,$limit=250,$end='...')}}</p>
                        <ul class="actions">
                            <li><a href="{{ route('posts',['id'=>$post->id]) }}" class="button">More</a></li>
                        </ul>
                    </article>
                @endforeach
            @endforeach
        </div>
    </section>


    </div>
    </div>



@endsection
