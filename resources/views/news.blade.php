<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME','Ifiag Blog')}}</title>
    @vite('resources/css/app.css')
</head>
<body>
@include('Components.header')
@include('Components.newscards')
@include('Components.footer') 
</body>
</html>