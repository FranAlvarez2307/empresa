@extends('layout')

@section('title', 'Macuin')

@section('body')

<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<h1>DEPARTAMENTO</h1>

<br>
<button><a href = "{{route('depas.edit',$depa)}}" type="submit" style="background-color:#805266" >Editar</a></button>
<br>
<br>
<p><strong>Nombre: </strong>{{$depa->nombre}}</p>


<br>

<form action="{{route('depas.destroy',$depa)}}" method="post">
@csrf
@method('delete')
<button type="submit" style="background-color:#805266">Eliminar</button> 
<button ><a href="{{route('depas.index')}}" type="submit" style="background-color:#805266">Volver</a></button>
<br>

</form>

@endsection