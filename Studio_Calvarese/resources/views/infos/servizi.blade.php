@extends('layouts.app')
@section('home')

    <header id="header">
        <h1 class="major" id="servizi">Servizi</h1>
    </header>
    <!-- Section -->
    <section>
        <div class="features">
            @foreach($services->chunk(2) as $chunk)
                @foreach($chunk as $service)
            <article>
                <span class="icon {{$service->icon}}"></span>
                <div class="content">
                    <p><a href="#{{$service->service}}"><h3>{{$service->service}}</h3></a></p>
                </div>
            </article>
            @endforeach
            @endforeach
        </div>
    </section>


    <section>
        @foreach($services as $service)
        <header class="major">
        <h2 class="contact" id="{{$service->service}}">{{$service->service}}</h2>
        </header>
        <div class="features">
        <article>
        <span class="icon {{$service->icon}}"></span>
        <div class="content">
            <p>{{$service->descrizione}}<br><a href="{{route('registrazione')}}"><strong>Registrati per saperne di piu</strong></a></p>
        </div>
        </article>
        </div>
            <br>
            <br>
            <br>
            @endforeach
    </section>
    <a href="#servizi" class="button fit "><i class="fa fa-arrow-up" aria-hidden="true"></i></a>

</div>
    </div>
@endsection
