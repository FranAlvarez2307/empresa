@extends('layout')

@section('title', 'Macuin')

@section('body')


<h1>LISTA DE DEPARTAMENTOS </h1>
<ul>
    @foreach($depas as $depa)
    <li><a href="{{route('depas.show', $depa->id)}}">DEPARTAMENTO: {{$depa->nombre}}</a></li>
    @endforeach

    
    <button><a href = "{{route('depas.create',$depas)}}" type="submit" style="background-color:#805266" >CREAR</a></button>
</ul>
@endsection