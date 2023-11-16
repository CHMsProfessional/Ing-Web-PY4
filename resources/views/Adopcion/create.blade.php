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
                    <h3 class="text-lg font-medium text-gray-900">Formulario de Adopcion</h3>
                </div>
                <div class="m-2">
                    <form method="post" action="{{route('adopcion.store')}}">
                        @csrf
                        @include('Adopcion.form-fields')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
