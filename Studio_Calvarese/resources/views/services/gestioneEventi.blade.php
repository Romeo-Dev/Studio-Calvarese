@extends('layouts.app')
@section('home')

    @if(session('alertdanger'))
    <div class="alert alert-danger" role="alert">
        {{session('alertdanger')}}
    </div>
        @elseif(session('alertsucc'))
        <div class="alert alert-success" role="alert">
            {{session('alertsucc')}}
        </div>
        @elseif(session('alert'))
        <div class="alert alert-warning" role="alert">
            {{session('alert')}}
        </div>
    @endif

    <header id="header">
        <h1 class="major">Gestione Eventi</h1>
    </header>

    <br>

    <div class="table-wrapper">
        <table style="border-collapse:separate">
            <thead>
            <tr>
                <th>Nome Evento</th>
                <th>Categoria</th>
                <th>Data</th>
                <th>Impaginati</th>
                <th>Stampe</th>
              {{--  <th>Pubblicazione</th>--}}
            </tr>
            </thead>
            <tbody>

            <tr>
                @foreach($events as $event)
                <td>{{$event->titolo}}</td>
                <td>{{$event->categoria}}</td>
                    <td>{{date('d F Y',strtotime($event->giorno))}}</td>
                    @if($event->impaginato != 'NULL')
                    <td><a href="{{asset('storage/images/'.$event->categoria.'/'.$event->titolo.'/'.$event->impaginato)}}"class="button primary"><span class="icon fas fa-address-book"></span> Impaginato</a></td>
                    @else
                        <td><a href="#"class="button primary disabled"><span class="icon fas fa-address-book"></span> Impaginato</a></td>
                        @endif
                        <td><a href="{{ route('stampe',['idst'=>$event->id]) }}"class="button primary"><span class="icon fas fa-image"></span> Stampe</a></td>
            </tr>
            @endforeach

            </tbody>
        </table>
    </div>

    <section>
        <header class="major">
            <h2>Info Gestione</h2>
        </header>

        <h3>Impaginato</h3>
        <blockquote>
            {{$impaginato->descrizione}}
        </blockquote>

        <h3>Stampe</h3>
        <blockquote>
            {{$stampe->descrizione}}
          </blockquote>

{{--        <h3>Rendi Pubblico</h3>
        <blockquote>
            Questa funzionalità permette di rendere pubblico e visibile l'evento da te scelto a tutti gli utenti (ed anche semplici visitatori) del sito,
            garantendo così un'esperienza senza eguali, ricca di meravigliosi momenti ed indimenticabili scatti fotografici.
            E' possibile pubblicare SOLO gli eventi appartenenti all'utente loggato.
        </blockquote>--}}
    </section>

    </div>
    </div>
@endsection
