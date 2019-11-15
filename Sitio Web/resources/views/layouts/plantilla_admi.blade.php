<!DOCTYPE html>
<html>
    <!-- ==========================Head========================== -->
    <head>
        <title>SMIE</title>
        <meta charset="utf-8">
        @yield("head_admin")
        <link rel="stylesheet" type="text/css" href="{{asset('css/Imagenes.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('js/slide.js')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/estilo_propios.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/Etiquetas.css')}}">
        <script src="{{ asset('js/dropzone_1.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('css/dropzone_2.css')}}">
        <script src="{{ asset('js/validacion_archivo.js') }}"></script>


        <style>
            nav{
                background: #CD5C5C; /*color de las barras de navegacion*/
            }

            footer{
                background: #F08080;
            }

        </style>



        <!-- laravel -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <!-- ==========================Fin Head========================== -->

    <!-- ==========================Body========================== -->
    <body>
        <header>
        
        </header>



        <!-- ==========================Barra de Administrador========================== -->
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel2">
            <div class="container">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div>
                        <p>V 3.8</p>
                    </div>
                    <div>
                        <a class="nav-link" href="{{ url('/') }}">Sitio Usuario</a>
                    </div>
                    <ul class="navbar-nav ml-auto">
                        @can('users.index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.index') }}">Usuarios</a>
                        </li>
                        @endcan

                        @can('roles.index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('roles.index') }}">Roles</a>
                        </li>
                        @endcan
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <?php $id=Auth::user()->id ?>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="{{ route('configuration') }}">
                                        {{ __('Cuenta') }}
                                    </a>


                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar Sesión') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- ===================Fin de Barra de Administrador================ -->

	   <!-- Menu Superior -->
        <input type="checkbox" id="btn-menu">
        <label class="imagen-label" for="btn-menu"><img src="{{asset('Imagenes/icono-menu.png')}}" alt="" width="70px"></label>

        <!-- Menu de pestañas -->
        <nav class="menu">
            <ul>
                @can('admi.slide')
                <li><a href="{{ route('slide.index') }}">Slide</a></li>
                @endcan

                @can('admi.cronograma')
                <li><a href="{{ route('cronograma.index') }}">Cronograma</a></li>
                @endcan

                @can('admi.galeria')
                <li><a href="{{ route('galeria.index') }}">Galería</a></li>
                @endcan

                @can('admi.calendario')
                <li><a href="{{ route('calendario.index') }}">Calendario</a></li>
                @endcan

                @can('admi.articulos')
                <li><a href="{{ route('articulo.index') }}">Artículos y Documentos</a></li>
                @endcan
        </nav>

        <!-- Verifica si hay algun mensaje por mostrar -->
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <!-- ==========================Contenido======================== -->
                            @yield("Contenido_Administrador")
        <!-- ==========================Fin de Contenido================= -->
    </body>
    <!-- ==========================Fin Body========================== -->
</html>