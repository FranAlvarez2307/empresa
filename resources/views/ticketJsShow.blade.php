@extends('layouts.app')
@section('title', 'Macuin')
@section('body')
<center>

<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<h1>TICKET</h1>



<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                Autor
                </th>
                <th scope="col" class="px-6 py-3">
                    Departamento
                </th>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                Detalles
                </th>
                <th scope="col" class="px-6 py-3">
                    Estatus

                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                {{$ticket->autor}}
                </th>
                <td class="px-6 py-4">
                {{$ticket->departamento}}
                </td>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                {{$ticket->detalles}}
                </td>
                <td class="px-6 py-4">
                {{$ticket->estatus}}
                </td>
            </tr>
            
            </tr>
        </tbody>
    </table>
<br>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Auxiliar
                </th>
                <th scope="col" class="px-6 py-3">
                    Clasificacion
                </th>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Comentarios Jefe
                </th>
                <th scope="col" class="px-6 py-3">
                    Comentarios Auxiliar

                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                {{$ticket->auxiliar}}
                </th>
                <td class="px-6 py-4">
                {{$ticket->clasificacion}}
                </td>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                {{$ticket->comentariosToAuxiliar}}
                </td>
                <td class="px-6 py-4">
                {{$ticket->comentariosToCliente}}
                </td>
            </tr>
            
            </tr>
        </tbody>
    </table>
</div>
<br>
<a href = "{{route('ticketsJs.edit',$ticket)}}" type="submit" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Control del ticket</a>

<a href = "{{route('ticketsAux.reporte',$ticket)}}" target="_blank" type="submit" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Generar Reporte</a>

<form action="{{route('ticketsJs.destroy',$ticket)}}" method="post">
@csrf
@method('delete')
<button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Eliminar</button> 
</form>

<a href="{{route('ticketsJs.index')}}" type="submit" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Volver</a>
</center>
@endsection