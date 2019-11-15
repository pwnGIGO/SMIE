@extends('layouts.plantilla_admi')
    @section('Contenido_Administrador')

        <script>
            document.title="Administración de roles";
        </script>

        <br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header" align="center">
                            <h3>Administración de Roles</h3>
                            @can('roles.create')
                                {!! Form::open(['route' => ['roles.create'],
                                    'method' => 'GET']) !!}
                                    <button class="btn btn-sm btn-success">
                                        Crear Rol
                                    </button>
                                {!! Form::close()!!}
                            @endcan
                        </div>

                        <div class="card-body">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th width="10px">ID</th>
                                        <th>Role</th>
                                        <th colspan="3">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($roles as $role)
                                        <tr>
                                            <td>{{ $role->id }}</td>
                                            <td>{{ $role->name }}</td>

                                            <td width="10px">
                                                @can('roles.show')
                                                    {!! Form::open(['route' => ['roles.show', $role->id],
                                                    'method' => 'GET']) !!}
                                                        <button class="btn btn-sm btn-info">
                                                            Ver Detalles
                                                        </button>

                                                    {!! Form::close()!!}
                                                @endcan
                                            </td>

                                            <td width="10px">
                                                @if($role->id!=1)
                                                    @can('roles.edit')
                                                        {!! Form::open(['route' => ['roles.edit', $role->id],
                                                        'method' => 'GET']) !!}
                                                            <button class="btn btn-sm btn-default">
                                                                Editar
                                                            </button>

                                                        {!! Form::close()!!}
                                                    @endcan
                                                @endif
                                            </td>

                                            <td width="10px">
                                                @if($role->special!='all-access')
                                                    @can('roles.destroy')
                                                        {!! Form::open(['route' => ['roles.destroy', $role->id],
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
                            <!-- Paginacion de los roles -->
                            {{ $roles->render() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection