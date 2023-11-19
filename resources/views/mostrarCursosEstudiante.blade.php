@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Cursos Disponibles') }}</div>

                    <div class="card-body">
                        @if(count($cursos) > 0)
                            <ul>
                                @foreach($cursos as $curso)
                                    <li>
                                        <strong>Título:</strong> {{ $curso->nombre }} <br>
                                        <strong>Descripción:</strong> {{ $curso->descripcion }} <br>
                                        <strong>Docente:</strong> {{ $curso->docente->Nombres }} {{ $curso->docente->Apellidos }} <br>
                                        <a href="{{ route('estudiante.mostrar_curso', $curso->id) }}">Ver Curso</a>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p>No hay cursos disponibles.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
