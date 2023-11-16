@extends('layouts.app')

@section('content')
    <div class="container mt-3 mb-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Lista de Adopciones</h3>
            </div>
            <div class="card-body">
                @if ($adopciones->isEmpty())
                    <p class="text-muted">No hay adopciones</p>
                @else
                    <table class="table table-bordered">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Mascota</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Fecha</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($adopciones as $adopcion)
                            <tr>
                                <td>{{ $adopcion->adopcion_id }}</td>
                                <td>{{ $adopcion->cliente->nombres }} {{ $adopcion->cliente->apellidos }}</td>
                                <td>{{ $adopcion->mascota->nombre }}</td>
                                <td>{{ $adopcion->mascota->tipo }}</td>
                                <td>{{ $adopcion->fechaAdopcion }}</td>
                                <td>
                                    <form action="{{ route('adopcion.destroy', $adopcion) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Está seguro de eliminar el Adopcion?')">
                                            Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
                <div class="text-center">
                    <a href="{{ route('adopcion.create') }}" class="btn btn-primary">Crear Adopcion</a>
                </div>
            </div>
        </div>
    </div>
@endsection
