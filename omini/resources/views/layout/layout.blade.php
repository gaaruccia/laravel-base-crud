<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
        <script src="/js/app.js"></script>
        <title>Omini</title>
    </head>
    <body>
        @include("components.header")
       
       @yield("content")
       
        @include("components.footer")
    </body>
</html>
