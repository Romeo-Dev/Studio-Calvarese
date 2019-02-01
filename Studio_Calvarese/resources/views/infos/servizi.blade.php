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
                    <p>{{$service->descrizione}} <strong>(Registrati per saperne di piu)</strong></p>
                </div>
            </article>
            @endforeach
            @endforeach
        </div>
    </section>
</div>
    </div>
@endsection
