@extends('layouts.plantilla_admi')
    @section('Contenido_Administrador')

        <script>
            document.title="Crear Rol";
        </script>

        <br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading" align="center">
                            <h3>Creación de Rol</h3>
                        </div>
                        <hr>
                        <div class="panel-body">
                            {!! Form::open(['route' => 'roles.store']) !!}

                                @include('administradores.roles.partials.form')

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    @endsection