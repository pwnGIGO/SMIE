@extends("layouts.plantilla_admi")
	@section("Contenido_Administrador")

		<script>
        	document.title="Editar cronograma";
    	</script>

		<div align="center">
			<h3>Editar cronograma de actividades</h3>
			<form action="{{ Route('cronograma.update') }}" method="post" enctype="multipart/form-data">
				<input type="file" id="file" required name="file" accept="image/*" onchange="return fileValidation()"/><br/><br/>
				<input type="submit" name="aceptar" value="subir">

				<!--visualizar imagen en caso de pasar valiidacion <div id="imagePreview"></div>  -->
				{{csrf_field()}}
			</form>
		</div>

		<div align="center">
			<?php
				$ruta = asset('Imagenes/Cronograma/' . $nombre);
				echo "<img src='$ruta' width='50%'>";
			?>
		</div>
		<br>

	@endsection