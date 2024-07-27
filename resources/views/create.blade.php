@extends('layout')


@push('styles')
<link rel="stylesheet" href="{{asset('css/servicios.css')}}">
@endpush

@section('content')
    <div class="form-container">
        <h2 class="form-title">Crear nuevo servicio</h2>

    @include('partials.validations-errors')
        <form action="{{ route('servicios.store') }}" method="POST" class="form-wrapper" enctype="multipart/form-data">
            
            @include('partials.form',['btnText' => 'Guardar'])
            
        </form>

    </div>
@endsection
