@extends("layouts.plantilla_admi")
	@section("Contenido_Administrador")

		<script>
        	document.title="Álbumes";
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
				.ima_galeria:hover{
					background: rgba(0,0,0,0.1);
					width: 205px;
					height: 205px;
				}
		</style>

		<div align="center">
			<br>
			<h3>Tus álbumes</h3>
		</div>
		
		<div align="center">
			<div class="galeria">
				<a href="{{ Route('galeria.crear') }}">
					<img class="ima_galeria" src="{{asset('Imagenes/album_nuevo.png')}}">
				</a>
				<p>Crear álbum</p>
			</div>
			
			@foreach ($posts as $post)
				<?php 
					//$ruta=asset('Imagenes/'.$post->name);
					$ruta=asset('Imagenes/album_defecto.jpg');
				 ?>
				<div class="galeria">
					<a href="{{ Route('galeria.mostrar', ['id' => $post->id_album]) }}">
						<img class="ima_galeria" src="<?php echo $ruta?>">
					</a>
					<p>{{  $post->nombre_album    }}</p>
					<a href="{{ Route('galeria.borrar_album', ['id' => $post->id_album]) }}">
						<p>Eliminar</p>
					</a>
				</div>

			@endforeach

		</div>

	@endsection