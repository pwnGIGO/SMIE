@extends("layouts.plantilla_usuario")
	@section("Contenido_Usuario")

		<script>
	        document.title="Galeria";
	    </script>
	    
		<style>
			.galeria{
				display: inline-block;
				margin: 40px 40px;
				
			}

			.ima_galeria{
				width: 200px;
				height: 200px;
			}

			.ima_galeria:hover{
				background: rgba(0,0,0,0.1);
				width: 205px;
				height: 205px;
			}
		</style>

		<div align="center">
			<br>
			<h3>Galeria de imagenes</h3>
		</div>

		<div align="center">
			@foreach ($posts as $post)
				<?php 
					//$ruta=asset('Imagenes/'.$post->name);  //poder mostrar solo la primera imagen de cada album
					$ruta=asset('Imagenes/album_defecto.jpg');
				 ?>
				<div class="galeria">
					<a href="{{ Route('usuarios.album', ['id' => $post->id_album]) }}"><img class="ima_galeria" src="<?php echo $ruta?>"></a>
					<p>{{  $post->nombre_album    }}</p>
				</div>
			@endforeach
		</div>

	@endsection