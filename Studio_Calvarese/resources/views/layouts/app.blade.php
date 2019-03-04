<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Studio Fotografico Calvarese</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('css/lightbox.css')}}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <div id="main">
        <div class="inner">

        @yield('home')

    <!-- Sidebar -->
    <div id="sidebar">
        <div class="inner">

            <!-- Menu -->
            <nav id="menu">

                    <img src="{{asset('storage/images/logo/logo modificato.png')}}" alt="" width="100%" height="20%">
                <br>

                <ul>
                    <li><a href="{{url('/home')}}">Home</a></li>
                       <li><span class="opener">Eventi</span>
                    <ul>
                        @foreach($categories as $category)
                       <li><a href="{{ route('event',['categoria'=>$category->categoria]) }}">{{$category->categoria}}</a></li>
                        @endforeach
                    </ul>
                       </li>
                    <li><a href="{{url('/servizi')}}">Servizi</a></li>
                    <li><a href="{{url('/trofei')}}">Trofei</a></li>
                    <li><a href="{{url('/chisiamo')}}">Chi Siamo</a></li>
                    <li><a href="{{url('/contatti')}}">Contatti</a></li>

                    <!-- Authentication Links -->
                    @guest
                        <li>
                            <a  href="{{ route('login') }}">Login</a>
                        </li>
                        @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}">Register</a>
                            </li>
                        @endif
                    @else
                        <li>
                            <span class="opener"> {{ Auth::user()->name }} </span>

                            <ul>
                                @if(Auth::user()->group_id == '2')
                                <li>
                                    <a href="{{route('profilo')}}">Profilo</a>
                                </li>
                                <li>
                                    <a href="{{route('gestioneEvento')}}">Gestisci Eventi</a>
                                </li>

                                <li>
                                    <a href="{{route('gestionePrenotazioni')}}">Prenotazione Appuntamento</a>
                                </li>



{{--                                <li>
                                    <a href="#">Noleggia Attrezzatura</a>
                                </li>--}}
                                @endauth
                                @if(Auth::user()->group_id == '1')
                                    <li><a href="{{url('/dash/home')}}">My Dash</a></li>
                                    @endif
                                <li> <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                                </li>
                            </ul>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                        @endguest
                    <br>
                    <!-- Section -->
                    <section>
                        <header class="major">
                            <h2>Contatti</h2>
                        </header>

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
                </ul>

            </nav>

        </div>
    </div>
</div>


</div>
<!-- Scripts -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/browser.min.js')}}"></script>
<script src="{{asset('js/breakpoints.min.js')}}"></script>
<script src="{{asset('js/util.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
 <script src="{{asset('js/lightbox-plus-jquery.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</div>
</body>
</html>
