<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
         
        <link rel="stylesheet" href="{{ asset('assets/app.css') }}">
        
    </head>
    <body >
        {{--Tous nos contenus seront affichés ici--}}
        @yield('content')

        {{--Nos script javascript--}}
        @include('script')
    </body>
</html>
