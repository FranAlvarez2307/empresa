@extends('layouts.app')
@section('title', 'Macuin')

@section('body')

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
        <button type="submit" style="background-color:#805266"> Actualizar </button>
    </form>
    @endsection
