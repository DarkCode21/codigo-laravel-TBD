@extends('layout')

@push('styles')
<link rel="stylesheet" href="{{asset('css/servicios.css')}}">

    <link rel="stylesheet" href="{{ asset('css/crud-styles.css') }}">
@endpush

@section('content')
    <div class="crud-container">
        <h1 class="crud-title">Detalles de Persona</h1>

        <p class="crud-detail"><strong>Apellido:</strong> {{ $persona->cPerApellido }}</p>
        <p class="crud-detail"><strong>Nombre:</strong> {{ $persona->cPerNombre }}</p>
        <p class="crud-detail"><strong>Dirección:</strong> {{ $persona->cPerDireccion ?: 'No especificada' }}</p>
        <p class="crud-detail"><strong>Fecha de Nacimiento:</strong> {{ $persona->dPerFechaNac->format('d/m/Y') }}</p>
        <p class="crud-detail"><strong>Edad:</strong> {{ $persona->nPerEdad }}</p>
        <p class="crud-detail"><strong>Sueldo:</strong> {{ $persona->nPerSueldo }}</p>

        <div class="pie-tarjeta text-center">
            <div>
                <a href="{{ route('personas.index') }}" class="btn-personalizado">Volver a la Lista</a>
            </div>
        </div>
    </div>


@endsection

