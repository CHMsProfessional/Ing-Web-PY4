@extends('layouts.app')

@section('content')
    <div class="container mt-3 mb-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Formulario de Edición de Clientes</h3>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('cliente.update', $cliente) }}">
                    @csrf
                    @method('PATCH')

                    @include('Cliente.form-fields')
                </form>
                @if ($cliente)
                    <div class="mb-3">
                        <div class="alert alert-info">
                            El nombre era: {{ $cliente->nombres }}<br>
                            El apellido era: {{ $cliente->apellidos }}<br>
                            El teléfono era: {{ $cliente->telefono }}<br>
                            El Email era: {{ $cliente->email }}<br>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
