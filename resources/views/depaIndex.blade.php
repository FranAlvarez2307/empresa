@extends('layouts.app')
@section('title', 'Macuin')

@section('body')
<center>

<h1>LISTA DE DEPARTAMENTOS </h1>
<div><a href="{{route('jefe')}}" type="button" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Regresar</a></div>
<button><a href = "{{route('depas.create',$depas)}}" type="submit" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900" >Añadir Departamento</a></button>

<ul>
    @foreach($depas as $depa)
    <li><a href="{{route('depas.show', $depa->id)}}" >DEPARTAMENTO: {{$depa->nombre}}</a></li>
    @endforeach

    
    </ul>
</center>
@endsection