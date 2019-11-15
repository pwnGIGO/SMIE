@extends("layouts.plantilla_usuario")

	@section("Contenido_Usuario")

		<script>
	        document.title="Calendario";
	    </script>

		<div align="center">
			<h3>Calendario de eventos</h3>
			
			<?php
				$ruta = asset('Imagenes/Calendario/' . $nombre);
				echo "<img src='$ruta' width='50%'>";
			?>
		
		</div>
		<br>
		
	@endsection