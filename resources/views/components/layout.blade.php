<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Job board</title>
        @vite(['resources/css/app.css','resources/css/app.js '])
    </head>
    <body class="mx-auto mt-10 max-w-2xl">
        {{$slot}}
    </body>
</html>
