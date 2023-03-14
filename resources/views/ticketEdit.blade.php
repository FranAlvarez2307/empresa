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
            <select name="autor">
                <option value="{{old('autor', $ticket->autor)}}">{{old('autor', $ticket->autor)}}</option>
                @foreach($clientes as $cliente)
                <option value="{{$cliente->nombre}}">{{$cliente->nombre}}</option>
                @endforeach
            </select>
        </label>
        @error('autor')
        <small>*{{$message}}</small>
        @enderror
        <br>
        
        <label>
        Departamento:
            <br>
            <select name="departamento">
                <option value="{{old('departamento', $ticket->departamento)}}">{{old('departamento', $ticket->departamento)}}</option>
                @foreach($depa as $dep)
                <option value="{{$dep->nombre}}">{{$dep->nombre}}</option>
                @endforeach
            </select>
        </label>
        @error('departamento')
        <small>*{{$message}}</small>
        @enderror
        <br>
        
        <label>
        Clasificacion:
            <br>
            <select name="clasificacion">
                <option value="{{old('clasificacion', $ticket->clasificacion)}}">{{old('clasificacion', $ticket->clasificacion)}}</option>
                <option value="Falla de Office">Falla de Office</option>
                <option value="Falla de Red">Falla de Red</option>
                <option value="Falla de Software">Falla de Software</option>
                <option value="Falla de Hardware">Falla de Hardware</option>
                <option value="Mantenimiento Preventivo">Mantenimiento Preventivo</option>
                <option value="Otro">Otro</option>
            </select>
        </label>
        @error('clasificacion')
        <small>*{{$message}}</small>
        @enderror
        <br>

        <label>
        Detalles:
            <br>
            <input type="text" name="detalles" value="{{old('detalles', $ticket->detalles)}}">
        </label>
        @error('detalles')
        <small>*{{$message}}</small>
        @enderror
        <br>

        <br>
        <button type="submit" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900"> Actualizar </button>
        <a href="{{route('tickets.show',$ticket)}}" type="submit" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Volver</a>
    </form>

</center>
    @endsection
