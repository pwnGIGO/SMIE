@extends("layouts.plantilla_usuario")
	@section("Contenido_Usuario")

		<script>
	        document.title="Articulos y documentos";
	    </script>

	   <br>
        <div align="center">
            <object width="75%" height="600px" data="<?php echo $ruta?>"></object>            
        </div>

        <div align="center">
            <!-- <iframe width="75%" height="600px" src="<?php echo $ruta?>"></iframe>     -->
        </div>

	@endsection