<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/dash/easion.min.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="{{asset('js/dash/chart-js-config.js')}}"></script>
        
    <title>{{ config('app.name', 'Administrator') }}</title>
    @yield('css_page')
</head>

<body >
    <div class="dash">
        <div class="dash-nav dash-nav-dark">
            <header>
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="index.html" class="easion-logo"><i class="fas fa-sun"></i> <span>{{ config('app.name', 'Administrator') }}</span></a>
            </header>
            <nav class="dash-nav-list">
                <a href="index.html" class="dash-nav-item">
                    <i class="fas fa-home"></i> Dashboard </a>
                <!--<div class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-chart-bar"></i> Estadisticas </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="chartjs.html" class="dash-nav-dropdown-item"></a>
                    </div>
                </div>-->
                <div class="dash-nav-dropdown ">
                    <a href="#" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-cube"></i>Administracion</a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="{{route('admin.roles.index')}}" class="dash-nav-dropdown-item">Roles</a>
                        <a href="{{route('admin.users.index')}}" class="dash-nav-dropdown-item">Usuarios</a>                        
                    </div>
                </div>
                <div class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-file"></i>Normativas</a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="{{route('admin.normative.index')}}" class="dash-nav-dropdown-item">Normativa interna</a>
                        <a href="https://www.sbs.gob.pe/app/pp/INT_CN/Paginas/Busqueda/BusquedaPortal.aspx" target="_blank" class="dash-nav-dropdown-item">Normativa externa</a>
                    </div>
                </div>
                
            </nav>
        </div>
        <div class="dash-app">
            <header class="dash-toolbar">
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="#!" class="searchbox-toggle">
                    <i class="fas fa-search"></i>
                </a>
                <form class="searchbox" action="#!">
                    <a href="#!" class="searchbox-toggle"> <i class="fas fa-arrow-left"></i> </a>
                    <button type="submit" class="searchbox-submit"> <i class="fas fa-search"></i> </button>
                    <input type="text" class="searchbox-input" placeholder="buscar">
                </form>
                <div class="tools">                    
                    <a href="#!" class="tools-item">
                        <i class="fas fa-bell"></i>
                        <i class="tools-item-count">4</i>
                    </a>
                    <div class="dropdown tools-item">
                        <a href="#" class="" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fas fa-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item" href="#!">{{ Auth::user()->name.' '.Auth::user()->lastname }}</a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('salir') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                    
                </div>
            </header>
            <main class="dash-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <script src="{{asset('js/dash/easion.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            //Disable cut copy paste
            $('body').bind('cut copy paste', function (e) {
                e.preventDefault();
            });
           
            //Disable mouse right click
            $("body").on("contextmenu",function(e){
                return false;
            });
        });
    </script>
    @yield('js_page')
</body>

</html>