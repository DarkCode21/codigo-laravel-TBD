@extends('layout')

@section('title','Contacto')

@section('content')
<div class="container mt-5">
    <h1>Contacto</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <form action="{{ route('contacto') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}">
            {{-- @error('nombre')
                <div class="text-danger">{{ $message }}</div>
            @enderror --}}
            {{$errors->first('nombre')}}
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
            {{-- @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror --}}
            {{$errors->first('email')}}
        </div>
        <div class="mb-3">
            <label for="asunto" class="form-label">Asunto</label>
            <input type="text" class="form-control" id="asunto" name="asunto" value="{{ old('asunto') }}">
            {{-- @error('asunto')
                <div class="text-danger">{{ $message }}</div>
            @enderror --}}
            {{$errors->first('asunto')}}
        </div>
        <div class="mb-3">
            <label for="mensaje" class="form-label">Mensaje</label>
            <textarea class="form-control" id="mensaje" name="mensaje" rows="4">{{ old('mensaje') }}</textarea>
            {{-- @error('mensaje')
                <div class="text-danger">{{ $message }}</div>
            @enderror --}}
            {{$errors->first('mensaje')}}
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        <button type="reset" class="btn btn-danger">Cancelar</button>
    </form>
</div>
@include('partials.validations-errors')
@endsection