@extends('layouts.app')

@section('title', 'Macuin')

@section('body')

<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<h1>CLIENTE</h1>

<br>
<button><a href = "{{route('clientes.edit',$cliente)}}" type="submit" style="background-color:#805266" >Editar</a></button>
<br>
<br>
<p><strong>Nombre: </strong>{{$cliente->nombre}}</p>

<p><strong>puesto: </strong>{{$cliente->puesto}}</p>
<p><strong>Correo: </strong>{{$cliente->correo}}</p>

<p><strong>contraseña: </strong>{{$cliente->contraseña}}</p>
<br>
<br>

<form action="{{route('clientes.destroy',$cliente)}}" method="post">
@csrf
@method('delete')
<button type="submit" style="background-color:#805266">Eliminar</button> 
<button ><a href="{{route('clientes.index')}}" type="submit" style="background-color:#805266">Volver</a></button>
<br>

</form>

@endsection