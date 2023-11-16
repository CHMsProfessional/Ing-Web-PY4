@extends('layouts.app')

@section('content')

     {{$cliente_id}}
    <div class="container mt-3 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h3 class="text-lg font-medium text-gray-900">Formulario de Referencia</h3>
                </div>
                <div class="m-2">
                    <form method="post" action="{{route('referencia.store')}}">
                        @csrf
                        @include('Referencia.form-fields')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
