@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Subir Curso') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('docente.subir_curso_post') }}" enctype="multipart/form-data">
                            @csrf

                            <div>
                                <label for="titulo">{{ __('Título del Curso') }}</label>
                                <input id="NombreDeCurso" type="text" name="NombreDeCurso" value="{{ old('NombreDeCurso') }}" required>
                            </div>

                            <div>
                                <label for="descripcion">{{ __('Descripción del Curso') }}</label>
                                <textarea id="Descripcion" name="Descripcion" rows="4" required>{{ old('Descripcion') }}</textarea>
                            </div>

                            <div>
                                <label for="duracion">{{ __('Duracion') }}</label>
                                <input id="Duracion" type="text" name="Duracion" required>{{ old('Descripcion') }}</textarea>
                            </div>

                            <div>
                                <label for="archivo">{{ __('CantidadDeTemas') }}</label>
                                <input id="CantidadDeTemas" type="text" name="CantidadDeTemas" required>{{ old('CantidadDeTemas') }}</textarea>
                            </div>

                            <div>
                                <button type="submit">
                                    {{ __('Subir Curso') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
