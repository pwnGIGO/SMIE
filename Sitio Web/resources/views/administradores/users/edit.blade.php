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
                        <div class="panel-body">
                            {!! Form::model($user, ['route' => ['users.update', $user->id],
                            'method' => 'PUT']) !!}

                                @include('administradores.users.partials.form_edit')

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection