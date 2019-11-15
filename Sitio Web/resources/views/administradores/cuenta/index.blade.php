@extends('layouts.plantilla_admi')
    @section('Contenido_Administrador')

        <script>
            document.title="Cambio de contraseña";
        </script>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="panel panel-default">
                        @if(Session::has('message'))
                            <div class="text-danger">
                                {{ Session::get('message') }}
                            </div>
                        @endif

                        <div class="panel-heading">
                            Configuración de la cuenta
                        </div>
                        <div class="panel-body">
                            <form method="post" action="{{ url('user/config/pass') }}">
                                {{ csrf_field() }}
                                @include('administradores.cuenta.partials.formulario')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    @endsection