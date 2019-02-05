@extends('layouts.app')
@section('home')

    <header id="header">
        <h1 class="major">Trofei</h1>
    </header>
    <!-- Section -->
    <section>
        @foreach($all as $trofeo)
        <dl>
            <span class="image fit"><img src="{{asset('')}}" alt="" /></span>
            <dt>Data</dt><dt>Titolo</dt>
            <dd>
                <p>Descrizione</p>
            </dd>
        </dl>
        @endforeach
    </section>
    </div>
    </div>
@endsection
