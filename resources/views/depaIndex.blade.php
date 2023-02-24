@extends('layouts.app')
@section('title', 'Macuin')

@section('body')


<h1>LISTA DE DEPARTAMENTOS </h1>
<button><a href = "{{route('depas.create',$depas)}}" type="submit" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900" >CREAR</a></button>

<ul>
    @foreach($depas as $depa)
    <li><a href="{{route('depas.show', $depa->id)}}" >DEPARTAMENTO: {{$depa->nombre}}</a></li>
    @endforeach

    
    </ul>
@endsection