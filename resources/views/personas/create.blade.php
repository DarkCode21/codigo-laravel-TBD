@extends('layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/crud-styles.css') }}">
    <link rel="stylesheet" href="{{asset('css/servicios.css')}}">

@endpush

@section('content')
    <div class="crud-container">
        <h1 class="crud-title">Crear Persona</h1>

        <form class="crud-form" action="{{ route('personas.store') }}" method="POST">
            @csrf
            <div>
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="cPerApellido" required>
            </div>
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="cPerNombre" required>
            </div>
            <div>
                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" name="cPerDireccion">
            </div>
            <div>
                <label for="fecha_nac">Fecha de Nacimiento:</label>
                <input type="date" id="fecha_nac" name="dPerFechaNac" required>
            </div>
            <div>
                <label for="edad">Edad:</label>
                <input type="number" id="edad" name="nPerEdad" required>
            </div>
            <div>
                <label for="sueldo">Sueldo:</label>
                <input type="number" id="sueldo" name="nPerSueldo" step="0.01" required>
            </div>
            

            <div class="pie-tarjeta text-center">
                <div>
                    <button type="submit">Guardar</button>
                </div>
                <div>
                    <a href="{{ route('personas.index') }}" class="btn-personalizado">Volver a la Lista</a>
                </div>
            </div>
        </form>
    </div>
@endsection
