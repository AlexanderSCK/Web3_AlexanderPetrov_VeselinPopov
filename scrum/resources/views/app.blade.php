<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="w    th=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Scrumboard</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Vuetify CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/vuetify/2.1.1/vuetify.min.css">
        <link href="{{ asset('css/app.css')}}">
        
        <!-- Styles -->
        <style>
        </style>
    </head>
    <body>
        <div id="app"></div>
        <script scr="{{asset('js/app.js')}}"></script>
    </body>
</html>
