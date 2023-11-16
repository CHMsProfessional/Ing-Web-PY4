@if(!isset($cliente_id))
     <?php   $cliente_id = null; ?>
@endif

<div class="mb-3">
    <label for="nombreReferencia" class="form-label">Nombres</label>
    <input type="text" class="form-control" id="nombreReferencia" name="nombreReferencia" value="{{ old('nombreReferencia', $referencia->nombreReferencia ?? '') }}" required>
    @error('nombreReferencia')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="">
    <input type="hidden" class="form-control" id="cliente_id" name="cliente_id" value="{{ old('cliente_id', $cliente_id ?? $referencia->$cliente_id) }}" required>
    @error('cliente_id')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="telefono" class="form-label">Teléfono</label>
    <input type="number" class="form-control" id="telefono" name="telefono" value="{{ old('telefono', intval($referencia->telefono) ?? 1) }}" required>
    @error('telefono')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="parentesco" class="form-label">parentesco</label>
    <input type="text" class="form-control" id="parentesco" name="parentesco" value="{{ old('parentesco', $referencia->parentesco ?? '') }}" required>
    @error('parentesco')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{ route('cliente.index') }}" class="btn btn-link">Volver</a>
</div>
