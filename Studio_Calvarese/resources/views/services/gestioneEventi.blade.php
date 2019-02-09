@extends('layouts.app')
@section('home')


    <header id="header">
        <h1 class="major">Gestione Eventi</h1>
    </header>

    <br>

    <div class="table-wrapper">
        <table>
            <thead>
            <tr>
                <th>Nome Evento</th>
                <th>Categoria</th>
                <th>Data</th>
                <th>Gestione</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($events as $event)
                <td>{{$event->titolo}}</td>
                <td>{{$event->categoria}}</td>
                    <td>{{date('d F Y',strtotime($event->giorno))}}</td>
                <td>
                    <a href="#"class="button"><span class="icon fas fa-address-book"></span> Impaginato</a>
                    <a href="#"class="button"><span class="icon fas fa-image"></span> Stampe</a>
                    @if($event->pubblicato == 'no')
                    <a href="#"class="button primary"><span class="icon fas fa-align-center"> </span> Rendi pubblico</a>
                    @endif
                </td>
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
            Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Lorem ipsum dolor. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus.
        </blockquote>

        <h3>Stampe</h3>
        <blockquote>
            Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Lorem ipsum dolor. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus.
        </blockquote>

        <h3>Rendi Pubblico</h3>
        <blockquote>
            Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Lorem ipsum dolor. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus.
        </blockquote>
    </section>





    </div>
    </div>
@endsection
