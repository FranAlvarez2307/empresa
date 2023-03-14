@extends('layouts.app')

@section('title', 'Macuin')

@section('body')

<center>
<h1>TICKETS</h1>
<div><a href="{{route('index')}}" type="button" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Regresar</a></div>
<a href = "{{route('tickets.create',$tickets)}}" type="submit" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Crear</a>

<ul>
    @foreach($tickets as $ticket)
    <li><a href="{{route('tickets.show', $ticket->id)}}">Ticket: {{$ticket->autor}} / {{$ticket->departamento}} / {{$ticket->created_at}}</a></li>
    @endforeach

    
</ul>


</center>     
@endsection