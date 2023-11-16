<div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $mascota->nombre ?? '') }}" required>
    @error('nombre')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="tipo" class="form-label">Tipo</label>
    <select class="form-control" id="tipo" name="tipo" required>
        <option value="">Seleccione</option>
        <option value="perro">Perro</option>
        <option value="gato">Gato</option>
        <option value="caballo">Caballo</option>
        <option value="otro">Otro</option>
    </select>
</div>
<div class="mb-3">
    <label for="raza" class="form-label">Raza</label>
    <input type="text" class="form-control" id="raza" name="raza" value="{{ old('raza', $mascota->raza ?? '') }}" required>
    @error('raza')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="color" class="form-label">Color</label>
    <input type="text" class="form-control" id="color" name="color" value="{{ old('color', $mascota->color ?? '') }}" required>
    @error('color')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="tamano" class="form-label">Tamano</label>
    <input type="text" class="form-control" id="tamano" name="tamano" value="{{ old('tamano', $mascota->tamano ?? '') }}" required>
    @error('tamano')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="disponibilidad" class="form-label">disponibilidad</label>
    <input type="hidden" class="form-control" id="disponibilidad" name="disponibilidad" value="{{ old('disponibilidad', $mascota->disponibilidad ?? 1) }}" required>
    @error('tamano')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{ route('mascota.index') }}" class="btn btn-link">Volver</a>
</div>
