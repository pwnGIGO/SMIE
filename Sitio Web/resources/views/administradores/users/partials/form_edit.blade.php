<h3>Lista de Roles</h3>
<br>
<div class="form-group">
    <ul class="list-unstyled">
        @foreach($roles as $role)
            <li>
                <label>
                    {{ Form::checkbox('roles[]', $role->id, null) }}
                    {{ $role->name }}
                    <em>({{ $role->description ?: 'Sin descripcion'}})</em>
                </label>
            </li>
        @endforeach
    </ul>
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>