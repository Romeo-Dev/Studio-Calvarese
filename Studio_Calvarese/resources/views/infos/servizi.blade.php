@extends('layouts.app')
@section('home')

    <header id="header">
        <h1 class="major">Servizi</h1>
    </header>
    <!-- Section -->
    <section>
        <div class="features">
            @foreach($services->chunk(2) as $chunk)
                @foreach($chunk as $service)
            <article>
                <span class="icon {{$service->icon}}"></span>
                <div class="content">
                    <h3>{{$service->service}}</h3>
                    <p>{{str_limit($service->descrizione,$limit=130,$end='...')}} <br><a href="{{route('registrazione')}}"><strong>Registrati per saperne di piu</strong></a></p>
                </div>
            </article>
            @endforeach
            @endforeach
        </div>
    </section>
</div>
    </div>
@endsection
