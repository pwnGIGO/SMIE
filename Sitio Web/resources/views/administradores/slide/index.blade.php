@extends("layouts.plantilla_admi")

   @section("head_admin")
      <!-- Compiled and minified Bootstrap CSS -->
      <!-- corregir   <link rel="stylesheet" href="{{asset('css/css_carrusel.css')}}" >-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
      <!-- Minified JS library -->
      <script src="{{asset('js/jquery_carrusel.js')}}"></script>
      <!-- Compiled and minified Bootstrap JavaScript -->
      <script src="{{asset('js/bootstrap_carrusel.js')}}"></script>

   @endsection

   @section("Contenido_Administrador")
      <br>
      <table class="tabla_miembros table-hover" id="carrusel_t">
         <thead class="encabezado">
            <tr>
               <td colspan="4">
                  <div align="center">
                     <p style="text-align:center;">Aqui puedes agregar imagenes </p>
                     <form action="{{ Route('slide.store') }}" method="post" enctype="multipart/form-data">
                        <input type="file" id="file" required name="file" accept="image/*" onchange="return fileValidation()"/>
                        <br>
                        <input type="submit" name="aceptar" value="subir">
                        {{csrf_field()}}
                     </form>
                  </div>

               </td>
            </tr>
            <tr>
               <!-- <td>Nombre</td>-->
               <td>Imagen</td>
               <td colspan="2"></td>
            </tr>
         </thead>

         <tbody>
            @foreach ($imagenes_carrusel as $ima_c)

               <?php
                  $ruta=asset('Imagenes/carrusel/'.$ima_c->nombre_imagen);
               ?>
               <tr>
                  <!-- <td>{{  $ima_c->nombre_imagen    }}</td> -->
                  <td>
                     <img src="<?php echo $ruta?>" alt="" width="100px" height="100px">
                  </td>
                  <td>
                     <a href="{{Route('slide.borrar',['id' => $ima_c->id_imagen])}}">Eliminar</a>
                  </td>
               </tr>
            @endforeach

         </tbody>

      </table>


      <hr style="margin:20px;">

      @if (empty($primera_imagen))
         <p style="text-align:center;">No hay imagenes para mostrar</p>
      @else

      <center>
         <div class="divPrincipal">
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
                            <center>
                              <img src="<?php echo $ruta; ?>" alt="" width="500px" height="500px">
                            </center>
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