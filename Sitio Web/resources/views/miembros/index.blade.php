@extends("layouts.plantilla_usuario")
	@section("Contenido_Usuario")

		<script>
	        document.title="Articulos y documentos";
	    </script>
	    
	    <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header" align="center">
                            <h3>Artículos y documentos para miembros</h3>
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
                                                {!! Form::open(['route' => ['miembros.read', $doc->nombre_archivo],
                                                    'method' => 'GET']) !!}
                                                    <button class="btn btn-sm btn-info">
                                                        Visualizar
                                                    </button>
                                                {!! Form::close()!!}
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