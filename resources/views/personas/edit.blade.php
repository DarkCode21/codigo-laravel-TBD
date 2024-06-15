@extends('layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/crud-styles.css') }}">
    <link rel="stylesheet" href="{{asset('css/servicios.css')}}">

@endpush

@section('content')
    <div class="crud-container">
        <h1 class="crud-title">Editar Persona</h1>

        <form class="crud-form" action="{{ route('personas.update', $persona->nPerCodigo )}}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="cPerApellido" value="{{ $persona->cPerApellido }}" required>
            </div>
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="cPerNombre" value="{{ $persona->cPerNombre }}" required>
            </div>
            <div>
                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" name="cPerDireccion" value="{{ $persona->cPerDireccion }}">
            </div>
            <div>
                <label for="fecha_nac">Fecha de Nacimiento:</label>
                <input type="date" id="fecha_nac" name="dPerFechaNac" value="{{ $persona->dPerFechaNac->format('Y-m-d') }}" required>
            </div>
            <div>
                <label for="edad">Edad:</label>
                <input type="number" id="edad" name="nPerEdad" value="{{ $persona->nPerEdad }}" required>
            </div>
            <div>
                <label for="sueldo">Sueldo:</label>
                <input type="number" id="sueldo" name="nPerSueldo" value="{{ $persona->nPerSueldo }}" step="0.01" required>
            </div>
            
            <div class="pie-tarjeta text-center">
                <div class="text-center">
                    <button type="submit">Guardar Cambios</button>
                </div>
                <div>
                    <a href="{{ route('personas.index') }}" class="btn-personalizado">Volver a la Lista</a>
                </div>
            </div>

        </form>
    </div>
@endsection
