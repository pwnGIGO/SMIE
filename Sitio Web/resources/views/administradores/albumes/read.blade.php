@extends("layouts.plantilla_admi")
	@section("Contenido_Administrador")

		<script>
        	document.title="Editar álbum";
    	</script>
	<style >
			.galeria{
				display: inline-block;
				margin: 40px 40px;
				
			}
			.ima_galeria{
				width: 200px;
				height: 200px;
			}
			.subir_ima{
				width: 70%;
			}
	</style>

		<div align="center">
		<br>
			<h3>{{ $album->nombre_album }}</h3>
			<a href="{{Route('galeria.index')}}">Volver</a>
		</div>

		@foreach ($imagenes as $imagen)
			<?php 
				$ruta=asset('Imagenes/albums/'.$imagen->nombre_imagen);
			 ?>
			<div class="galeria">
				<img class="ima_galeria" src="<?php echo $ruta?>" width="100px">
				<p>{{ $imagen->id_album }}</p>
				<p><a href="{{  Route('galeria.borrar',['id' => $imagen->id_imagen])  }}">Eliminar</a></p>
			</div>
		@endforeach

		<!-- la variable $id fue enviada desde el controlador-->
		<div align="center">
    		<div class="subir_ima">
        		<form
        		    action="{{ Route('galeria.guardar', ['id' => $id]) }}"
        		    method="POST"
        		    enctype="multipart/form-data"
        		    class="dropzone"
        		    id="my-awesome-dropzone">
        				
    					<script>
    						// "myAwesomeDropzone" es el ID de nuestro formulario usando la notación camelCase
    						Dropzone.options.myAwesomeDropzone = {
    						    paramName: "file", // Las imágenes se van a usar bajo este nombre de parámetro
    						    maxFilesize: 10 // 
    						};
    					</script>
        				
        				{{csrf_field()}}
    		    </form>
    	    </div>
    	    <a href="<?php echo url()->current();?>"><button>Guardar los cambios</button></a>
	    </div>
		
	@endsection