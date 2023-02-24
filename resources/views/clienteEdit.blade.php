@extends('layouts.app')
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
            Puesto:
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
            Contraseña:
            <br>
            <input type="number" name="contraseña" value="{{old('contraseña', $cliente->contraseña)}}">
        </label>
        @error('contraseña')
        <small>*{{$message}}</small>
        @enderror
        <br>

        <br>
        <button type="submit" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900"> Actualizar </button>
    </form>
    @endsection

