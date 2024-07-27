@extends('layout')

@push('styles')
<link rel="stylesheet" href="{{asset('css/servicios.css')}}">
@endpush
@section('content')
    @auth
    <table cellpadding=3 cellspaceing="5">
        <tr>
            <th colspan="4">Editar Servicio</th>
        </tr>
        <img src="{{ asset('storage/' . $servicio->image) }}" alt="{{ $servicio->titulo }}" class="imagen-previa">

        @include('partials.validations-errors')
        <table>
            <form action="{{ route('servicios.update', $servicio) }}" method="post" enctype="multipart/form-data">
            
            @method('PATCH')
        
                @include('partials.form',['btnText'=>'Actualizar'])
            </form>
        </table>
        
    </table>
    @endauth
@endsection
