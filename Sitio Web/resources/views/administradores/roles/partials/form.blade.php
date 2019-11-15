
<div class="form-group">
	{{ Form::label('name', 'Nombre') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
	{{ Form::label('slug', 'URL Amigable') }}
	{{ Form::text('slug', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
	{{ Form::label('description', 'Descripción') }}
	{{ Form::textarea('description', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<hr>

<h3>Permiso Especial</h3>

<div class="form-group">
	<label>
		{{ Form::radio('special', 'all-access') }} Acceso total
		{{ Form::radio('special', 'no-access') }} Ningun acceso
	</label>
</div>

<hr>

<h3>Lista de permisos</h3>

<div class="form-group">
	<ul class="list-unstyled">
		@foreach($permissions as $permission)
			<li>
				<label>
					{{ Form::checkbox('permissions[]', $permission->id, null) }}
					{{ $permission->name }}
					<em>({{ $permission->description ?: 'Sin descripcion'}})</em>
				</label>
			</li>
		@endforeach
	</ul>
</div>

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>