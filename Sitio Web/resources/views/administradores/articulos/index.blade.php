@extends("layouts.plantilla_admi")
	@section("Contenido_Administrador")

        <script>
            document.title="Articulos y documentos";
        </script>

	   <br>
    	<div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header" align="center">
                            <h3>Tus artículos y documentos </h3>
                            
                            <form action="{{ Route('articulo.create') }}" method="post" enctype="multipart/form-data">
    							<input type="file" id="file" required name="file" accept="application/pdf"/><br/><br/>
    							<input type="submit" name="aceptar" value="subir">
    							{{csrf_field()}}
    						</form>
                            
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
                                    @foreach($docs as $doc)
                                        <tr>
                                            <td>{{ $doc->id_archivo }}</td>
                                            <td>{{ $doc->nombre_archivo }}</td>

                                            <td width="10px">
                                                @can('admi.articulos')
                                                    {!! Form::open(['route' => ['articulo.read', $doc->nombre_archivo],
                                                        'method' => 'GET']) !!}
                                                        <button class="btn btn-sm btn-info">
                                                            Visualizar
                                                        </button>
                                                    {!! Form::close()!!}
                                                @endcan
                                            </td>

                                            <td width="10px">
                                                @can('admi.articulos')
                                                    {!! Form::open(['route' => ['articulo.delete', $doc->nombre_archivo],
                                                        'method' => 'POST']) !!}
                                                        <button class="btn btn-sm btn-danger">
                                                            Eliminar
                                                        </button>
                                                    {!! Form::close()!!}
                                                @endcan
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- Paginacion de los roles -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

	@endsection