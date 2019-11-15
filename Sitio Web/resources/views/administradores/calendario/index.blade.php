@extends("layouts.plantilla_admi")
	@section("Contenido_Administrador")

		<script>
	        document.title="Editar calendario";
	    </script>

		<div align="center">
			<h3>Editar calendario de actividades</h3>
			<form action="{{ Route('calendario.update') }}" method="post" enctype="multipart/form-data">
				<input type="file" id="file" required name="file" accept="image/*" onchange="return fileValidation()"/>
				<br/><br/>
				<input type="submit" name="aceptar" value="subir">
				{{csrf_field()}}
			</form>
		</div>

		<div align="center">
			<?php
				$ruta = asset('Imagenes/Calendario/' . $nombre);
				echo "<img src='$ruta' width='50%'>";
			?>
		</div>
		<br>
	@endsection