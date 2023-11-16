<div class="mb-3">
    <label for="nombres" class="form-label">Nombres</label>
    <input type="text" class="form-control" id="nombres" name="nombres" value="{{ old('nombres', $cliente->nombres ?? '') }}" required>
    @error('nombres')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="apellidos" class="form-label">Apellidos</label>
    <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ old('apellidos', $cliente->apellidos ?? '') }}" required>
    @error('apellidos')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="telefono" class="form-label">Teléfono</label>
    <input type="number" class="form-control" id="telefono" name="telefono" value="{{ old('telefono', intval($cliente->telefono) ?? 1) }}" required>
    @error('telefono')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $cliente->email ?? '') }}" required>
    @error('email')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{ route('cliente.index') }}" class="btn btn-link">Volver</a>
</div>
