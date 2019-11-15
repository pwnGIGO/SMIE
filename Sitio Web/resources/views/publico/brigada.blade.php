@extends("layouts.plantilla_usuario")

	@section("Contenido_Usuario")

		<script>
	        document.title="¿Quieres formar parte de la brigada..?";
	    </script>

	     <br>
		<div class="container">
		    <div class="row justify-content-center">
		        <div class="col-md-8">
		            <div class="card">
		                <div class="card-header">{{ __('Formar parte de la brigada') }}</div>

		                <div class="card-body">
		                    <form action="{{ Route('brigada.mail') }}" method="POST">
		                        @csrf

		                        <div class="form-group row">
		                            <label for="email" class="col-md-4 col-form-label text-md-right">
		                            	{{ __('Correo Electronico') }}
		                            </label>

		                            <div class="col-md-6">
		                                <input id="email" type="email" name="email" required autofocus>
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label for="matricula" class="col-md-4 col-form-label text-md-right">
		                            	{{ __('Matricula') }}
		                            </label>
		                            <div class="col-md-6">
		                                <input id="matricula" type="text" name="matricula" required>
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label for="whatsaap" class="col-md-4 col-form-label text-md-right">
		                            	{{ __('Whatsaap') }}
		                            </label>
		                            <div class="col-md-6">
		                                <input id="whatsaap" type="text" name="whatsaap" required>
		                            </div>
		                        </div>

		                        <div align="center">
		                            <label for="comentario" class="col-md-4 col-form-label text-md-right">
		                            	{{ __('Dejanos tu comentario') }}
		                            </label>
	                                <textarea id="comentario" name="comentario" rows="8" cols="70" required style="resize: none"></textarea>
		                            
		                        </div>

		                        <div class="form-group row mb-0">
		                            <div class="col-md-8 offset-md-4">
		                                <button type="submit" class="btn btn-primary">
		                                    {{ __('Enviar') }}
		                                </button>
		                            </div>
                        		</div>

		                    </form>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<br>

	@endsection