@extends('layouts.app')

@section('title', 'Macuin')

@section('body')


<h1>LISTA DE CLIENTES </h1>
<a href = "{{route('clientes.create',$clientes)}}" type="submit" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">CREAR</a>

<ul>
    @foreach($clientes as $cliente)
    <li><a href="{{route('clientes.show', $cliente->id)}}">Cliente: {{$cliente->nombre}}</a></li>
    @endforeach

    
</ul>
@endsection