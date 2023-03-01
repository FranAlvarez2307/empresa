@extends('layouts.app')




@section('body')
<center>

<div class="flex justify-center ">

<dir>
    <div class="h-56 grid grid-cols-1 gap-2 content-center justify-items-center ">
    <dir>
    <div><a href="{{route('clientes.index')}}" type="submit" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900" >Administrar Perfiles</a></div><dir></dir>
        <div><a href="{{route('depas.index')}}" type="button" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Departamentos</a></div><dir></dir>
        <div><a href="{{route('tickets.index')}}" type="button" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Administrar Ticket's</a></div><dir></dir>
        <div><a href="{{route('logout.perform')}}" type="button" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Cerrar sesión</a></div>
    </div>
</div>
</center>
@endsection