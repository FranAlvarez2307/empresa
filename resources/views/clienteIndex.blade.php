@extends('layouts.app')

@section('title', 'Macuin')

@section('body')


<h1>LISTA DE CLIENTES </h1>
<ul>
    @foreach($clientes as $cliente)
    <li><a href="{{route('clientes.show', $cliente->id)}}">Cliente: {{$cliente->nombre}}</a></li>
    @endforeach

    
    <button><a href = "{{route('clientes.create',$clientes)}}" type="submit" style="background-color:#805266" >CREAR</a></button>
</ul>
@endsection