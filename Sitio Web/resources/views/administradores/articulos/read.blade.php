@extends("layouts.plantilla_admi")
	@section("Contenido_Administrador")

		<script>
	        document.title="Articulos y documentos";
	    </script>
    
	   <br>
        <div align="center">
            <object width="75%" height="700px" data="<?php echo $ruta?>"></object>            
        </div>

        <div align="center">
            <!-- <iframe width="75%" height="700px" src="<?php echo $ruta?>"></iframe>     -->
        </div>

	@endsection