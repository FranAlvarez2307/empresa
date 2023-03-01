@extends('layouts.app')
@section('title', 'Macuin')

@section('body')
<center>
<h1>EDITAR DEPARTAMENTO</h1>
    <!-- Formulario para crear cliente -->
    <br>
    <form method="post" action="{{route('depas.update', $depa)}}">
        @csrf
        @method('put')
        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" value="{{old('nombre', $depa->nombre)}}">
        </label>
        @error('nombre')
        <small>*{{$message}}</small>
        @enderror
        <br>
        

        <br>
        <button type="submit" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900"> Actualizar </button>
    </form>
</center>
    @endsection
