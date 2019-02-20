@extends('layouts.app')
@section('home')

    <header id="header">
        <h1 class="major">Contatti</h1>
    </header>
    <section>
        <p>{!! $contact->contact !!}</p>
        <ul class="contact">
            <li class="icon fa-facebook"><a href="{{$contact->facebook}}" target="_blank"><h5> Facebook</h5></a></li>
            <li class="icon fa-instagram"><a href="{{$contact->instagram}}" target="_blank"><h5> Instagram</h5></a></li>
            <li class="fa-envelope-o"><a href="mailto:{{$contact->email}}"><h5>{{$contact->email}}</h5></a></li>
            <li class="fa-phone"><h5>{{$contact->number}}</h5></li>
            <li class="fa-home"><a href="{{$contact->location}}" target="_blank"/>
                <h5>{!! $contact->nome_via !!}</h5>
            </li></a>
        </ul>
    </section>

    <!-- Form -->
    <h3>Lascia un Messaggio</h3>
        @auth
            <form method="post" action="{{route('sendMessageByAuth')}}">
                @csrf
                <div class="row gtr-uniform">
                    <input type="hidden" name="name" id="name" value="{{Auth::user()->name}}">
                    <input type="hidden" name="surname" id="surname" value="{{Auth::user()->surname}}">
                    <input type="hidden" name="email" id="email" value="{{Auth::user()->email}}">
                    <!-- Break -->
                    <div class="col-12">
                        <textarea name="message" id="message" placeholder="Enter your message" rows="6" required></textarea>
                    </div>
                    <!-- Break -->
                    <div class="col-12">
                        <ul class="actions">
                            <li><input type="submit" value="Send Message" class="primary" /></li>
                            <li><input type="reset" value="Reset" /></li>
                        </ul>
                    </div>
                </div>
            </form>
        @endauth

    @guest
    <form method="post" action="{{route('sendMessage')}}">
        @csrf
        <div class="row gtr-uniform">
            <div class="col-6 col-12-xsmall">
                <input type="text" name="nome" id="nome" value="" placeholder="Name"  required/>
            </div>
            <div class="col-6 col-12-xsmall">
                <input type="text" name="cognome" id="cognome" value="" placeholder="Surname"  required/>
            </div>
            <div class="col-6 col-12-xsmall">
                <input type="email" name="email" id="email" value="" placeholder="Email" required/>
            </div>
            <!-- Break -->
            <div class="col-12">
                <textarea name="message" id="message" placeholder="Enter your message" rows="6" required></textarea>
            </div>
            <!-- Break -->
            <div class="col-12">
                <ul class="actions">
                    <li><input type="submit" value="Send Message" class="primary" /></li>
                    <li><input type="reset" value="Reset" /></li>
                </ul>
            </div>
        </div>
    </form>
    @endguest
    </div>
    </div>
@endsection
