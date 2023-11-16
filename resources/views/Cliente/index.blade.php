@extends('layouts.app')

@section('content')
    <div class="container mt-3 mb-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Lista de Clientes</h3>
            </div>
            <div class="card-body">
                @if ($clientes->isEmpty())
                    <p class="text-muted">No hay clientes</p>
                @else
                    <table class="table table-bordered">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Email</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->cliente_id }}</td>
                                <td>{{ $cliente->nombres }}</td>
                                <td>{{ $cliente->apellidos }}</td>
                                <td>{{ $cliente->telefono }}</td>
                                <td>{{ $cliente->email }}</td>
                                <td>
                                    <a href="{{ route('cliente.edit', ['cliente' => $cliente]) }}" class="btn btn-info">Editar</a>
                                </td>
                                <td>
                                    <a href="{{ route('referencia.index', ['cliente' => $cliente->cliente_id]) }}" class="btn btn-primary">Ver Referencias</a>
                                </td>
                                <td>
                                    <form action="{{ route('cliente.destroy', $cliente) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Está seguro de eliminar el Cliente?')">
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
                    <a href="{{ route('cliente.create') }}" class="btn btn-primary">Crear Cliente</a>
                </div>
            </div>
        </div>
    </div>
@endsection
