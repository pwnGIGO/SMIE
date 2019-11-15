@extends("layouts.plantilla_usuario")
	@section("Contenido_Usuario")
	
	<script>
        document.title="Album";
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
		</style>
		<div align="center">
			<h3>{{ $album->nombre_album }}</h3>	
		</div>

		@foreach ($imagenes as $imagen)
			<?php 
				$ruta=asset('Imagenes/albums/'.$imagen->nombre_imagen);
			 ?>
			<div class="galeria">
				<img class="ima_galeria" src="<?php echo $ruta?>">
				<p>{{ $imagen->id_album }}</p>
			</div>
		@endforeach

	@endsection