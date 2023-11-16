@extends('layouts.app')

@section('content')
    <div class="container mt-3 mb-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Formulario de Edición de Referencias</h3>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('referencia.update', $referencia) }}">
                    @csrf
                    @method('PATCH')

                    @include('Referencia.form-fields')
                </form>
                @if ($referencia)
                    <div class="m-5">
                        <div class="alert alert-info">
                            El nombre es: {{ $referencia->nombreReferencia }}<br>
                            El cliente es: {{ $referencia->cliente_id }}<br>
                            El teléfono es: {{ $referencia->telefono }}<br>
                            El parentesco es: {{ $referencia->parentesco }}<br>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
