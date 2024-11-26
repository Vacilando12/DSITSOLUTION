<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css','resources/js/app.js'])
        <title>DS IT Solutions</title>
        <link rel="icon" type="image/x-icon" href="/images/DSITlogo.png">

    </head>
    <body class="antialiased">
    @include('navbar')
        
                

        
        @yield('content')
   
    </body>
    
</html>
