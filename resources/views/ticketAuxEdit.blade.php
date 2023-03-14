@extends('layouts.app')

@section('title', 'Macuin')

@section('body')
<center>
<h1>EDITAR</h1>
    <!-- Formulario para crear cliente -->
    <br>
    <form method="post" action="{{route('ticketsAux.update', $ticket)}}">
        @csrf
        @method('put')
        <label>
        Estatus:
            <br>
            <select name="estatus">
                <option value="{{old('estatus', $ticket->estatus)}}">{{old('estatus', $ticket->estatus)}}</option>
                <option value="Completado">Completado</option>
                <option value="Asignado">Asignado</option>
                <option value="En Proceso">En Proceso</option>
                <option value="Nunca Solucionado">Nunca Solucionado</option>
            </select>
        </label>
        @error('estatus')
        <small>*{{$message}}</small>
        @enderror
        <br>
        
        <label>
        Comentarios:
            <br>
            <textarea name="comentarios" placeholder="Escriba sus comentarios" class="w-full my-2" required></textarea>
        </label>
        @error('comentarios')
        <small>*{{$message}}</small>
        @enderror
        <br>
        <button type="submit" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900"> Actualizar </button>
        <a href="{{route('ticketsAux.show',$ticket)}}" type="submit" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Volver</a>
    </form>

</center>
    @endsection
