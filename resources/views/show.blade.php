@extends('layout')
@section('title','Servicio | ' . $servicio->titulo)
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/servicios.css') }}">
@endpush

@section('content')
    @auth
        <div class="card-servicio">
            @if ($servicio->image)
                <img src="{{ asset('storage/' . $servicio->image) }}" alt="{{$servicio->titulo}}" class="imagen-card">
            @endif
            <div class="contenido-card">
                <h1 class="titulo-card">{{ $servicio->titulo }}</h1>
                <p class="descripcion-card">{{ $servicio->descripcion }}</p>
                <p class="fecha-card">Publicado {{ $servicio->created_at->diffForHumans() }}</p>
                <div class="acciones-card">
                    <a href="{{ route('servicios.edit', $servicio) }}" class="btn-personalizado">Editar</a>
                    <form action="{{ route('servicios.destroy', $servicio) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-personalizado btn-eliminar">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    @endauth
    <div class="pie-tarjeta text-center">
        <a href="{{ route('servicios.index') }}" class="btn-personalizado">Volver a la Lista</a>
    </div>
@endsection
