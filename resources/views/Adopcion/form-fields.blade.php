<div class="mb-3">
    <label for="cliente_id" class="form-label">Cliente</label>
    <select class="form-select" aria-label="cliente_id" name="cliente_id" id="cliente_id">
        <option selected>Seleccione un cliente</option>
        @foreach ($clientes as $cliente)
            <option value="{{ $cliente->cliente_id }}">{{ $cliente->nombres }} {{ $cliente->apellidos }}</option>
        @endforeach
    </select>
    @error('cliente_id')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="mascota_id" class="form-label">Mascota</label>
    <select class="form-select" aria-label="mascota_id" name="mascota_id" id="mascota_id">
        <option selected>Seleccione una mascota</option>
        @foreach ($mascotas as $mascota)
            <option value="{{ $mascota->mascota_id }}">{{ $mascota->nombre }}</option>
        @endforeach
    </select>
    @error('mascota')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="fechaAdopcion" class="form-label">Fecha</label>
    <input type="date" class="form-control" id="fechaAdopcion" name="fechaAdopcion" value="{{ old('fechaAdopcion', $adopcion->fechaAdopcion ?? '2023-11-16') }}" required>
    @error('fechaAdopcion')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{ route('adopcion.index') }}" class="btn btn-link">Volver</a>
</div>
