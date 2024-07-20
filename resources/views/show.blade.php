@extends('layout')
@section('title','Servicio | ' . $servicio->titulo)
@push('styles')
    <link rel="stylesheet" href="{{asset('css/servicios.css')}}">
@endpush

@section('content')

    <table class="tabla-servicio">
        <tr>
            <td colspan="4" class="titulo-servicio">{{$servicio->titulo}}</td>
        </tr>
        <tr>
            <td colspan="4" class="descripcion-servicio">{{$servicio->descripcion}}</td>
        </tr>
        <tr>
            <td colspan="4" class="fecha-servicio">{{$servicio->created_at->diffForHumans()}}</td>
        </tr>
        <tr><a href="{{route('servicios.edit',$servicio)}}" class="btn-personalizado"class="btn-personalizado">Editar</a></tr>

        <tr colspan="4">
            <form action="{{route('servicios.destroy',$servicio)}}" method="POST">
                @csrf @method('DELETE')
                <button>Eliminar</button>
                
            </form>
        </tr>



    </table>
    <div class="pie-tarjeta text-center">
        {{-- <a href="{{ route('servicios') }}" class="btn-personalizado">Volver a la Lista</a> --}}
        <a href="{{ route('servicios.index') }}" class="btn-personalizado">Volver a la Lista</a>

    </div>
@endsection
