@extends('layout')

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
        <button type="submit" style="background-color:#805266">Guardar</button>
        <button><a href="{{route('depas.index')}}" type="submit" style="background-color:#805266">Volver</a></button>
    </form>
    @endsection