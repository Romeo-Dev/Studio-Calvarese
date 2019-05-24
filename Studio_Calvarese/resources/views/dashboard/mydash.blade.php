<!DOCTYPE html>
<!--
Template Name: BRILLIANT Bootstrap Admin Template
Version: 4.5.6
Author: WebThemez
Website: http://www.webthemez.com/
-->
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>DashBoard Studio Calvarese</title>
    <!-- Bootstrap Styles-->
    <link href="{{asset('mydash/assets/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{asset('mydash/assets/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="{{asset('mydash/assets/js/morris/morris-0.4.3.min.css')}}" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{asset('mydash/assets/css/custom-styles.css')}}" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{asset('mydash/assets/js/Lightweight-Chart/cssCharts.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <style>
        #logoC{margin-top: 0px;padding-top: 5px;padding-bottom: 5px;}
        #editForm{padding: 5%;}
    </style>
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" id="logoC"><img src="{{asset('storage/images/logo/logoCalvDash.png')}}"alt="" width="100%" height="100%"></a>

                <div id="sideNav" href="">
                    <i class="fa fa-bars icon"></i>
                </div>
            </div>
              
                </li>
            </li>
            <ul class="nav navbar-top-links navbar-right">
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="{{route('profiloadmin')}}"><i class="fas fa-user"></i> {{Auth::user()->name}}</a>
                    </li>
                    <li><a href="{{route('home')}}"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="divider"></li>

                    <li> <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fas fa-power-off"> Logout</i></a>
                    </li>

                </ul>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
    </nav>
    <!--/. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">

                <li>
                    <a class="active-menu" href="{{route('homedash')}}"><i class="fas fa-home"></i> Home</a>
                </li>
                <li>
                    <a href="{{route('categoryByAdm')}}"><i class="fas fa-align-justify"></i> Categorie</a>
                </li>

                <!--<li>
                    <a href="#"><i class="fa fa-sitemap"></i> Charts<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Charts JS</a>
                        </li>
                        <li>
                            <a href="#">Morris Chart</a>
                        </li>
                    </ul>
                </li> -->

                <li>
                    <a href="{{route('eventsByAdmin')}}"><i class="fa fa-calendar-plus"></i> Eventi</a>
                </li>

                <li>
                    <a href="{{route('serviceByAdm')}}"><i class="fa fa-table"></i> Servizi</a>
                </li>
                <li>
                    <a href="{{route('trophyByAdmin')}}"><i class="fas fa-award"></i> Trofei</a>
                </li>
                <li>
                    <a href="{{route('usersByAdmin')}}"><i class="fas fa-users"></i> Utenti</a>
                </li>
                <li>

                    <a href="{{route('messagesByAdmin')}}"><i class="fas fa-comment-alt"></i> Messaggi</a>
                </li>
                <li>
                    <a href="{{route('commentsByAdmin')}}"><i class="fas fa-comments"></i> Commenti</a>

                </li>

                <li>
                    <a href="{{route('about')}}"><i class="fas fa-address-card"></i> About_us</a>

                </li>
                <li>
                    <a href="{{route('contact')}}"><i class="fas fa-phone-square"></i> Contatti</a>

                </li>
              {{--  <li>
                    <a href="{{route('prenotationdash')}}"><i class="fas fa-calendar-alt"></i> Prenotazioni</a>
                </li>
              --}}


            </ul>

        </div>

    </nav>
    </div>
    <!-- /. NAV SIDE  -->

    @yield('content')

    <!-- ricordare che in ogni yield vanno messi due div per chiudere la page-->

    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="{{asset('mydash/assets/js/jquery-1.10.2.js')}}"></script>
    <!-- Bootstrap Js -->
    <script src="{{asset('mydash/assets/js/bootstrap.min.js')}}"></script>
    <!-- Metis Menu Js -->
    <script src="{{asset('mydash/assets/js/jquery.metisMenu.js')}}"></script>
    <!--Data table -->
    <script src="{{asset('mydash/assets/js/dataTables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('mydash/assets/js/dataTables/dataTables.bootstrap.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
    <!-- Custom Js -->
    <script src="{{asset('mydash/assets/js/custom-scripts.js')}}"></script>

</body>

</html>
