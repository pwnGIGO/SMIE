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

        <!-- ==========================Contenido========================== -->
                                @yield("Contenido_Usuario")
        <!-- ==========================Fin Contenido========================== -->
    </body>
    <!-- ==========================Fin Body========================== -->
</html>