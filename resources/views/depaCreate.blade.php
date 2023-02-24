@extends('layouts.app')
@section('title', 'Macuin')

@section('body')

<h1>CREAR</h1>
    <!-- Formulario para crear estudiante -->
    <br>
    <form method="post" action="{{route('depas.store')}}">
        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" value="{{old('nombre')}}">
        </label>
        @error('nombre')
        <small>*{{$message}}</small>
        @enderror
        <br>


        <br>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <button><a href="{{route('depas.index')}}" type="submit" class="btn btn-primary">Volver</a></button>
    </form>
    @endsection