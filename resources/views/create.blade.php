{{-- @extends('layout')


@push('styles')
<link rel="stylesheet" href="{{asset('css/servicios.css')}}">
@endpush

@section('content')
    <div class="form-container">
        <h2 class="form-title">Crear nuevo servicio</h2>

    @include('partials.validations-errors')
        <form action="{{ route('servicios.store') }}" method="POST" class="form-wrapper">
            @csrf

            <div class="form-field">
                <label for="titulo" class="form-label">Título:</label>
                
                <td><input type="text" id="titulo" name="titulo" class="form-input"><br>{{$errors->first('titulo')}}</td>
            </div>

            <div class="form-field">
                <label for="descripcion" class="form-label">Descripción:</label>
                <td><input type="text" id="descripcion" name="descripcion" class="form-input"><br>{{$errors->first('descripcion')}}</td>
                
            </div>

            <button type="submit" class="form-button">Guardar</button>
        </form>

    </div>
@endsection --}}

{{-- @extends('layout')


@push('styles')
<link rel="stylesheet" href="{{asset('css/servicios.css')}}">
@endpush

@section('content')
    <div class="form-container">
        <h2 class="form-title">Crear nuevo servicio</h2>

    @include('partials.validations-errors')
        <form action="{{ route('servicios.store') }}" method="POST" class="form-wrapper">
            @csrf

            <div class="form-field">
                <label for="titulo" class="form-label">Título:</label>
                
                <td><input type="text" id="titulo" name="titulo" class="form-input" value="{{ old('titulo', $servicio->titulo) }}"><br>{{$errors->first('titulo')}}</td>
            </div>

            <div class="form-field">
                <label for="descripcion" class="form-label">Descripción:</label>
                <td><input type="text" id="descripcion" name="descripcion" class="form-input" value="{{ old('descripcion', $servicio->descripcion) }}"><br>{{$errors->first('descripcion')}}</td>
                
            </div>

            <button type="submit" class="form-button">Guardar</button>
        </form>

    </div>
@endsection --}}


@extends('layout')


@push('styles')
<link rel="stylesheet" href="{{asset('css/servicios.css')}}">
@endpush

@section('content')
    <div class="form-container">
        <h2 class="form-title">Crear nuevo servicio</h2>

    @include('partials.validations-errors')
        <form action="{{ route('servicios.store') }}" method="POST" class="form-wrapper">
            
            @include('partials.form',['btnText' => 'Guardar'])
            
        </form>

    </div>
@endsection
