@extends('layout')
@push('styles')
<link rel="stylesheet" href="{{asset('css/servicios.css')}}">
@endpush
@section('content')
    <div class="form-container">
        <h2 class="form-title">Crear nuevo servicio</h2>

        <form action="{{ route('servicios.store') }}" method="POST" class="form-wrapper">
            @csrf

            <div class="form-field">
                <label for="titulo" class="form-label">Título:</label>
                <input type="text" id="titulo" name="titulo" class="form-input">
            </div>

            <div class="form-field">
                <label for="descripcion" class="form-label">Descripción:</label>
                <input type="text" id="descripcion" name="descripcion" class="form-input">
            </div>

            <button type="submit" class="form-button">Guardar</button>
        </form>

    </div>
@endsection
