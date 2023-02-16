@extends('layout')

@section('title', 'Macuin')

@section('body')

<h1>EDITAR CLIENTE</h1>
    <!-- Formulario para crear cliente -->
    <br>
    <form method="post" action="{{route('clientes.update', $cliente)}}">
        @csrf
        @method('put')
        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" value="{{old('nombre', $cliente->nombre)}}">
        </label>
        @error('nombre')
        <small>*{{$message}}</small>
        @enderror
        <br>
        
        <label>
            puesto:
            <br>
            <input type="text" name="puesto" value="{{old('puesto', $cliente->puesto)}}">
        </label>
        @error('puesto')
        <small>*{{$message}}</small>
        @enderror
        <br>
        
        <label>
            Correo:
            <br>
            <input type="email" name="correo" value="{{old('correo', $cliente->correo)}}">
        </label>
        @error('correo')
        <small>*{{$message}}</small>
        @enderror
        <br>

        <label>
            contraseña:
            <br>
            <input type="number" name="contraseña" value="{{old('contraseña', $cliente->contraseña)}}">
        </label>
        @error('contraseña')
        <small>*{{$message}}</small>
        @enderror
        <br>

        <br>
        <button type="submit" style="background-color:#805266"> Actualizar </button>
    </form>
    @endsection

