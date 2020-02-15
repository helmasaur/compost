<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Compost</title>
    </head>
    <body>
        @guest
            @include('auth/login')
        @endguest
        @auth
            @include('auth/logout')
        @endauth
    </body>
</html>
