@extends('layout')

@section('title','Contacto')

@section('content')
<div class="container mt-5">
    <h1>Contacto</h1>
    
    @if (session('estado'))
        <div class="alert alert-success">
            {{ session('estado') }}
        </div>
    @else
        <form action="{{ route('contacto') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}">
                {{$errors->first('nombre')}}
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                {{$errors->first('email')}}
            </div>
            <div class="mb-3">
                <label for="asunto" class="form-label">Asunto</label>
                <input type="text" class="form-control" id="asunto" name="asunto" value="{{ old('asunto') }}">
                {{$errors->first('asunto')}}
            </div>
            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje</label>
                <textarea class="form-control" id="mensaje" name="mensaje" rows="4">{{ old('mensaje') }}</textarea>
                {{$errors->first('mensaje')}}
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="reset" class="btn btn-danger">Cancelar</button>
        </form>
    @endif
    
    
    
</div>
@include('partials.validations-errors')
@endsection