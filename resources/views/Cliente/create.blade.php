@extends('layouts.app')

@section('content')

    @if (!isset($id))
            <?php
            $id = null;
            ?>
    @endif
    <div class="container mt-3 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h3 class="text-lg font-medium text-gray-900">Formulario de Cliente</h3>
                </div>
                <div class="m-2">
                    <form method="post" action="{{ $id ? route('cliente.update', $id) : route('cliente.store') }}">
                        @csrf
                        @include('Cliente.form-fields')
                    </form>
                    @if ($id)
                        <div class="m-5">
                            <div class="alert alert-info">
                                El nombre es: {{ $nombres }}<br>
                                El apellido es: {{ $apellidos }}<br>
                                El teléfono es: {{ $telefono }}<br>
                                El Email es: {{ $email }}<br>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
