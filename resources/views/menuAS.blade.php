@extends('layouts.app')




@section('body')
<center>



<dir>
    <div class="h-56 grid grid-cols-1 gap-2  ">
    <dir>
        <div><a href="{{route('logout.perform')}}" type="button" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Cerrar sesión</a></div>
    <div><a href="{{route('index')}}" type="button" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Regresar</a></div>
    </div>

</center>
@endsection