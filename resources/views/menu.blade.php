@extends('layouts.app')


@section('title', 'Macuin')

@section('body')

<div class="flex justify-center ">
    <div class="h-56 grid grid-cols-1 gap-4 content-center justify-items-center ">
        <div><a href="{{route('clientes.index')}}" type="submit" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900" >Administrar Perfiles</a></div>
        <div><a href="{{route('depas.index')}}" type="button" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Departamentos</a></button></div>
        <div><button type="button" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Administrar Ticket's</button></div>
    </div>
</div>
@endsection