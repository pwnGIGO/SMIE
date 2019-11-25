<!DOCTYPE html>
<html>
    <!-- ==========================Head========================== -->
    <head>
        <title>SMIE</title>
        <meta charset="utf-8">
        @yield("head_usuario")
        <link rel="stylesheet" type="text/css" href="{{asset('css/Imagenes.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('js/slide.js')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/estilo_propios.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/Etiquetas.css')}}">

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <style>
            nav{
                background:  #85C2C7; /*color de las barras de navegacion*/
            }


            footer{
                background: #abcfe0;
            }
        </style>

        <!-- laravel -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <!-- ==========================Fin Head====================== -->

    <!-- ==========================Body========================== -->
    <body>
        <header>
            <!-- Imagenes de Cabecera -->
            <div>
                <a href="http://www.smie.org.mx" target="_blank">
                    <img src="{{asset('Imagenes/Cabecera/SMIE_Logo.jpeg')}}" alt="SMIE" class="smie" title="SMIE">
                </a>
                <a href="https://azc.uam.mx" target="_blank">
                    <img src="{{asset('Imagenes/Cabecera/Uam_Logo.jpg')}}" alt="Uam Azcapotzalco" class="uam" title="UAM Azcapotzalco">
                </a>
                <a href="http://cbi.azc.uam.mx" target="_blank">
                    <img src="{{asset('Imagenes/Cabecera/CBI_Logo.jpg')}}" alt="CBI" class="cbi" title="Ciencias Basicas e Ingenieria UAM-A">
                </a>
            </div>
        </header>
<!-- =======================Barra de Administrador====================== -->
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel2">
            <div class="container">
                <div>
                    <p>V 3.8</p>
                </div>
                <div>
                     @can('admi.admi')
                            @if (Route::has('login'))
                                <div class="top-right links">
                                    @auth
                                        <a href="{{ route('admi.home') }}">Sitio Administrador</a>
                                    @endauth
                                </div>
                            @endif
                    @endcan
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ route('configuration') }}">Cuenta
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <!-- ==================Fin Barra de Administrador================= -->
	   <!-- Menu Superior -->
        <input type="checkbox" id="btn-menu">
        <label class="imagen-label" for="btn-menu"><img src="{{asset('Imagenes/icono-menu.png')}}" alt="" width="70px"></label>

        <!-- Menu Superior -->
        <nav class="menu">
            <ul>
                <li><a href="{{ route('usuarios.inicio') }}">Inicio</a></li>
                <li><a href="{{ route('usuarios.capitulo') }}">¿Qué es el Capitulo Estudiantil?</a></li>
                <li><a href="{{ route('usuarios.mision') }}">Misión y visión</a></li>
                <li><a href="{{ route('usuarios.actividades') }}">Actividades y Eventos</a></li>
                <li><a href="{{ route('usuarios.galeria') }}">Galería</a></li>
                <li><a href="{{ route('usuarios.comunidad') }}">Comunidad Estudiantil</a></li>
                <li><a href="{{ route('usuarios.contactos') }}">Contacto y Miembros</a></li>
            </ul>
        </nav>

        <!-- Se verifica si hay un mensaje por mostrar-->
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <!-- ==========================Contenido========================== -->
                                @yield("Contenido_Usuario")
        <!-- ==========================Fin Contenido========================== -->

        <!-- Menu Inferior -->
        <nav class="menu-1">
            <ul>
                <li><a href="{{ route('usuarios.calendario') }}">Calendario</a></li>
                <li><a href="{{ route('usuarios.informacion') }}">Información</a></li>
                <li><a href="{{ route('usuarios.relaciones') }}">Relaciones</a></li>
                @can('miembro.articulos')
                        <li><a href="{{ route('miembros.articulos') }}">Artículos y Documentos</a></li>
                @endcan
                <li><a href="{{ route('usuarios.historia') }}">Historia</a></li>
                <li><a href="{{ route('usuarios.asesorias') }}">Asesorías</a></li>
                <li><a href="{{ route('usuarios.brigada') }}" style="font-size:12px;">¿Quieres Formar Parte de la Brigada UAM-A? ##</a></li>
            </ul>
        </nav>

        <!-- ==========================Footer========================== -->
        <footer>
            <div>
                <h4>Dirección:</h4>
                <a target="_blank" href="https://goo.gl/maps/cY3oks1Ka542" title="Abrir en Google Maps" >
                    Av San Pablo Xalpa 180, Reynosa Tamaulipas, 02200 Ciudad de México, CDMX
                </a>
            </div>
            <div>
                <h4>Contacto:</h4>
                <ul>
                    <li>Facebook:
                        <a target="_blank" href="https://www.facebook.com/smieuam.azcmx.18" title="Perfil de Facebook">SMIE</a>
                    </li>
                    <li>Tel.: (55) 5318-9000, ext. 2229</li>
                    <li>celular : 5529178364</li>
                    <li>Correo:
                        <ul>
                            <li>lrfs@azc.uam.mx</li>
                            <li>ing.civilyarq.noguez@gmail.com</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div>
                <h4>Síguenos:</h4>
                <a target="_blank" href="https://www.facebook.com/SMIEUAMAZC.MX/" title="Grupo de Facebook">
                    <img class="red_social" alt="Facebook" src="{{ asset('Imagenes/Facebook_Logo.jpg')}}" width="40px">
                </a>
                <a target="_blank" href="https://twitter.com/SmieUam?fbclid=IwAR3nql9_Rk3sD16wa8YGkemmL2ymH8QYwW_xLIESxRho0C9J4ZfsG1TV7Wk" title="Twitter">
                    <img class="red_social" alt="Twitter" src="{{asset('Imagenes/twiter.jpg')}}" width="40px">
                </a>
            </div>
        </footer>
        <!-- ====================Fin Footer========================== -->
    </body>
    <!-- ==========================Fin Body========================== -->
</html>