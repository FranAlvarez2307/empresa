@extends('layouts.app')

@section('title', 'Macuin')

@section('body')
<center>
<h1>EDITAR</h1>
    <!-- Formulario para crear cliente -->
    <br>
    <form method="post" action="{{route('tickets.update', $ticket)}}">
        @csrf
        @method('put')
        <label>
        Autor:
            <br>
            <input type="text" name="Autor" value="{{old('autor', $ticket->autor)}}">
        </label>
        @error('autor')
        <small>*{{$message}}</small>
        @enderror
        <br>
        
        <label>
        Departamento:
            <br>
            <input type="text" name="departamento" value="{{old('departamento', $ticket->departamento)}}">
        </label>
        @error('departamento')
        <small>*{{$message}}</small>
        @enderror
        <br>
        
        <label>
        clasificacion:
            <br>
            <input type="email" name="clasificacion" value="{{old('clasificacion', $ticket->clasificacion)}}">
        </label>
        @error('clasificacion')
        <small>*{{$message}}</small>
        @enderror
        <br>

        <label>
        detalles:
            <br>
            <input type="number" name="detalles" value="{{old('detalles', $ticket->detalles)}}">
        </label>
        @error('detalles')
        <small>*{{$message}}</small>
        @enderror
        <br>

        <br>
        <button type="submit" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900"> Actualizar </button>
        <a href="{{route('tickets.index')}}" type="submit" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Volver</a>
    </form>
</center>
    @endsection
