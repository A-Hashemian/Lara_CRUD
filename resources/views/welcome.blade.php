<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lara_CRUD</title>


        <link href="{{asset('css/app.css')}}" ref="stylesheet">
        <script type="module" src="{{ asset('js/app.js') }}" defer></script>

    </head>
    <body>
       <div id="app"></div>
    </body>
</html>
