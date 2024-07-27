@csrf

<tr>  
    <td colspan="2">
        <div class="custom-file">
            <input type="file" name="image" class="custom-file-input" id="customFile">
            <label for="customFile" class="custom-file-label">Seleccione el archivo</label>
        </div>
    </td>
</tr>
<tr>
    <th>Titulo</th>
    <td><input type="text" name="titulo" value="{{ old('titulo', $servicio->titulo) }}"></td>
</tr>

<tr >
    <th>Descripción</th>
    <td><input type="text" name="descripcion" value="{{ old('descripcion', $servicio->descripcion) }}"></td>                
</tr>

<tr>
    <td colspan="2" align="center"><button>{{$btnText}}</button></td>
</tr>