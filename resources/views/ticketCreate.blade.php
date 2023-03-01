@extends('layouts.app')

@section('title', 'Macuin')

@section('body')
<center>
<h1>CREAR</h1>
    <!-- Formulario para crear estudiante -->
    <br>
    <form method="post" action="{{route('tickets.store')}}">
        @csrf

        <label>
            Autor:
            <br>
            <input type="text" name="autor" value="{{old('autor')}}">
        </label>
        @error('autor')
        <small>*{{$message}}</small>
        @enderror
        <br>

        <label>
            Departamento:
            <br>
            <input type="text" name="departamento" value="{{old('departamento')}}">
        </label>
        @error('departamento')
        <small>*{{$message}}</small>
        @enderror
        <br>
        
        <label>
            Clasificación:
            <br>
            <input type="text" name="clasificacion" value="{{old('clasificacion')}}">
        </label>
        @error('clasificacion')
        <small>*{{$message}}</small>
        @enderror
        <br>

        <label>
            Detalles:
            <br>
            <input type="text" name="detalles" value="{{old('detalles')}}">
        </label>
        @error('detalles')
        <small>*{{$message}}</small>
        @enderror
        <br>

        <label>
            Estatus:
            <br>
            <input type="text" name="estatus" value="{{old('contraseña')}}">
        </label>
        @error('estatus')
        <small>*{{$message}}</small>
        @enderror
        <br>

        <br>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{route('tickets.index')}}" type="submit" class="text-white btn btn-primary">Volver</a>
    </form>
            </center>
    @endsection