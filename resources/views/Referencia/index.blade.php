@extends('layouts.app')

@section('content')



    <div class="container mt-3 mb-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Lista de Referencias</h3>
            </div>
            <div class="card-body">
                @if ($referencias->isEmpty())
                    <p class="text-muted">No hay referencias</p>
                @else
                    <table class="table table-bordered">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre de la Referencia</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">telefono</th>
                            <th scope="col">parentesco</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($referencias as $referencia)
                            <tr>
                                <td>{{ $referencia->referencias_id }}</td>
                                <td>{{ $referencia->nombreReferencia }}</td>
                                <td>{{ $referencia->cliente->nombres }} {{ $referencia->cliente->apellidos }}</td>
                                <td>{{ $referencia->telefono }}</td>
                                <td>{{ $referencia->parentesco }}</td>
                                <td>
                                    <a href="{{ route('referencia.edit', ['referencia' => $referencia]) }}"
                                       class="btn btn-info">Editar</a>
                                </td>
                                <td>
                                    <form action="{{ route('referencia.destroy', $referencia) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('¿Está seguro de eliminar el Referencia?')">
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
                    <a href="{{ route('referencia.create', $cliente_id) }}" class="btn btn-primary">Crear Referencia</a>
                </div>
            </div>
        </div>
    </div>
@endsection
