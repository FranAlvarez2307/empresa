<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css','resources/js/app.js'])



    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Macuin Dasboar') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])    
    
</head>

<body style="background-color:#9CA3AF">
    <center>
    <h1>TICKET</h1>



    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        
                    Autor: {{$ticket->autor}}<br>
                    Departamento: {{$ticket->departamento}}<br>
                    Detalles: {{$ticket->detalles}}<br>
                    Estatus: {{$ticket->estatus}}<br>
                    Auxiliar: {{$ticket->auxiliar}}<br>
                    Clasificacion: {{$ticket->clasificacion}}<br>
                    Comentarios Jefe: {{$ticket->comentariosToAuxiliar}}<br>
                    Comentarios Auxiliar: {{$ticket->comentariosToCliente}}<br>
    </div>
    <br>
</body>
</html>

