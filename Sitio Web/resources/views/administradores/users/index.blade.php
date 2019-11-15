@extends('layouts.plantilla_admi')
    @section('Contenido_Administrador')

        <script>
            document.title="Administración de usuarios";
        </script>

        <br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header" align="center">
                            <h3>Administración de Usuarios</h3>
                        </div>

                        <div class="card-body">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th width="10px">ID</th>
                                        <th>Nombre</th>
                                        <th colspan="3">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td width="10px">
                                                @can('users.show')
                                                    {!! Form::open(['route' => ['users.show', $user->id],
                                                        'method' => 'GET']) !!}
                                                        <button class="btn btn-sm btn-info">
                                                            Ver Detalles
                                                        </button>
                                                    {!! Form::close()!!}
                                                @endcan
                                            </td>

                                            <td width="10px">
                                                @if(Auth::user()->id!=$user->id)
                                                    @can('users.edit')
                                                        {!! Form::open(['route' => ['users.edit', $user->id],
                                                            'method' => 'GET']) !!}
                                                            <button class="btn btn-sm btn-default">
                                                                Editar Rol
                                                            </button>
                                                        {!! Form::close()!!}
                                                    @endcan
                                                @endif
                                            </td>

                                            <td width="10px">
                                                @if(Auth::user()->id!=$user->id)
                                                    @can('users.destroy')
                                                        {!! Form::open(['route' => ['users.destroy', $user->id],
                                                            'method' => 'DELETE']) !!}
                                                            <button class="btn btn-sm btn-danger">
                                                                Eliminar
                                                            </button>
                                                        {!! Form::close()!!}
                                                    @endcan
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- Paginacion de los productos -->
                            {{ $users->render() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection