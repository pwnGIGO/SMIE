@extends('layouts.plantilla_admi')
    @section('Contenido_Administrador')

        <script>
            document.title="Información usuario";
        </script>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>Datos del Usuario</h3>
                        </div>
                        <hr>
                        <div class="panel-body">
                            <p><strong>Nombre:</strong> {{ $user->name }}</p>
                            <p><strong>Email:</strong> {{ $user->email }}</p>
                        </div>
                    </div>
                    <a href="{{ route('users.index') }}">
                        <button class="btn btn-sm btn-primary">
                            Regresar
                        </button>
                    </a>
                </div>
            </div>
        </div>

    @endsection