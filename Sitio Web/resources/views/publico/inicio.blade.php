@extends("layouts.plantilla_usuario")

	@section("head_usuario")
		<!-- Compiled and minified Bootstrap CSS -->
		<!-- corregir   <link rel="stylesheet" href="{{asset('css/css_carrusel.css')}}" >-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		<!-- Minified JS library -->
		<script src="{{asset('js/jquery_carrusel.js')}}"></script>
		<!-- Compiled and minified Bootstrap JavaScript -->
		<script src="{{asset('js/bootstrap_carrusel.js')}}"></script>

	@endsection

	@section("Contenido_Usuario")

		<script>
	        document.title="Inicio";
	    </script>

		<section>
			<p>
				<strong>El capítulo estudiantil de la Sociedad Mexicana de Ingeniería Estructural (SMIE) de la UNIVERSIDAD AUTÓNOMA METROPOLITANA</strong>, está integrada por estudiantes asociados a la ingeniería estructural. Este ha sido creado con el fin de divulgar y promover la Ingeniería Estructural mediante  el uso de información integral, visitas, congresos, ponencias y prácticas; de esta manera se pretende el fomento del desarrollo tecnológico, científico y humanístico de sus miembros, respondiendo a las necesidades que se presenten creando un área que les permita conocer, aprender y aprovechar el vínculo entre la ingeniería estructural y las novedades que cada día surgen, para así fortalecer y complementar el conocimiento que adquiera el alumno durante su formación académica. Con ello se pretende crear un grupo de profesionalitas de Ingeniería estructural para la sociedad.
			</p>

				<img src="Imagenes/Integrantes.jpeg" alt="Integrantes" class="inicio1" title="Integrantes">

				<img src="Imagenes/Organigrama.jpeg" title="Organigrama" class="inicio1">
		</section>

		<hr style="margin:20px;">
    
	    @if (empty($primera_imagen))
	    	<p style="text-align:center;">No hay imagenes que mostrar</p>
	    @else

	      <center><div class="divPrincipal">
	    		<div id="myCarousel" class="carousel slide" data-ride="carousel" >
	    			<!-- Indicators -->
	    			<ol class="carousel-indicators">
	    				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	            		@for ($i=1 ; $i < $numero_imagenes_c ; $i++)
	      					<li data-target="#myCarousel" data-slide-to="{{$i + 1}}"></li>
	            		@endfor
	    			</ol>
	    
	    			<!-- Wrapper for slides -->
					<?php
						$ruta=asset('Imagenes/carrusel/'.$primera_imagen->nombre_imagen);
					?>
	    			<div class="carousel-inner">
		            	<div class="item active">
		    				<center>
		    					<img src="<?php echo $ruta; ?>" alt="" width="500px" height="500px" >
		    				</center>
		    			</div>
		    
		            	@foreach ($imagenes_carrusel as $ima_c)
		    
			                @if($ima_c->id_imagen != $primera_imagen->id_imagen)
			                    <?php
			                        $ruta=asset('Imagenes/carrusel/'.$ima_c->nombre_imagen);
			                    ?>
			    
		                		<div class="item">
		                		    <center><img src="<?php echo $ruta; ?>" alt="" width="500px" height="500px"> </center>
		                		</div>
			                @endif
		            	@endforeach
	    
	    			</div>
	    
	    			<!-- Controls -->
	    			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
	    				<span class="glyphicon glyphicon-chevron-left"></span>
	    				<span class="sr-only">Previous</span>
	    			</a>
	    			<a class="right carousel-control" href="#myCarousel" data-slide="next">
	    				<span class="glyphicon glyphicon-chevron-right"></span>
	    				<span class="sr-only">Next</span>
	    			</a>
	    		</div>
	    	</div>
	    	</center>
	    
	    	<script src="{{asset('js/carrusel_j.js')}}"></script>
	    @endif
	    
	@endsection