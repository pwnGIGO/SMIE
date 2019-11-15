@extends("layouts.plantilla_admi")
	@section("Contenido_Administrador")

		<script>
        	document.title="Crear álbum";
    	</script>
		<style>
			form{
				display: grid;
				padding: 1rem;
				margin: 1rem;
				background: #f9f9f9;
				border: 2px solid #c1c1c1;
			}
			div input{
				margin: 15px;
				height: 30px;
			}
			div label{
				margin: 10px;
			}
		</style>

		<div align="center">
			<h3>Álbum nuevo</h3>
		</div>
		<div align="center">
			<div style="width: 40%" align="left">
				<form action="{{Route('galeria.creacion_album') }}" method="POST">
					<label>Nombre del album</label><input type="text" required name="nombre_a">
					<label>Descripcion</label><input type="text" required name="descripcion">
					<input type="submit" name="crear" value="Crear álbum">
					{{csrf_field()}}
				</form>
			</div>
		</div>
		
		

		

	@endsection