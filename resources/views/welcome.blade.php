<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{env('APP_NAME','Ifiag Blog')}}</title>
    @vite('resources/css/app.css')
</head>

<body >
@include('Components.header')
@include('Components.latest')
@include('Components.hot')
@yield('content')
@include('Components.footer')
</body>

</html>