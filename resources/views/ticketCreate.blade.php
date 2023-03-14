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
            <select name="autor">
                <option value="">Seleccione un cliente</option>
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
                <option value="">Seleccione un departamento</option>
                @foreach($depa as $dep)
                <option value="{{$dep->nombre}}">{{$dep->nombre}}</option>
                @endforeach
            </select>        </label>
        @error('departamento')
        <small>*{{$message}}</small>
        @enderror
        <br>
        
        <label>
            Clasificación:
            <br>
            <select name="clasificacion">
                <option value="">Seleccione un departamento</option>
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
            <input type="text" name="detalles" value="{{old('detalles')}}">
        </label>
        @error('detalles')
        <small>*{{$message}}</small>
        @enderror
        <br>
        <br>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{route('tickets.index')}}" type="submit" class="text-white btn btn-primary">Volver</a>
    </form>
            </center>
    @endsection