<div align="center">
    <h3>Cambio de Contraseña</h3>    
</div>


<div class="form-group row">
    <label for="mypassword" class="col-md-4 col-form-label text-md-right">
        {{ __('Contraseña actual') }}
    </label>

    <div class="col-md-6">
        <input id="mypassword" type="password" class="form-control{{ $errors->has('mypassword') ? ' is-invalid' : '' }}" name="mypassword" required>

        @if ($errors->has('mypassword'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('mypassword') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="password" class="col-md-4 col-form-label text-md-right">
        {{ __('Nueva contraseña') }}
    </label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">
        {{ __('Confirmar contraseña') }}
    </label>

    <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
    </div>
</div>

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Actualizar') }}
        </button>
    </div>
</div>