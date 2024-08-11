@csrf

<div class="form-group">
    <label for="customFile">Imagen</label>
    <div class="custom-file">
        <input type="file" name="image" class="custom-file-input" id="customFile">
        <label class="custom-file-label" for="customFile">Seleccione el archivo</label>
    </div>
</div>

<div class="form-group">
    <label for="titulo">Título</label>
    <input type="text" name="titulo" id="titulo" class="form-control" value="{{ old('titulo', $servicio->titulo) }}" required>
</div>

<div class="form-group">
    <label for="descripcion">Descripción</label>
    <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{ old('descripcion', $servicio->descripcion) }}" required>
</div>

<div class="form-group">
    <label for="category_id">Categoría</label>
    <select name="category_id" id="category_id" class="form-control" required>
        <option value="">Seleccione una categoría</option>
        @foreach($categories as $id => $name)
            <option value="{{ $id }}" {{ old('category_id', $servicio->category_id) == $id ? 'selected' : '' }}>
                {{ $name }}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group text-center">
    <button type="submit" class="btn btn-primary">{{$btnText}}</button>
</div>
