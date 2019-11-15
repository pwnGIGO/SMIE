@extends('layouts.plantilla_admi')
    @section('Contenido_Administrador')

        <script>
            document.title="Editar Rol";
        </script>

        <br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading" align="center">
                            <h3>Editar Rol</h3>
                        </div>
                        <div class="panel-body">
                            {!! Form::model($role, ['route' => ['roles.update', $role->id],
                            'method' => 'PUT']) !!}

                            @include('administradores.roles.partials.form')

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection