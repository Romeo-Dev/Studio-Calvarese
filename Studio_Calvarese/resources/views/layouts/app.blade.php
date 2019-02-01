<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Editorial by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

    <link rel="stylesheet" href="{{asset('css/main.css')}}" />


</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <div id="main">
        <div class="inner">

            <!-- Header -->
            <header id="header">
                <a href="index.html" class="logo"><strong>Calvarese 's</strong> Studio</a>
                <ul class="icons">
                    <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
                    <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>
                </ul>

            </header>
           <!--// mettere qui lo yeild(home)-->
        @yield('home')

    <!-- Sidebar -->
    <div id="sidebar">
        <div class="inner">

            <!-- Menu -->
            <nav id="menu">
                <header class="major">
                    <h2>Studio Fotografico Calvarese</h2>
                </header>
                <ul>
                    <li><a href="{{url('/home')}}">Home</a></li>
                       <li><span class="opener">Eventi</span>
                    <ul>
                        @foreach($categories as $category)
                       <li><a href="{{url('/eventi')}}">{{$category->categoria}}</a></li>
                        @endforeach
                    </ul>
                       </li>
                    <li><a href="{{url('/servizi')}}">Servizi</a></li>
                    <li><a href="{{url('/trofei')}}">Trofei</a></li>
                    <li><a href="{{url('/chisiamo')}}">Chi Siamo</a></li>
                    <li><a href="{{url('/contatti')}}">Contatti</a></li>
                    <li><a href="{{url('/login')}}">Login</a></li>
                    <li><a href="{{url('/registrazione')}}">Registrazione</a></li>

                    <hr>
                    <!-- Section -->
                    <section>
                        <header class="major">
                            <h2>Contatti</h2>
                        </header>
                        <p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                        <ul class="contact">
                            <li class="fa-envelope-o"><a href="#">information@untitled.tld</a></li>
                            <li class="fa-phone">(000) 000-0000</li>
                            <li class="fa-home">1234 Somewhere Road #8254<br />
                                Nashville, TN 00000-0000</li>
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

            @yield('side')

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
</div>
</body>
</html>
