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

                    <img src="{{asset('images/logo/logoCalv.png')}}" alt="" width="100%" height="20%">
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
                                <li>
                                    <a href="{{route('profilo')}}">Profilo</a>
                                </li>
                                <li>
                                    <a href="#">Gestisci Eventi</a>
                                </li>
                                <li>
                                    <a href="#">Prenotazione Evento</a>
                                </li>
                                <li>
                                    <a href="#">Noleggia Attrezzatura</a>
                                </li>
                                @if(Auth::user()->group_id == '1')
                                    <li><a href="#">My Dash</a></li>
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

                            <li href="#" class="icon fa-facebook"><a href="https://www.facebook.com/StudiofotograficoCalvarese/" target="_blank"> Facebook</a></li>
                            <li href="#" class="icon fa-instagram"><a href="https://www.instagram.com/studio_fotografico_calvarese/?hl=it&fbclid=IwAR24JO5EwH9-IKbDrFygLfcLsO6iBnE3N4SYsCLl9vTZHDv8MJO838K9kLs" target="_blank"> Instagram</a></li>
                            <li class="fa-envelope-o"><a href="mailto:fotocalvarese@gmail.com">fotocalvarese@gmail.com</a></li>
                            <li class="fa-phone">0863 867767</li>
                            <li class="fa-home"><a href="https://www.google.com/maps/place/Via+Pace,+10,+67058+San+Benedetto+dei+Marsi+AQ/@42.0052982,13.6251422,3a,75y,229.02h,87.66t/data=!3m6!1e1!3m4!1s--kAg7bokC_HbzHceHrR4w!2e0!7i13312!8i6656!4m5!3m4!1s0x13301ed116164e7f:0xa06c719d14975f14!8m2!3d42.003812!4d13.628592" target="_blank"/>Via Pace 10  <br />
                                San Benedetto dei Marsi (AQ)</li></a>
                        </ul>
                    </section>
                   {{-- <li><a href="generic.html">Generic</a></li>
                    <li><a href="#notizie">Recent posts</a></li>
                    <li>
                        <span class="opener">Categories</span>
                        <ul>
                            @foreach($categories as $category)
                            <li><a href="#">{{$category->nome}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <span class="opener">Societies</span>
                        <ul>
                            @foreach($society as $societa)
                                <li><a href="#">{{$societa->societa}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <!-- Authentication Links -->
                    @guest
                        <li>
                            <a  href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li>
                            <span class="opener"> {{ Auth::user()->name }} </span>



                            <ul>
                               <li></li> <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                </li>
                                <li>
                                <a href="{{ route('voyager.dashboard') }}">My dash</a>
                                </li>

                            </ul>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                        </li>
                    @endguest--}}
                </ul>

            </nav>

            {{--@yield('side')
--}}
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
