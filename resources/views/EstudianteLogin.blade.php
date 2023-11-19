@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Iniciar Sesión (Estudiante)') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('estudiante.login_post') }}">
                            @csrf

                            <div class="form-group">
                                <label for="Correo">{{ __('Correo Electrónico') }}</label>
                                <input id="Correo" type="email" class="form-control" name="Correo" value="{{ old('Correo') }}" required autofocus>
                            </div>

                            <div class="form-group">
                                <label for="Password">{{ __('Contraseña') }}</label>
                                <input id="Password" type="password" class="form-control" name="Password" required>
                            </div>

                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Iniciar Sesión') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection