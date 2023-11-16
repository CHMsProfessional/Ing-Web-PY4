@extends('layouts.app')

@section('content')
    <div class="container mt-3 mb-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Formulario de Edición de Mascotas</h3>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('mascota.update', $mascota) }}">
                    @csrf
                    @method('PATCH')

                    @include('Mascota.form-fields')
                </form>
                @if ($mascota)
                    <div class="mb-3">
                        <div class="alert alert-info">
                            El nombre era: {{ $mascota->nombre }}<br>
                            El tipo era: {{ $mascota->tipo }}<br>
                            la raza era: {{ $mascota->raza }}<br>
                            El color era: {{ $mascota->color }}<br>
                            El tamano era: {{ $mascota->tamano }}<br>
                            La disponibilidad era: {{ $mascota->disponibilidad }}<br>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
