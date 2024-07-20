{{-- @extends('layout')

@push('styles')
<link rel="stylesheet" href="{{asset('css/servicios.css')}}">
@endpush
@section('content')
    <table cellpadding=3 cellspaceing="5">
        <tr>
            <th colspan="4">Editar Servicio</th>
        </tr>
        
        @include('partials.validations-errors')
        <form action="{{ route('servicios.update', $servicio) }}" method="post">
            @csrf
            @method('PATCH')
        
            <table>
                <tr>
                    <th>Titulo</th>
                    <td><input type="text" name="titulo" value="{{ old('titulo', $servicio->titulo) }}"></td>
                </tr>
        
                <tr>
                    <th>Descripción</th>
                    <td><input type="text" name="descripcion" value="{{ old('descripcion', $servicio->descripcion) }}"></td>                
                </tr>
        
                <tr>
                    <td colspan="2" align="center"><button type="submit">Actualizar</button></td>
                </tr>
            </table>
        </form>
        



    </table>
@endsection --}}

@extends('layout')

@push('styles')
<link rel="stylesheet" href="{{asset('css/servicios.css')}}">
@endpush
@section('content')
    <table cellpadding=3 cellspaceing="5">
        <tr>
            <th colspan="4">Editar Servicio</th>
        </tr>
        
        @include('partials.validations-errors')
        <table>
            <form action="{{ route('servicios.update', $servicio) }}" method="post">
            
            @method('PATCH')
        
                @include('partials.form',['btnText'=>'Actualizar'])
            </form>
        </table>
        



    </table>
@endsection
