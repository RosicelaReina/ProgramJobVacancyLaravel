@extends('auth.BaseAuth')

@section('content')
    <div class="card-body">
        <p class="login-box-msg">Registrate como empleador</p>

        <form action="{{ route('save') }}" method="post">
            @csrf
            <div class="input-group mb-3">
                <input id="company" name="company" type="text" class="form-control" placeholder="Nombre de la empresa"
                    value="{{ old('company') }}">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-house"></span>
                    </div>
                </div>
            </div>
            @error('company')
                <div class="text-small text-danger">{{ $message }}</div>
            @enderror
            <div class="input-group mb-3">
                <input id="identification" name="identification" type="text" class="form-control"
                    placeholder="Identificacion" value="{{ old('identification') }}">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
            </div>
            @error('identification')
                <div class="text-small text-danger">{{ $message }}</div>
            @enderror
            <div class="input-group mb-3">
                <input id="name" name="name" type="text" class="form-control" placeholder="Ingrese el nombre"
                    value="{{ old('name') }}">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
            </div>
            @error('name')
                <div class="text-small text-danger">{{ $message }}</div>
            @enderror
            <div class="input-group mb-3">
                <input id="phone" name="phone" type="text" class="form-control" placeholder="Telefono"
                    value="{{ old('phone') }}">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-phone"></span>
                    </div>
                </div>
            </div>
            @error('phone')
                <div class="text-small text-danger">{{ $message }}</div>
            @enderror
            <div class="input-group mb-3">
                <input id="address" name="address" type="text" class="form-control" placeholder="Direccion"
                    value="{{ old('address') }}">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-address"></span>
                    </div>
                </div>
            </div>
            @error('address')
                <div class="text-small text-danger">{{ $message }}</div>
            @enderror
            <div class="input-group mb-3">
                <input id="email" name="email" type="email" class="form-control" placeholder="Correo electrónico"
                    value="{{ old('email') }}">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            @error('email')
                <div class="text-small text-danger">{{ $message }}</div>
            @enderror
            <div class="input-group mb-3">
                <input id="password" name="password" type="password" class="form-control" placeholder="Contraseña">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            @error('password')
                <div class="text-small text-danger">{{ $message }}</div>
            @enderror
            <div class="input-group mb-3">
                <input id="password_confirmation" name="password_confirmation" type="password" class="form-control"
                    placeholder="Confirmar contraseña">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            @error('password_confirmation')
                <div class="text-small text-danger">{{ $message }}</div>
            @enderror
            <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                        <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                        <label for="agreeTerms">
                            Acepto los <a href="#">términos</a>
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Registrar </button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <a href="{{ route('login') }}" class="text-center">Ya estoy registrado</a>
    </div>
@endsection
