@extends("layouts.plantilla_usuario")
	@section("Contenido_Usuario")

		<script>
	        document.title="Actividades y eventos";
	    </script>
	    
		<div align="center">

			<h3>Cronograma de eventos</h3>

			
			<?php
				$ruta = asset('Imagenes/Cronograma/' . $nombre);
				echo "<img src='$ruta' width='50%'>";
			?>
		
		</div>
		<br>
	@endsection