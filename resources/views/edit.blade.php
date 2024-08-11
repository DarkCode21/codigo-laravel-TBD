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
            @csrf

            <div class="form-group">
                <label for="category_id">Categoría</label>
                <select name="category_id" id="category_id" class="form-control" required>
                    <option value="" disabled {{ $servicio->category_id ? '' : 'selected' }}>Seleccione una categoría</option>
                    @foreach($categories as $id => $name)
                        <option value="{{ $id }}" {{ $servicio->category_id == $id ? 'selected' : '' }}>
                            {{ $name }}
                        </option>
                    @endforeach
                </select>
            </div>
            

                @include('partials.form',['btnText'=>'Actualizar'])
            </form>
        </table>
        
    </table>
    @endauth
@endsection
