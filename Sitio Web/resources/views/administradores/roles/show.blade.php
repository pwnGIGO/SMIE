@extends('layouts.plantilla_admi')
    @section('Contenido_Administrador')


        <script>
            document.title="Detalles de Rol";
        </script>

        <br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>Información del Rol</h3>
                        </div>
                        <hr>
                        <div class="panel-body">
                            <p><strong>Nombre:</strong> {{ $role->name }}</p>
                            <p><strong>Slug:</strong> {{ $role->slug }}</p>
                            <p><strong>Descripcion:</strong> {{ $role->description }}</p>
                        </div>
                    </div>
                    <a href="{{ route('roles.index') }}">
                        <button class="btn btn-sm btn-primary">
                            Regresar
                        </button>
                    </a>
                </div>
            </div>
        </div>

    @endsection