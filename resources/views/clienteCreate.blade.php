@extends('layouts.app')

@section('title', 'Macuin')

@section('body')

<h1>CREAR</h1>
    <!-- Formulario para crear estudiante -->
    <br>
    <form method="post" action="{{route('clientes.store')}}">
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

        <label>
           Puesto:
            <br>
            <input type="text" name="puesto" value="{{old('puesto')}}">
        </label>
        @error('puesto')
        <small>*{{$message}}</small>
        @enderror
        <br>

        
       
        
        <label>
            Correo:
            <br>
            <input type="email" name="correo" value="{{old('correo')}}">
        </label>
        @error('correo')
        <small>*{{$message}}</small>
        @enderror
        <br>

        <label>
            contraseña:
            <br>
            <input type="number" name="contraseña" value="{{old('contraseña')}}">
        </label>
        @error('contraseña')
        <small>*{{$message}}</small>
        @enderror
        <br>

        <br>
        <button type="submit" style="background-color:#805266">Guardar</button>
        <button><a href="{{route('clientes.index')}}" type="submit" style="background-color:#805266">Volver</a></button>
    </form>
    @endsection