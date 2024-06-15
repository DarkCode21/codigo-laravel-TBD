@extends('layout')

@section('content')
    <div class="container">
        <h1>Listado de Personas</h1>
        <a href="{{ route('personas.create') }}" class="btn btn-success">
            <i class="bi bi-plus"></i> Agregar
        </a>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Apellido</th>
                    <th>Nombre</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Edad</th>
                    <th>Sueldo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($personas as $persona)
                    <tr>
                        <td>{{ $persona->cPerApellido }}</td>
                        <td>{{ $persona->cPerNombre }}</td>
                        <td>{{ $persona->dPerFechaNac->format('d/m/Y') }}</td>
                        <td>{{ $persona->nPerEdad }}</td>
                        <td>{{ $persona->nPerSueldo }}</td>
                        <td>
                            <a href="{{ route('personas.show', $persona->nPerCodigo) }}" class="btn btn-info btn-sm">Ver Detalles</a>
                            <a href="{{ route('personas.edit', $persona->nPerCodigo) }}" class="btn btn-primary btn-sm">Editar</a>
                            <form action="{{ route('personas.destroy', $persona->nPerCodigo) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="paginacion">
            {{ $personas->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
