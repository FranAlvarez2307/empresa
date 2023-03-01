@extends('layouts.app')
@section('title', 'Macuin')

@section('body')
<center>
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<h1>DEPARTAMENTO</h1>

<br>
<a href = "{{route('depas.edit',$depa)}}" type="submit" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Editar</a>
<p><strong>Nombre: </strong>{{$depa->nombre}}</p>


<br>

<form action="{{route('depas.destroy',$depa)}}" method="post">
@csrf
@method('delete')
<button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Eliminar</button> 
<a href="{{route('depas.index')}}" type="submit" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Volver</a>
<br>

</form>
</center>
@endsection