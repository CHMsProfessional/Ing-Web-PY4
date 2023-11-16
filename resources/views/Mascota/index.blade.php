@extends('layouts.app')

@section('content')
    <div class="container mt-3 mb-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Lista de Mascotas</h3>
            </div>
            <div class="card-body">
                @if ($mascotas->isEmpty())
                    <p class="text-muted">No hay mascotas</p>
                @else
                    <table class="table table-bordered">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Raza</th>
                            <th scope="col">Color</th>
                            <th scope="col">tamano</th>
                            <th scope="col">disponibilidad</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($mascotas as $mascota)
                            <tr>
                                <td>{{ $mascota->mascota_id }}</td>
                                <td>{{ $mascota->nombre }}</td>
                                <td>{{ $mascota->tipo }}</td>
                                <td>{{ $mascota->raza }}</td>
                                <td>{{ $mascota->color }}</td>
                                <td>{{ $mascota->tamano }}</td>

                                <td>
                                    @if($mascota->disponibilidad == 1)
                                        <div class="alert alert-success">
                                            Disponible
                                        </div>
                                    @else
                                        <div class="alert alert-danger">
                                            No Disponible
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('mascota.edit', ['mascota' => $mascota]) }}" class="btn btn-info">Editar</a>
                                </td>
                                <td>
                                    <form action="{{ route('mascota.destroy', ['mascota' => $mascota]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Está seguro de eliminar la Mascota?')">
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
                    <a href="{{ route('mascota.create') }}" class="btn btn-primary">Crear Mascota</a>
                </div>
            </div>
        </div>
    </div>
@endsection
